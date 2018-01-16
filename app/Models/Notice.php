<?php

namespace App\Models;

class Notice extends Base
{
    protected $table = 'notices';
    public function noticeList()
    {
        $data = $this->orderBy('id', 'desc')->withTrashed()->paginate(config('blog.pageSize'));
        return $data ?? [];
    }

    public function getNoticeById(int $id)
    {
        return self::find(intval($id));
    }

    public function insertNotice(array $data)
    {
        return self::create($data);
    }

    public function deleteNotice(int $id)
    {
        return self::destroy(intval($id));
    }


    public function updateNotice($id, $data)
    {
        return $this->where('id', intval($id))->update($data);
    }


}