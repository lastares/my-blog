<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\Store;
use App\Models\Category;
use Cache;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Category $category)
    {
        $data = $category->getTree();
        $assign = compact('data');
        return view('admin.category.index', $assign);
    }


    public function create(Category $category)
    {
        $categories = $category->getTree();
        $assign = compact('categories');
        return view('admin.category.create', $assign);
    }

    public function edit(int $id, Category $category)
    {
        $categories = $category->getTree();
        $data = Category::find($id);
        $assign = compact('data', 'categories');
        return view('admin.category.edit', $assign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Category $categoryModel)
    {
        $map = [
            'id' => $id
        ];
        $data = $request->except('_token');
        $result = $categoryModel->updateData($map, $data);
        if ($result) {
            // 更新缓存
            Cache::forget('common:category');
            return returnJson();
        }
    }


    public function store(Request $request, Category $Category)
    {
        $data = $request->except('_token');
        $result = $Category->createCategory($data);
        if ($result !== false) {
            // 更新缓存
            Cache::forget('common:category');
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
    public function forceDelete($id, Category $categoryModel)
    {
        $categoryModel->where('id', $id)->forceDelete();
        return redirect('admin/category/index');
    }

    public function destroy($id, Category $categoryModel)
    {
        $map = [
            'id' => $id
        ];
        $result = $categoryModel->destroyData($map);
        if ($result) {
            // 更新缓存
            Cache::forget('common:category');
        }
        return redirect('admin/category/index');
    }
}