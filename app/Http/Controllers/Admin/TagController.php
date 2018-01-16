<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Tag\Store;
use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cache;
use function response;
use function returnJson;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tag $tagModel)
    {
        $data = $tagModel::withTrashed()->orderBy('id', 'desc')->get();
        $assign = compact('data');
        return view('admin.tag.index', $assign);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store $request, Tag $tagModel)
    {
        $data = [
            'name' => $request->input('name')
        ];
        $result = $tagModel->storeData($data);
        if ($result !== false) {
            // 更新缓存
            Cache::forget('common:tag');
            return returnJson();
        }
        return returnJson(1, '操作失败');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Tag $tagModel)
    {
        $data = $tagModel->find($id);
        $assign = compact('data');
        return view('admin.tag.edit', $assign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Tag $tagModel)
    {
        if($id == 0) {
            return response()->json(['code' => 1, 'msg' => '参数错误']);
        }
        $data = $request->except('_token');
        $result = $tagModel->updateTag($id, $data);
        if ($result !== false) {
            // 更新缓存
            Cache::forget('common:tag');
            return response()->json(['code' => 0, 'msg' => '操作成功']);
        }
        return returnJson(1, '操作失败');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Tag $tagModel)
    {
        $map = [
            'id' => $id
        ];
        $result = $tagModel->destroyData($map);
        if ($result) {
            // 更新缓存
            Cache::forget('common:tag');
        }
        return redirect('admin/tag/index');
    }

    /**
     * 恢复删除的标签
     *
     * @param         $id
     * @param Tag     $tagModel
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function restore($id, Tag $tagModel)
    {
        $result = $tagModel->where('id', $id)->restore();
        if ($result) {
            // 更新缓存
            Cache::forget('common:tag');
        }
        return redirect('admin/tag/index');
    }

    /**
     * 彻底删除标签
     *
     * @param         $id
     * @param Tag     $tagModel
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function forceDelete($id, Tag $tagModel)
    {
        $tagModel->where('id', $id)->forceDelete();
        return redirect('admin/tag/index');
    }


    public function getTag(Request $request, Tag $tagModel)
    {
        $id = $request->input('id', 0);
        if($id == 0) {
            return returnJson(1, '参数错误');
        }

        $tag = $tagModel->getTagById($id);
        if($tag) {
            return returnJson(0, '获取标签成功', $tag);
        }

        return returnJson(1, '操作失败');
    }
}
