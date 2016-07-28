<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\models\NewsSearch;
/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '文章咨询';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <h1></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('添加文章', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'picture:image',
            'picture'=> [
                'label' => '缩略图',
                'headerOptions' => ['width' => '120'],
                'contentOptions' => ['class'=>'text-center'],
                'format' => [
                    'image',
                    [
                        'height' =>50,
                        'width' => 100
                    ]
                ],
                'value' => function($dataProvider){
                    return $dataProvider->picture;
                }
            ],
            [
                'attribute' => 'title',
                //'value' => 'title',
                'headerOptions' => ['width' => '12%'],
            ],
            [
                'attribute' => 'description',
                //'value' => 'description',
                'headerOptions' => ['width' => '20%'],
            ],
            [
                'attribute' => 'addtime',
                'format' => ['date', 'php:Y年m月d日 h:m:s'],
                //'value' => 'datetime',
                'headerOptions' => ['width' => '15%'],
            ],
            'recmd' => [
                "attribute" => "recmd",
                "value" => function ($dataProvider) {
                    return NewsSearch::dropDown("recmd", $dataProvider->recmd);
                },
                "filter" => NewsSearch::dropDown("recmd"),
            ],
            'places' => [
                "attribute" => "places",
                "value" => function ($dataProvider) {
                    return NewsSearch::dropDown("places", $dataProvider->places);
                },
                "filter" => NewsSearch::dropDown("places"),
            ],
            /*[
                'attribute' => 'places',
                //'class' => 'form-control',
                'value'=>function ($dataProvider,$key,$index,$column){
                    return $dataProvider->places==1?'男':'女';
                },

                //在搜索条件（过滤条件）中使用下拉框来搜索
                'filter' => ['1'=>'男','0'=>'女', 'class'=>'form-control'],
                //or
                'filter' => Html::activeDropDownList($searchModel,
                    'places',['1'=>'男','0'=>'女'],
                    ['prompt'=>'全部'],['class'=>'form-control']
                )
            ],*/
            //'id',
            //'columns_id',
            //'exsort',
            //'user_id',

            // 'places',
            // 'color',

            // 'keywords',

            // 'content:ntext',
            // 'method',
            // 'tpcontent',
            // 'norder',
            // 'recmd',
            // 'hits',
            // 'ispass',
            // 'origin',
            // 'releids',
            // 'extfield',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
