<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WebTypeCategory */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Web Type Category',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Web Type Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="web-type-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
