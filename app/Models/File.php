<?php

namespace App\Models;

use function unlinkImage;

class File extends Base
{
    protected $table = 'files';
    protected $guarded = ['id'];
    protected $fillable = ['file_title', 'file_path', 'status'];

    public function fileList(string $file_title = '')
    {
        $where = [];
        if (!empty($file_title)) {
            $where[] = ['file_title', 'like', '%' . $file_title . '%'];
        }
        $data = $this->where($where)->orderBy('id', 'desc')->paginate(config('blog.pageSize'));
        return $data ?? [];
    }


    public function getFileById(int $id)
    {
        return self::find(intval($id));
    }


    public function insertFile(array $data)
    {
        return self::create($data);
    }

    /**
     * 删除Banner
     * @param int $id
     * @return int1
     * @time 20171215
     *
     * public function deleteBanner(int $id)
     * {
     * return self::destroy(intval($id));
     * }*/


    public function updateFile($id, $data, $_file_path)
    {
        $banner_path = $this->getFilePathById($id);
        if ($banner_path !== $_file_path) {
            unlinkImage($banner_path);
        }
        return $this->where('id', intval($id))->update($data);
    }


    public function deleteFile(int $id)
    {
        $banner_path = $this->getFilePathById($id);
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
    public function getFilePathById(int $id)
    {
        return $this->where('id', intval($id))->value('banner_path');
    }
}