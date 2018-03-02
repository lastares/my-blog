<?php

namespace App\Models;

class Tools extends Base
{
    protected $table = 'tools';
    protected $fillable = ['tools_url', 'tools_name', 'category_id', 'tools_category_id'];


    public function toolsList()
    {
        $data = $this->select('id', 'tools_url', 'tools_name', 'tools_category_id')->orderBy('id', 'desc')->paginate(15);
        foreach($data as $k => &$v) {
            $v->category_name = app('db')->table('url_category')->where('id', $v->tools_category_id)->value('category_name');
        }
        return $data;
    }
    /**
     * 添加数据
     *
     * @param array $data
     * @return bool
     */
    public function createUrl($data)
    {
        return $this->create($data)->id;
    }

    /**
     * 修改数据
     *
     * @param array $map
     * @param array $data
     * @return bool
     */
    public function updateTools($id, $data)
    {
        return $this->where('id', $id)->update($data);
    }


    public function getUrls(int $id)
    {
        return $this->select('id', 'tools_url', 'tools_name')->where('tools_category_id', $id)->get();
    }


    public function search()
    {
        $wd = request()->input('keywords');
        $query = $this;
        if($wd) {
            $query = $query->where('tools_name', 'like', '%' . $wd . '%');
        }
        return $query->select('id', 'tools_name', 'tools_url')->orderBy('id', 'desc')->get();
    }

    /**
     * 给url添加http 或者删除/
     *
     * @param  string  $value
     * @return string
     */
//    public function setFirstNameAttribute($value)
//    {
//        // 如果没有http 则补上http
//        if (strpos($value, 'http') === false) {
//            $value = 'http://'.$value;
//        }
//        // 删除右侧的/
//        $value = rtrim($value, '/');
//        $this->attributes['first_name'] = strtolower($value);
//    }

    /******** 攻城略地分类下url ****************/
//    public function urls()
//    {
//
//    }
}
