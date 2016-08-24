<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use backend\models\WebContentSearch;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\WebContentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::$app->controller->action->id == 'post' ? '文章列表' : '页面管理';
$buttum = Yii::$app->controller->action->id == 'post' ? '添加文章' : '添加页面';
$this->params['breadcrumbs'][] = $this->title;
// 更新操作
Modal::begin([
    'id' => 'setting-modal',
    'header' => '<h4 class="modal-title">设置</h4>',
    'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>',
]);
$requestUrl = Url::toRoute('setting?act='.Yii::$app->controller->action->id);
$updateJs = <<<JS
    $.get('{$requestUrl}', {},
        function (data) {
            $('.modal-body').html(data);
        }
    );
JS;
$this->registerJs($updateJs);
Modal::end();
?>
<div class="web-content-index">

    <h1></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', $buttum), ['create', 'act' => Yii::$app->controller->action->id], ['class' => 'btn btn-success'])?>
        <?= Html::a('设置', '', [
            'id' => 'setting',
            'data-toggle' => 'modal',
            'data-target' => '#setting-modal',
            'class' => 'btn btn-success',]); ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            //'type_id',
            'type_id' => [
                "attribute" => "type_id",
                "value" => function ($dataProvider) {
                    return WebContentSearch::dropDown("type_id", $dataProvider->type_id, Yii::$app->controller->action->id);
                },
                "filter" => WebContentSearch::dropDown("type_id", null, Yii::$app->controller->action->id),
            ],
            //'user_id',
            'user_name',
            //'last_user_id',
            // 'last_user_name',
            // 'created_at',
            [
                'attribute' => 'created_at',
                'format' => ['date', 'php:Y年m月d日 h:m:s'],
                //'value' => 'datetime',
            ],
            // 'focus_count',
            // 'favorite_count',
             'view_count',
            // 'comment_count',
            // 'agree_count',
            // 'against_count',
            // 'recommend',
            // 'headline',
            // 'sticky',
            // 'flag',
            // 'allow_comment',
            // 'password',
            // 'view',
            // 'layout',
            // 'sort_num',
            // 'visibility',
             //'status',
            'status' => [
                'attribute' => 'status',
                //'label'=>'审核通过',
                'format'=>'raw',
                "filter" => WebContentSearch::dropDown("status"),
                'value'=>function($model, $key, $dataProvider){
                $url=Url::to(['changestatu', 'id' => $key, 'act'=> Yii::$app->controller->action->id, 'status' =>$model->status]);//审核状态为1

                if ($model->status)
                {
                    return Html::a('已审核', $url,['class' =>  'btn btn-success']);
                }
                else
                {
                    return Html::a('未审核', $url,['class' =>  'btn btn-danger']);
                }
                return WebContentSearch::dropDown("status", $dataProvider->status);

                }],
            // 'content_type',
            // 'seo_title',
            // 'seo_keywords',
            // 'seo_description',

            // 'sub_title',
            // 'url_alias:url',
            // 'redirect_url:url',
            // 'summary',
            // 'thumb',
            // 'thumbs',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>&nbsp;', 'update?id='.$key.'&act='.Yii::$app->controller->action->id, []);
                    },
                    'delete' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>&nbsp;', 'delete?id='.$key.'&act='.Yii::$app->controller->action->id, []);
                    },
                ],
            ],
        ],
    ]); ?>

</div>
