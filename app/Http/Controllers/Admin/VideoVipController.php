<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use App\Models\VideoVip;
use Illuminate\Http\Request;

class VideoVipController extends BaseController
{

    /**
     * banner列表
     * @param Request $request
     * @param Banner $banner
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @time 20171215
     */
    public function index(VideoVip $videoVip)
    {
        $videoVips = $videoVip->videoVipList();
        $pageString = $videoVips->links();
        return view('admin/videoVip/index', compact('videoVips', 'pageString'));
    }

    public function insert()
    {
        return view('admin/videoVip/insert');
    }

    /**
     * banner入库
     * @param Request $request
     * @param Banner $banner
     * @return array
     * @time 20171215
     */
    public function create(Request $request, VideoVip $videoVip)
    {
        $data = $request->except(['_token']);
        if (!$videoVip->insertVideoVip($data)) {
            return $this->error('操作失败');
        }
        return $this->success();
    }

    public function edit($id, VideoVip $videoVipModel)
    {
        if ($id == 0) {
            return $this->error('缺少id参数');
        }
        $videoVip = $videoVipModel->getVideoVipById($id);
        return view('admin/videoVip/update', compact('videoVip'));
    }

    public function update(int $id, Request $request, VideoVip $videoVip)
    {
        if ($id == 0) {
            return $this->error('缺少id参数');
        }

        $data = $request->except(['_token']);

        $result = $videoVip->updateVideoVip($id, $data);
        if ($result !== false) {
            return $this->success();
        }

        return $this->error('操作失败');
    }

    public function delete(Request $request, Banner $bannerModel)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return $this->error('参数ID参数错误');
        }

        $result = $bannerModel->deleteBanner($id);
        if ($result !== false) {
            return $this->success();
        }
        return $this->success('删除失败');
    }

    public function forceDelete($id, VideoVip $videoVip)
    {
        if ($videoVip->deleteVideoVip($id) !== false) {
            return $this->success();
        } else {
            return $this->error();
        }
    }

    public function download(Request $request, Banner $banner)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return $this->error('参数错误');
        }
        $bannerPath = $banner->getImagePathById($id);
        $fileName = base_path('public/uploads/banner/') . $bannerPath;
        return response()->download($fileName);

    }
}