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
}