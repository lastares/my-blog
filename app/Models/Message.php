<?php

namespace App\Models;

class Message extends Base
{
    protected $table = 'messages';

    public function messageInsert($data)
    {
        return $this->create($data)->id;
    }
}