<?php

namespace App\Models;

class FriendshipLink extends Base
{
    protected $table = 'friendship_links';
    protected $fillable = ['name', 'url', 'sort'];

    /**
     * 添加数据
     *
     * @param array $data
     * @return bool
     */
    public function storeData($data)
    {
        // 如果排序是空；则设置为null
        $data['sort'] = empty($data['sort']) ? null : $data['sort'];
        return parent::storeData($data);
    }

    /**
     * 修改数据
     *
     * @param array $map
     * @param array $data
     * @return bool
     */
    public function updateData($map, $data)
    {
        // 如果要修改sort；且sort是空；则设置为null
        if (isset($data['sort']) && empty($data['sort'])) {
            $data['sort'] = null;
        }
        return parent::updateData($map, $data);
    }

    /**
     * 给url添加http 或者删除/
     *
     * @param  string  $value
     * @return string
     */
    public function setFirstNameAttribute($value)
    {
        // 如果没有http 则补上http
        if (strpos($value, 'http') === false) {
            $value = 'http://'.$value;
        }
        // 删除右侧的/
        $value = rtrim($value, '/');
        $this->attributes['first_name'] = strtolower($value);
    }

    /**前台首页左侧左邻右舍**/
    public static function linkList()
    {
        return self::select('name', 'url')->orderBy('id', 'desc')->get();
    }

    /** 前台更多左邻右舍 **/
    public static function friendLink()
    {
        $data = self::select('name', 'url')->orderBy('id', 'desc')->get();
        $bannerList = Banner::getLinkPicture();
        $bannerCount = count($bannerList) - 1;
        foreach($data as $k => &$v)
        {
            $v->linkImage = config('blog.picture_upload_path') . $bannerList[mt_rand(0, $bannerCount)];
        }
        return $data;
    }
}
