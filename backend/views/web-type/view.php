<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WebType */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Web Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-type-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
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
            'url_alias:url',
            'redirect_url:url',
            'thumb',
            'description',
            'page_size',
            'list_view',
            'list_layout',
            'detail_view',
            'detail_layout',
            'seo_title',
            'seo_keywords',
            'seo_description',
            'contents',
            'sort_num',
        ],
    ]) ?>

</div>
