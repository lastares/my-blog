<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PageCount\ConfigInc;
use App\Http\Controllers\PageCount\LoginService;
use App\Http\Controllers\PageCount\ReportService;

class PageCountController extends Controller
{
    public static function pageInfo()
    {
        /**
         * Demo of Tongji API
         * set your information in Config.inc. php such as USERNAME, PASSWORD ... before use
         * especially, you can modify this Demo on your need!
         *
            require_once('Config.inc.php');
            require_once('LoginService.inc.php');
            require_once('ReportService.inc.php');
         */
        $loginService = new LoginService(ConfigInc::LOGIN_URL, ConfigInc::UUID);

        // preLogin
        if (!$loginService->preLogin(ConfigInc::USERNAME, ConfigInc::TOKEN)) {
            exit();
        }

        // doLogin
        $ret = $loginService->doLogin(ConfigInc::USERNAME, ConfigInc::PASSWORD, ConfigInc::TOKEN);
        if ($ret) {
            $ucid = $ret['ucid'];
            $st = $ret['st'];
        }
        else {
            exit();
        }

        $reportService = new ReportService(ConfigInc::API_URL, ConfigInc::USERNAME, ConfigInc::TOKEN, $ucid, $st);

        // get site list
        $ret = $reportService->getSiteList();
        // echo $ret['raw'] . PHP_EOL;

        $siteList = $ret['body']['data'][0]['list'];
        if (count($siteList) > 0) {
            $siteId = $siteList[0]['site_id'];
            $result = [];
            // get report data of the first site
            $ret = $reportService->getData(array(
                'site_id' => $siteId,                   //站点ID
                'method' => 'trend/time/a',             //趋势分析报告
                'start_date' => date('Ymd',time()),             //所查询数据的起始日期
                'end_date' => date('Ymd',time()),               //所查询数据的结束日期
                'metrics' => 'pv_count,visitor_count,new_visitor_count,ip_count',  //所查询指标为PV和UV
                'max_results' => 0,                     //返回所有条数
                'gran' => 'day',                        //按天粒度
            ));
            $result['timeSpan'] = $ret['body']['data'][0]['result']['timeSpan'][0];
            $result['fields'] = $ret['body']['data'][0]['result']['fields'];
            $result['fields'] = array_splice($result['fields'], 1, 4);
            $result['pageSum'] = $ret['body']['data'][0]['result']['pageSum'][0];
            $result['seePageInfo'] = array_combine($result['fields'], $result['pageSum']);
            unset($result['fields']);
            unset($result['pageSum']);
            return $result;
            // echo $ret['raw'] . PHP_EOL;
        }

        // doLogout
        $loginService->doLogout(ConfigInc::USERNAME, ConfigInc::TOKEN, $ucid, $st);

    }

}