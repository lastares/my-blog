<?php

namespace App\Models;

class Message extends Base
{
    protected $table = 'messages';

    public function messageInsert($data)
    {
        return $this->create($data)->id;
    }

    public function getMessageById(int $id)
    {
        $data = $this->where('id', intval($id))->first()->toArray();
        $_data = &$data;
        $data['image_path'] = $this->getImgPathById($data['image_id']);
        $location = getCityByIp($data['ip']);
        $data['location'] = $location['country'] . $location['province'] . $location['city'];
        return $_data;
    }


//    public function messageList()
//    {
//        $data = $this->select('image_id', 'msg_content', 'created_at')->orderBy('id', 'desc')->get();
//        foreach($data as $k => &$v)
//        {
//            $v->image_path = config('blog.picture_upload_path') . app('db')->table('banners')->where('id', $v->image_id)->value('banner_path');
//        }
//        return $data;
//    }

    //前台留言列表
    public function messageList()
    {
        $data = $this->orderBy('id', 'desc')->paginate(15);
        foreach ($data as $k => &$v) {
            $v->image_path = $this->getImgPathById($v->image_id);
            $location = getCityByIp($v->ip);
            $v->location = $location['country'] . $location['province'] . $location['city'];
        }
        return $data;
    }
    public function getImgPathById(int $id)
    {
        return app('db')->table('banners')->where('id', $id)->value('banner_path');
    }
}