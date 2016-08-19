<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\WebType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Web Type',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Web Types'), 'url' => ['index', 'id' => Yii::$app->request->get('pid')] ];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="web-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
