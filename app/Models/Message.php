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
        return $this->where('id', intval($id))->first()->toArray();
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
        }

        return $data;
    }
    public function getImgPathById(int $id)
    {
        return app('db')->table('banners')->where('id', $id)->value('banner_path');
    }
}