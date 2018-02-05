<?php

namespace App\Models;

class Category extends Base
{
    protected $table = 'category';

    public function showlist()
    {
        $data = self::withTrashed()->select('category_name', 'parent_id')->get();
        return $data;
    }

    // 找一个分类所有子分类的ID
    public function getChildren($catId)
    {
        // 取出所有的分类
        $data = $this->select('id', 'parent_id', 'category_name')->get();
        // 递归从所有的分类中挑出子分类的ID
        return $this->_getChildren($data, $catId, TRUE);
    }

    /**
     * 递归从数据中找子分类
     */
    private function _getChildren($data, $catId, $isClear = FALSE)
    {
        static $_ret = array();  // 保存找到的子分类的ID
        if ($isClear)
            $_ret = array();
        // 循环所有的分类找子分类
        foreach ($data as $k => $v) {
            if ($v['parent_id'] == $catId) {
                $_ret[] = $v['id'];
                // 再找这个$v的子分类
                $this->_getChildren($data, $v['id']);
            }
        }
        return $_ret;
    }

    // 获取树形数据
    public function getTree()
    {
        $data = $this->select('id', 'category_name', 'parent_id')->get();
        return $this->_getTree($data);
    }

    private function _getTree($data, $parent_id = 0, $level = 0)
    {
        static $_ret = array();
        foreach ($data as $k => $v) {
            if ($v['parent_id'] == $parent_id) {
                $v['level'] = $level;  // 用来标记这个分类是第几级的
                $_ret[] = $v;
                // 找子分类
                $this->_getTree($data, $v['id'], $level + 1);
            }
        }
        return $_ret;
    }


    public function createCategory($data)
    {
        return (bool)$this->create($data)->id;
    }

    public function categoryUrls()
    {
        $data = $this->select('id', 'parent_id', 'category_name', 'parent_id')->where('parent_id', 0)->get();
        foreach ($data as $k => &$v) {
            $v->childCategory = $this->select('id', 'category_name', 'parent_id')->where('parent_id', $v->id)->get();
            $ids = $this->getUrlIdsByCateId($v->id);
            $v->childUrls = $this->getUrls($ids);
        }
        return $data;
    }

    public static function categories()
    {
        $result = [];
        $data = self::select('id', 'category_name', 'parent_id')->get()->toArray();
        foreach ($data as $k => $v) {
            if ($v['parent_id'] == 0) {
                foreach ($data as $k2 => $v2) {
                    if($v2['parent_id'] == $v['id']) {
                        $v['childs'][] = $v2;
                    }
                }
                $result[] = $v;
            }
        }
        return $result;
    }


    public function getUrlIdsByCateId(int $id)
    {
        $ids = $this->getChildren($id);
        array_push($ids, $id);
        return $ids;
    }

    public function getUrls(array $tools_category_id)
    {
        return app('db')->table('tools')
            ->select('id', 'tools_name', 'tools_url')
            ->whereIn('tools_category_id', $tools_category_id)
            ->orderBy('id', 'desc')
            ->get();
    }
}