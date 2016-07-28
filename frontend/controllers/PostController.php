<?php

namespace frontend\controllers;

use backend\models\News;
class PostController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new News();
        //$news = $model::find()->all();
        $new = $model::find()->indexBy('id')->orderBy('id')->orderBy('id DESC')->asArray()->all();
        //print_r($new);die;
        return $this->render('index', [
            'news' => $new,
        ]);
    }

    public function actionDetail($id)
    {
        //print_r($id);die;
        $model = new News();
        $new = $model::findOne($id);

        return $this->render('detail', [
            'news' => $new,
        ]);
    }

}
