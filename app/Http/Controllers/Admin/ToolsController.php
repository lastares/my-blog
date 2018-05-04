<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\FriendshipLink\Store;
use App\Models\Category;
use App\Models\FriendshipLink;
use App\Models\Tools;
use App\Models\ToolsCategory;
use App\Models\UrlCategory;
use Cache;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tools $tools)
    {
        $data = $tools->toolsList();
        $pageString = $data->links();
        $assign = compact('data', 'pageString');
        return view('admin.tools.index', $assign);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UrlCategory $toolsCategory)
    {
        $category = Category::all();
        $toolsCategories = $toolsCategory->getTree();
        $assign = compact('toolsCategories', 'category');
        return view('admin.tools.create', $assign);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tools $tools)
    {
        $data = $request->except('_token');
        $result = $tools->createUrl($data);
        if ($result) {
            // 更新缓存
//            Cache::forget('common:friendshipLink');
        }
        return redirect('admin/tools/index');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, UrlCategory $toolsCategory)
    {
        $category = UrlCategory::all();
        $data = Tools::find($id);
        $toolsCategories = $toolsCategory->getTree();
        $assign = compact('data', 'toolsCategories', 'category');
        return view('admin.tools.edit', $assign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tools $tools)
    {
        $id = $request->input('id', 0);
        if($id == 0) {
            return response()->json(['code' => 1, 'msg' => '参数错误']);
        }
        $data = $request->except('_token');
        $result = $tools->updateTools($id, $data);
        if ($result !== false) {
            return response()->json(['code' => 0 , 'msg' => '操作成功']);
            // 更新缓存
//            Cache::forget('common:friendshipLink');
        }
        return response()->json(['code' => 1, 'msg' => '操作失败']);
    }

    /**
     * 排序
     *
     * @param Request $request
     * @param FriendshipLink $friendshipLinkModel
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sort(Request $request, Tools $tools)
    {
        $data = $request->except('_token');
        $editData = [];
        foreach ($data as $k => $v) {
            $editData[] = [
                'id' => $k,
                'sort' => $v
            ];
        }
        $result = $tools->updateBatch($editData);
        if ($result) {
            // 更新缓存
            Cache::forget('common:friendshipLink');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Tools $tools)
    {
        $map = [
            'id' => $id
        ];
        $result = $tools->destroyData($map);
        if ($result) {
            // 更新缓存
//            Cache::forget('common:friendshipLink');
        }
        return redirect()->back();
    }

    /**
     * 恢复删除的友情链接
     *
     * @param                $id
     * @param FriendshipLink $friendshipLinkModel
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore($id, Tools $tools)
    {
        $result = $tools->where('id', $id)->restore();
        if ($result) {
            // 更新缓存
//            Cache::forget('common:friendshipLink');
        }
        return redirect('admin/tools/index');
    }

    /**
     * 彻底删除友情链接
     *
     * @param                $id
     * @param FriendshipLink $friendshipLinkModel
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function forceDelete($id, Tools $tools)
    {
        $tools->where('id', $id)->forceDelete();
        return redirect('admin/tools/index');
    }
}
