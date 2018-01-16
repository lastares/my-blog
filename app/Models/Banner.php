<?php

namespace App\Models;

use function unlinkImage;

class Banner extends Base
{
    protected $table = 'banners';
    protected $guarded = ['id'];
    protected $fillable = ['banner_title', 'banner_path', 'status'];

    public function bannerList(string $banner_title = '')
    {
        $where = [];
        if (!empty($banner_title)) {
            $where[] = ['banner_title', 'like', '%' . $banner_title . '%'];
        }
        $data = $this->where($where)->orderBy('id', 'desc')->paginate(config('blog.pageSize'));
        return $data ?? [];
    }

    /**
     * 获取一条banner信息
     * @param int $id
     * @return mixed
     * @time 20171215
     */
    public function getBannerById(int $id)
    {
        return self::find(intval($id));
    }

    /**
     * 写入Banner
     * @param array $data
     * @return mixed
     * @time 20171215
     */
    public function insertBanner(array $data)
    {
        return self::create($data);
    }

    /**
     * 删除Banner
     * @param int $id
     * @return int
     * @time 20171215
     *
     * public function deleteBanner(int $id)
     * {
     * return self::destroy(intval($id));
     * }*/


    public function updateBanner($id, $data, $_banner_path)
    {
        $banner_path = $this->getImagePathById($id);
        if ($banner_path !== $_banner_path) {
            unlinkImage($banner_path);
        }
        return $this->where('id', intval($id))->update($data);
    }


    public function deleteBanner(int $id)
    {
        $banner_path = $this->getImagePathById($id);
        if ($banner_path) {
            unlinkImage($banner_path);
        }
        return $this->where('id', intval($id))->forceDelete();
    }

    /**
     * 前台首页banner展示
     */

    public function homeBanners()
    {
        return $this->select('id', 'banner_path')->get();
    }


    // 获取图片路径
    public function getImagePathById(int $id)
    {
        return $this->where('id', intval($id))->value('banner_path');
    }
}