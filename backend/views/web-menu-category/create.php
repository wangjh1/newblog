<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WebMenuCategory */

$this->title = Yii::t('app', 'Create Web Menu Category');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Web Menu Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-menu-category-create">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
