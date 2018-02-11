<?php
/**
 * This file is part of the KQC package.
 *
 * Copyright (c) Hangzhou Kuaiqiangche Network Technology Co,.ltd. All rights reserved.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author fanyilong <fanyilong@kuaiqiangche.com>
 * @copyright 2017 Hangzhou Kuaiqiangche Network Technology Co,.ltd. All rights reserved.
 * @package KQC
 */

namespace App\Http\Controllers\Admin;
// 引入鉴权类
use App\Http\Controllers\Controller;
use Request;

// 引入上传类

class BaseController extends Controller
{
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

    /**
     * 上传图片
     */
//    public function uploadImg()
//    {
//        $targetDir = config('blog._picture_upload_path') . date('Y-m-d');
//        $file = Request::file('file');
//        if (!is_dir($targetDir)) {
//            @mkdir($targetDir, 0777, true);
//        }
//        $originFilename = $file->getClientOriginalName();
//        $fileSize = $file->getSize();
//        $file_mime = $file->getClientOriginalExtension();
//        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
//        if (in_array($file_mime, array('jpg', 'gif', 'png'))) {
//            if ($fileSize > 1024 * 20 * 1024) {
//                return response()->json(['code' => -1, 'msg' => '文件大小必须小于20M', 'data' => []]);
//            }
//        } else {
//            //这里修改主要针对PDF合同 保留原有名称中的标识 topay-JCFK- ；pledge-JCFK；purchase-JCFK；daiXiao-JCFK 等；
//            $originFilename = substr($originFilename, 0, strrpos($originFilename, '.'));//不带扩展名的文件名
//            $fileName = $originFilename . uniqid() . '.' . $file->getClientOriginalExtension();
//        }
//        if ($fileSize > 1024 * 50 * 1024) {
//            return response()->json(['code' => -1, 'msg' => '上传文件最大为50M', 'data' => []]);
//        }
//        if (!move_uploaded_file($_FILES['file']['tmp_name'], $targetDir . '/' . $fileName)) {
//            return response()->json(['code' => 1, 'msg' => '上传失败']);
//        }
//        $data = date('Y-m-d') . '/' . $fileName;
//        $message = ['code' => 0, 'msg' => '上传成功', 'data' => $data, 'prefix_route' => config('blog.picture_upload_path')];
//        return response()->json($message);
//    }
    public function uploadImg(\Illuminate\Http\Request $request)
    {
        $disk = \Storage::disk('qiniu'); //使用七牛云上传
        $time = 'banner/' . date('Ymd');
        $filename = $disk->put($time, $request->file('file'));//上传
        if(!$filename) {
            return response()->json(['code' => 1, 'msg' => '上传失败']);
        }
        $img_url = $disk->getDriver()->downloadUrl($filename); //获取下载链接
        return response()->json(['code' => 0, 'msg' => '上传成功', 'img_url' => $img_url]);
    }


    public function uploadFiles()
    {
        $targetDir = config('blog._file_upload_path') . date('Y-m-d');
        $file = Request::file('file');
        if (!is_dir($targetDir)) {
            @mkdir($targetDir, 0777, true);
        }
        $originFilename = $file->getClientOriginalName();
        $fileSize = $file->getSize();
        $file_mime = $file->getClientOriginalExtension();
        $fileName = uniqid() . '.' . $file->getClientOriginalExtension();
//        if (in_array($file_mime, array('jpg', 'gif', 'png'))) {
//            if ($fileSize > 1024 * 20 * 1024) {
//                return response()->json(['code' => -1, 'msg' => '文件大小必须小于20M', 'data' => []]);
//            }
//        } else {
//            //这里修改主要针对PDF合同 保留原有名称中的标识 topay-JCFK- ；pledge-JCFK；purchase-JCFK；daiXiao-JCFK 等；
//            $originFilename = substr($originFilename, 0, strrpos($originFilename, '.'));//不带扩展名的文件名
//            $fileName = $originFilename . uniqid() . '.' . $file->getClientOriginalExtension();
//        }
//        if ($fileSize > 1024 * 50 * 1024) {
//            return response()->json(['code' => -1, 'msg' => '上传文件最大为50M', 'data' => []]);
//        }
        if (!move_uploaded_file($_FILES['file']['tmp_name'], $targetDir . '/' . $fileName)) {
            return response()->json(['code' => 1, 'msg' => '上传失败']);
        }
        $data = date('Y-m-d') . '/' . $fileName;
        $message = ['code' => 0, 'msg' => '上传成功', 'data' => $data, 'prefix_route' => config('blog._file_upload_path')];
        return response()->json($message);
    }

}