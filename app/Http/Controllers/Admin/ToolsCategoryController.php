<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\Store;
use App\Models\ToolsCategory;
use Illuminate\Http\Request;

class ToolsCategoryController extends Controller
{
    public function index(ToolsCategory $toolsCategory)
    {
        $data = $toolsCategory->getTree();
        $assign = compact('data');
        return view('admin.tools_category.index', $assign);
    }


    public function create(ToolsCategory $toolsCategory)
    {
        $categories = $toolsCategory->getTree();
        $assign = compact('categories');
        return view('admin.tools_category.create', $assign);
    }


    public function store(Request $request, ToolsCategory $toolsCategory)
    {
        $data = $request->except('_token');
        $result = $toolsCategory->createCategory($data);
        if ($result !== false) {
            // 更新缓存
//            Cache::forget('common:category');
            return returnJson();
        }

        return returnJson(1, '操作失败');
    }
}