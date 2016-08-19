<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\WebContent */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Web Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-content-view">

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
            'type_id',
            'user_id',
            'user_name',
            'last_user_id',
            'last_user_name',
            'created_at',
            'updated_at',
            'focus_count',
            'favorite_count',
            'view_count',
            'comment_count',
            'agree_count',
            'against_count',
            'recommend',
            'headline',
            'sticky',
            'flag',
            'allow_comment',
            'password',
            'view',
            'layout',
            'sort_num',
            'visibility',
            'status',
            'content_type',
            'seo_title',
            'seo_keywords',
            'seo_description',
            'title',
            'sub_title',
            'url_alias:url',
            'redirect_url:url',
            'summary',
            'thumb',
            'thumbs',
        ],
    ]) ?>

</div>
