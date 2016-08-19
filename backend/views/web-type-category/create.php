<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WebTypeCategory */

$this->title = Yii::t('app', 'Create Web Type Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Web Type Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-type-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
