<?php

namespace frontend\controllers;

use Yii;
use backend\models\News;
use backend\models\WebContent;
use backend\models\WebContentSearch;
use backend\models\WebContentPost;
use yii\db\Query;
class PostController extends \yii\web\Controller
{
    /*
     *
     * 文章列表
     */
    public function actionIndex()
    {
        $post = new WebContentPost();
        //$post = $post::find()->where(['status' => 1, 'content_type' => 'post'])->orderBy('sort_num DESC')->asArray()->all();
        $post = $post::find()->with(['content'=> function ($query){
            $query->Where('status = 1');
    }])->asArray()->all();

        return $this->render('index', [
            'post' => $post,
        ]);
    }
    /*
     *
     * 文章详情
     */
    public function actionDetail($id)
    {
        //$post = new WebContentPost();
        $data = (new Query())
            ->select(['body', 'title', 'user_name', 'created_at', 'view_count', 'comment_count'])
            ->from('web_content_post')
            ->join('LEFT JOIN','web_content','web_content_post.content_id = web_content.id')
            ->where(['web_content.id'=>$id])
            //->offset(5)
            //->limit(10)
            ->all();
        return $this->render('detail', [
            'data' => $data,
        ]);
    }
    /*
     *
     * 热门浏览
     */
    public function actionHot()
    {
        
    }



}
