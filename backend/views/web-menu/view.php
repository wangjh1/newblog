<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WebMenu */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Web Menus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-menu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'parent_id',
            'category_id',
            'name',
            'url:url',
            'target',
            'description',
            'thumb',
            'status',
            'sort_num',
            'type_id',
        ],
    ]) ?>

</div>
