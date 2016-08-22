<?php

namespace frontend\controllers;

use Yii;
use backend\models\News;
use backend\models\WebContent;
use backend\models\WebContentSearch;
use backend\models\WebContentPost;
class PostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $post = new WebContentPost();
        //$post = $post::find()->where(['status' => 1, 'content_type' => 'post'])->orderBy('sort_num DESC')->asArray()->all();
        //$post = $post::findOne(1);
        $post = $post::find()->with(['content'=> function ($query){
            $query->Where('status = 1');
    }])->asArray()->all();
        //print_r($post);die;

        /*$dataProvider = $searchModel->search(Yii::$app->request->queryParams, $content_type);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);


        $model = new News();
        //$news = $model::find()->all();
        $new = $model::find()->indexBy('id')->orderBy('id DESC')->asArray()->all();*/
        //print_r($new);die;
        return $this->render('index', [
            'post' => $post,
        ]);
    }

    public function actionDetail($id)
    {
        $post = new WebContentPost();

        $post = $post->find()->select(['body'])
        ->joinwith(['title'])
        ->asArray()
        ->all();
        print_r($post);die;
        $model = new News();
        $new = $model::findOne($id);

        return $this->render('detail', [
            'news' => $new,
        ]);
    }

}
