<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Tools;
use App\Models\ToolsCategory;
use function compact;
use function response;

class ToolsController extends BaseController
{
    public function index(Tools $tools, ToolsCategory $toolsCategory)
    {
        $urlsData = $toolsCategory->categoryUrls();
        return view('home.tools.index', compact('urlsData'));
    }


    public function tools_category(int $id = 0, string $catename, Tools $tools)
    {
        if($id == 0) {
            return response()->json(['code' => 1, 'msg' => '参数错误']);
        }

        $urlsData = $tools->getUrls($id);
        return view('home.tools.singleUrls', ['urlsData' => $urlsData, 'catename' => $catename]);
    }

    public function navigateUrls(int $id, ToolsCategory $toolsCategory)
    {
        $urlsData = $toolsCategory->categoryUrls2($id);
        return view('home.tools.navigateUrls', compact('urlsData'));
    }
}