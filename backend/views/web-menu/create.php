<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\WebMenu */

$this->title = '新建';
$this->params['breadcrumbs'][] = ['label' => 'Web Menus', 'url' => Yii::$app->request->referrer];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-menu-create">

    <h1></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
