<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\ColumnsBase */

$this->title = $model->columns_id;
$this->params['breadcrumbs'][] = ['label' => 'Columns Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-base-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->columns_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->columns_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'columns_id',
            'columns_name',
            'parent_id',
            'columns_type_id',
            'columns_app',
            'columns_show',
            'columns_sequence',
            'columns_urlname:url',
            'columns_subname',
            'columns_image',
            'columns_tpl',
            'columns_keywords',
            'columns_description',
            'columns_upload_config',
        ],
    ]) ?>

</div>
