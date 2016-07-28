<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ColumnsBaseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Columns Bases';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-base-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Columns Base', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'columns_id',
            'columns_name',
            'parent_id',
            'columns_type_id',
            'columns_app',
            // 'columns_show',
            // 'columns_sequence',
            // 'columns_urlname:url',
            // 'columns_subname',
            // 'columns_image',
            // 'columns_tpl',
            // 'columns_keywords',
            // 'columns_description',
            // 'columns_upload_config',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
