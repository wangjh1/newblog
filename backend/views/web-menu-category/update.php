<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WebMenuCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Web Menu Category',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Web Menu Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->category_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="web-menu-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
