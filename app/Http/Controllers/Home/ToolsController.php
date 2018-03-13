<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Tools;
use App\Models\ToolsCategory;
use App\Models\UrlCategory;
use function compact;
use Request;
use function response;

class ToolsController extends BaseController
{
    public function index(Tools $tools, UrlCategory $category)
    {
        $twoCategory = $category->categories();
        return view('home.tools.index', compact('twoCategory'));
    }


    public function tools_category(int $id = 0, string $catename, Tools $tools)
    {
        if($id == 0) {
            return response()->json(['code' => 1, 'msg' => '参数错误']);
        }

        $urlsData = $tools->getUrls($id);
        return view('home.tools.singleUrls', ['urlsData' => $urlsData, 'title' => $catename]);
    }

    public function navigateUrls(int $id, ToolsCategory $toolsCategory)
    {
        $urlsData = $toolsCategory->categoryUrls2($id);
        return view('home.tools.navigateUrls', compact('urlsData'));
    }

    public function urlSearch(Request $request, Tools $tools)
    {
        $urls = $tools->search();
        return view('home.tools.search', ['urls' => $urls, 'title' => '网址导航']);
    }

}