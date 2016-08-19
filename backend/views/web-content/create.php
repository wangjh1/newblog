<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WebContent */

$this->title = Yii::t('app', 'Create Web Content');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Web Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
