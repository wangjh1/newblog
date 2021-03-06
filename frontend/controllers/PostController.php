<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Post;
class PostController extends \yii\web\Controller
{
    /*
     *
     * 文章列表
     */
    public function actionIndex($cat= null)
    {

        //热门浏览
        $hot = Post::getHot();
        //文章列表
        $post = Post::getIndex($cat);
        //推荐
        $recommend = Post::getRecommend();
        //分类
        $cat = Post::getCat();

        return $this->render('index', [
            'post' => $post,
            'hot' => $hot,
            'recommend' => $recommend,
            'cat' => $cat,
        ]);
    }
    /*
     *
     * 文章详情
     */
    public function actionDetail($id)
    {
        //$post = new WebContentPost();
        $data =Post::getDetail($id);
        $new = Post::getNew();
        //print_r($new);die;
        return $this->render('detail', [
            'data' => $data,
            'new' => $new,
        ]);
    }


}
