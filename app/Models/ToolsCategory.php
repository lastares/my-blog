<?php

namespace App\Models;

class ToolsCategory extends Base
{
    protected $table = 'tools_category';

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
        foreach($data as $k => &$v) {
            $v->childCategory = $this->select('id', 'category_name', 'parent_id')->where('parent_id', $v->id)->get();
            $ids = $this->getUrlIdsByCateId($v->id);
            $v->childUrls = $this->getUrls($ids);
        }
        return $data;
    }

//    public function categoryUrls2(int $category_id)
//    {
//        $tools_category_ids = array_unique(app('db')->table('tools')->where('category_id', $category_id)->pluck('tools_category_id')->toArray());
////        dd($tools_category_ids);
//        $parentIds = [];
//        foreach($tools_category_ids as $k => $v) {
//            $parentIds[] = app('db')->table('tools_category')->select('id', 'parent_id')->where('id', $v)->get()->toArray();
//        }
////        dd($parentIds);
//        $_parentIds = [];
//        foreach($parentIds as $kk => $vv) {
//            foreach($vv as $k => $v) {
//                $_parentIds[] = $v;
//            }
//        }
//        foreach($_parentIds as $k1 => $v1) {
//            $where = ['id' => $v1->id];
//            if($v1->parent_id == 0) {
//                $where[] = ['parent_id', 0];
//            }
//            $data[] = $this->select('id', 'parent_id', 'category_name', 'parent_id')->where($where)->get()->toArray();
//        }
//        $_data = [];
//        foreach($data as $k3 => $v3) {
//            foreach($v3 as $k4 => $v4) {
//                $_data[] = $v4;
//            }
//        }
////        $data = $this->select('id', 'parent_id', 'category_name', 'parent_id')->where($where)->get();
////        dd($_data);
//        foreach($_data as $k2 => &$v2) {
//            $v2->childCategory = $this->select('id', 'category_name', 'parent_id')->where('parent_id', $v2->id)->get();
//            $ids = $this->getUrlIdsByCateId($v2->id);
//            $v2->childUrls = $this->getUrls($ids);
//        }
//        return $data;
//    }


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