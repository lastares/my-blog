<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends BaseController
{

    /**
     * banner列表
     * @param Request $request
     * @param Banner $banner
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @time 20171215
     */
    public function showList(Request $request, Banner $banner)
    {
        $title = trim($request->input('banner_title', ''));
        $banners = $banner->bannerList($title);
        $pageString = $banners->links();
        $prefix_route = config('blog.picture_upload_path');
        return view('admin/banner/index', compact('banners', 'pageString', 'prefix_route'));
    }

    public function insert()
    {
        return view('admin/banner/insert');
    }

    /**
     * banner入库
     * @param Request $request
     * @param Banner $banner
     * @return array
     * @time 20171215
     */
    public function create(Request $request, Banner $banner)
    {
        $data = $request->except(['_token']);
        if (!$banner->insertBanner($data)) {
            return $this->error('操作失败');
        }
        return $this->success();
    }

    public function edit($id, Banner $bannerModel)
    {
        if ($id == 0) {
            return $this->error('缺少id参数');
        }
        $route_prefix = config('blog.picture_upload_path');
        $banner = $bannerModel->getBannerById($id);
        return view('admin/banner/update', compact('banner', 'route_prefix'));
    }

    public function update(Request $request, Banner $bannerModel)
    {
        $id = $request->input('id', 0);
        if ($id == 0) {
            return $this->error('缺少id参数');
        }

        $data = $request->except(['_token']);

        $_banner_path = $request->input('banner_path', '');
        $result = $bannerModel->updateBanner($id, $data, $_banner_path);
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

    public function forceDelete($id, Banner $banner)
    {
        if ($banner->deleteBanner($id) !== false) {
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