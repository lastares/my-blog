<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Admin\BaseController;
use function response;

class CommonController extends BaseController
{
    public function isLogin()
    {
        if (empty(session('user'))) {
            return response()->json(['code' => 0, 'msg' => '亲，您还未登录']);
        }
    }

    const FIELD_CODE = 'code';
    const FIELD_MESSAGE = 'msg';
    const FIELD_DATA = 'data';

    private $data = [
        self::FIELD_CODE => 0,
        self::FIELD_MESSAGE => '',
        self::FIELD_DATA => []
    ];

    protected function error($msg = '操作失败')
    {
        $this->data[self::FIELD_CODE] = 1;
        $this->data[self::FIELD_MESSAGE] = $msg;
        return $this->data;
    }

    protected function success($msg='操作成功', $data = [])
    {
        $this->data[self::FIELD_CODE] = 0;
        $this->data[self::FIELD_MESSAGE] = $msg;
        $this->data[self::FIELD_DATA] = $data;
        return $this->data;
    }


    protected function encryptPassword($name, $password)
    {
        return hash('sha256', md5($password . md5('songYaoFeng+huangWenYu' . 'lingchen') . 19930929) . '@#(``)' . $name);
    }
}