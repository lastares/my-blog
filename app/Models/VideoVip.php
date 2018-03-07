<?php

namespace App\Models;

class VideoVip extends Base
{
    protected $table = 'video_vip';
    protected $guarded = ['id'];
    protected $fillable = ['video_vip_name', 'video_vip_price', 'video_vip_description', 'video_vip_logo'];


    private $select = ['id', 'video_vip_price', 'video_vip_name', 'video_vip_description', 'video_vip_logo'];

    public function videoVipList()
    {
        $data = $this->select($this->select)->orderBy('id', 'desc')->paginate(15);
        return $data ?? [];
    }

    /**
     * 获取一条banner信息
     * @param int $id
     * @return mixed
     * @time 20171215
     */
    public function getVideoVipById(int $id)
    {
        return self::find(intval($id));
    }

    /**
     * 写入Banner
     * @param array $data
     * @return mixed
     * @time 20171215
     */
    public function insertVideoVip(array $data)
    {
        return self::create($data);
    }

    /**
     * 删除Banner
     * @param int $id
     * @return int
     * @time 20171215
     */

    public function updateVideoVip($id, $data)
    {
        return $this->where('id', intval($id))->update($data);
    }


    public function deleteVideoVip(int $id)
    {
        return $this->where('id', intval($id))->forceDelete();
    }


    public function vips()
    {
        return $this->select($this->select)->orderBy('id', 'desc')->get();
    }

}