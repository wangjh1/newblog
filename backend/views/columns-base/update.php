<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ColumnsBase */

$this->title = 'Update Columns Base: ' . ' ' . $model->columns_id;
$this->params['breadcrumbs'][] = ['label' => 'Columns Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->columns_id, 'url' => ['view', 'id' => $model->columns_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="columns-base-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
