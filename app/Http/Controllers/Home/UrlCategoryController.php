<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Tools;
use App\Models\ToolsCategory;
use function compact;
use function response;

class UrlCategoryController extends BaseController
{
    public function index()
    {
        return view('home.urlCategory.index');
    }

}