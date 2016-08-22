<?php
/**
 * @author 王金豪 <627658543@qq.com>
 * @Date 2016/8
 * @use 分类树
 */
namespace common\library;

use Yii;

class UnlimitCat {

    //前台导航菜单
    public function getRows($data, $pid)
    {
        $rows = '';
        $menu = [];
        foreach ($data as $k => $v)
        {
            $menu['url'] = [];
            if ($v['status'] == 1)
            {
                if ($v['parent_id'] == $pid)
                {   //父亲找到儿子.
                    $menu['label'] = $v['name'];
                    $menu['url'][] = $v['url'];
                    $menu['target'] = $v['target'];
                    $menu['items'] = $this->getRows($data, $v['id']);
                    if (empty($menu['items']))
                    {
                        unset($menu['items']);
                    }
                    $rows[] = $menu;
                    //unset($data[$k]);
                }
            }

        }
        return $rows;
    }
    public function genCate($data, $pid = 0, $level = 0)
    {
        //层数大于等于10停止
        if($level == 10) return false;
        $l        = str_repeat("----| ", $level);
        $l        = $l.'';
        static $arrcat    = array();
        $arrcat    = empty($level) ? array() : $arrcat;
        foreach($data as $k => $row)
        {
            /**
             * 如果父ID为当前传入的id
             */
            if($row['parent_id'] == $pid)
            {
                //如果当前遍历的id不为空
                $row['name']    = $l.$row['name'];
                $row['level']    = $level;
                $arrcat[]    = $row;
                //var_array($arr);
                $this->genCate($data, $row['id'], $level+1);//递归调用
            }
        }
        return $arrcat;
    }


}