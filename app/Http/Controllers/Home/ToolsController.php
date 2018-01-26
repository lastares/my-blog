<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Tools;

class ToolsController extends BaseController
{
    public function index(Tools $tools)
    {
        $data = $tools->topCategory();
        return view('home.tools.index', compact('data'));
    }
}