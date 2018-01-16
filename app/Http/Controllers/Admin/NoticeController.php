<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notice;
use Cache;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    public function showList(Notice $notice)
    {
        $notices = $notice->noticeList();
        $pageString = $notices->links();
        return view('admin/notice/index', compact('notices', 'pageString'));
    }

    public function insert()
    {
        return view('notice/insert');
    }

    public function create(Request $request, Notice $notice)
    {
        $data = $request->except(['_token']);
        if (!$notice->insertNotice($data)) {
            return response()->json(['code' => 1, 'msg' => '操作失败']);
        }
        // 更新公告缓存
        Cache::forget('common:notices');
        return response()->json(['code' => 0, 'msg' => '操作成功']);
    }

    public function edit(Request $request, Notice $noticeModel)
    {
        $id = (int)$request->input('id', 0);
        if ($id == 0) {
            return response()->json(['code' => 1, 'msg' => '缺少id参数']);
        }
        $notice = $noticeModel->getNoticeById($id);
        return view('notice/edit', compact('notice'));
    }

    public function update(Request $request, Notice $notice)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return response()->json(['code' => 1, 'msg' => '缺少id参数']);
        }

        $data = $request->except(['_token']);
        $result = $notice->updateNotice($id, $data);
        if ($result !== false) {
            // 更新公告缓存
            Cache::forget('common:notices');
            return response()->json(['code' => 0, 'msg' => '操作成功']);
        }
        return response()->json(['code' => 1, 'msg' => '操作失败']);
    }

    public function delete(Request $request, Notice $notice)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return response()->json(['code' => 1, 'msg' => '参数ID参数错误']);
        }

        $result = $notice->deleteNotice($id);
        if ($result !== false) {
            return response()->json(['code' => 0, 'msg' => '删除成功']);
        }
        return response()->json(['code' => 1, 'msg' => '删除失败']);
    }

    public function getNoticeById(Request $request, Notice $notice)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return response()->json(['code' => 1, 'msg' => '参数错误']);
        }

        $noticeInfo = $notice->getNoticeById($id);
        if($noticeInfo) {
            return response()->json(['code' => 0, 'msg' => '操作成功', 'data' => $noticeInfo]);
        }

        return response()->json(['code' => 1, 'msg' => '操作失败']);
    }
}