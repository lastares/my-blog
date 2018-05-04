<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\UrlCategory;
use Cache;
use Illuminate\Http\Request;

class UrlCategoryController extends Controller
{
    public function index(UrlCategory $category)
    {
        $data = $category->getTree();
        $assign = compact('data');
        return view('admin.urlCategory.index', $assign);
    }


    public function create(UrlCategory $category)
    {
        $categories = $category->getTree();
        $assign = compact('categories');
        return view('admin.urlCategory.create', $assign);
    }

    public function edit(int $id, UrlCategory $category)
    {
        $categories = $category->getTree();
        $data = UrlCategory::find($id);
        $assign = compact('data', 'categories');
        return view('admin.urlCategory.edit', $assign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, UrlCategory $categoryModel)
    {
        $map = [
            'id' => $id
        ];
        $data = $request->except('_token');
        $result = $categoryModel->updateData($map, $data);
        if ($result) {
            // 更新缓存
//            Cache::forget('common:category');
            return returnJson();
        }
    }


    public function store(Request $request, UrlCategory $Category)
    {
        $data = $request->except('_token');
        $result = $Category->createCategory($data);
        if ($result !== false) {
            // 更新缓存
//            Cache::forget('common:category');
            return returnJson();
        }

        return returnJson(1, '操作失败');
    }

    /**
     * 彻底删除分类
     *
     * @param          $id
     * @param Category $categoryModel
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function forceDelete($id, UrlCategory $categoryModel)
    {
        $categoryModel->where('id', $id)->forceDelete();
        return redirect('admin/urlCategory/index');
    }

    public function destroy($id, UrlCategory $categoryModel)
    {
        $map = [
            'id' => $id
        ];
        $result = $categoryModel->destroyData($map);
        if ($result) {
            // 更新缓存
//            Cache::forget('common:category');
        }
        return redirect('admin/urlCategory/index');
    }
}