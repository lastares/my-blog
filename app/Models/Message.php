<?php

namespace App\Models;

class Message extends Base
{
    protected $table = 'messages';

    public function messageInsert($data)
    {
        return $this->create($data)->id;
    }


    public function messageList()
    {
        $data = $this->select('image_id', 'msg_title', 'msg_content', 'created_at')->orderBy('id', 'desc')->get();
        foreach($data as $k => &$v)
        {
            $v->image_path = config('blog.picture_upload_path') . app('db')->table('banners')->where('id', $v->image_id)->value('banner_path');
        }
        return $data;
    }
}