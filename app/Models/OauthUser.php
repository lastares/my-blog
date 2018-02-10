<?php

namespace App\Models;

class OauthUser extends Base
{
    protected $table = 'oauth_users';


    public function getUserByMail(string $mail, int $user_id)
    {
        return $this->where(['id' => $user_id, 'email' => $mail])->first();
    }

    public function updateUser(int $user_id, array $data)
    {
        return $this->where('id', $user_id)->update($data);
    }

    public function getUserInfoById(int $id)
    {
        return $this->where('id', intval($id))->first();
    }
}
