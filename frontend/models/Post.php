<?php
/**
 * Created by PhpStorm.
 * User: 王金豪
 * Date: 2016/8/23
 * Time: 11:01
 */
namespace frontend\models;

use Yii;
use backend\models\WebContent;
use yii\db\Query;
use backend\models\WebType;
class Post extends \yii\db\ActiveRecord
{
    /*
     *
     * 文章列表
     */
    public static function getIndex($cat)
    {
        //文章列表
        /*$post = new WebContentPost();
        $post = $post::find()->with(['content'=> function ($query){
            $query->Where('status = 1');
        }])->asArray()->all();*/
        //判断是否是根据分类显示
        if ($cat)
        {
            $post = (new Query())
                ->select(['*'])
                ->from('web_content_post')
                ->join('LEFT JOIN','web_content','web_content_post.content_id = web_content.id')
                ->where(['web_content.status'=>1, 'web_content.type_id' => $cat])
                ->orderBy('created_at DESC')
                //->offset(5)
                //->limit(10)
                ->all();
        }
        else
        {
            $post = (new Query())
                ->select(['*'])
                ->from('web_content_post')
                ->join('LEFT JOIN','web_content','web_content_post.content_id = web_content.id')
                ->where(['web_content.status'=>1])
                ->orderBy('created_at DESC')
                //->offset(5)
                //->limit(10)
                ->all();
        }


        return $post;

    }
    /*
     *
     * 文章详情
     */
     public static function getDetail($id)
     {
         $data = (new Query())
             ->select(['body', 'title', 'user_name', 'created_at', 'view_count', 'comment_count'])
             ->from('web_content_post')
             ->join('LEFT JOIN','web_content','web_content_post.content_id = web_content.id')
             ->where(['web_content.id'=>$id])
             //->offset(5)
             //->limit(10)
             ->all();

         return $data;
     }
    /*
     *
     * 热门浏览
     */
    public static function getHot()
    {
        $content = new WebContent();
        $hot = $content::find()
            ->select(['id','title', 'view_count'])
            ->where(['status' => 1, 'content_type' => 'post'])
            ->orderBy('view_count DESC')
            ->limit(5)
            ->asArray()
            ->all();

        return $hot;
    }

    /*
     *
     * 推荐
     */
    public static function getRecommend()
    {
        $content = new WebContent();
        $recommend = $content::find()
            ->select(['id','title', 'view_count'])
            ->where(['status' => 1, 'content_type' => 'post'])
            ->orderBy('recommend DESC')->limit(5)->asArray()->all();

        return $recommend;
    }
    /*
     *
     *分类
     */
    public static function getCat()
    {
        $content = new WebContent();
        $hot = $content::find()
            ->select(['type_id'])
            ->where(['status' => 1, 'content_type' => 'post'])
            ->asArray()
            ->all();
        $type = '';
        foreach ($hot as $k=>$v)
        {
            $type[]= $v['type_id'];
        }
        $type_id = implode(',', array_unique($type));
        //echo $type_id;die;
        $menu = new WebType();
        $menus = $menu::find()
            ->select(['id', 'name'])
            ->where('id  in'. '('.$type_id.')')
            ->asArray()
            ->all();

        return $menus;
    }
    /*
     *
     * 最新文章
     */
    public static function getNew()
    {
        $content = new WebContent();
        $new = $content::find()
            ->select(['id','title', 'created_at'])
            ->where(['status' => 1, 'content_type' => 'post'])
            ->orderBy('created_at DESC')
            ->limit(5)
            ->asArray()
            ->all();

        return $new;
    }

}
