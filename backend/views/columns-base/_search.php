<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ColumnsBaseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="columns-base-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'columns_id') ?>

    <?= $form->field($model, 'columns_name') ?>

    <?= $form->field($model, 'parent_id') ?>

    <?= $form->field($model, 'columns_type_id') ?>

    <?= $form->field($model, 'columns_app') ?>

    <?php // echo $form->field($model, 'columns_show') ?>

    <?php // echo $form->field($model, 'columns_sequence') ?>

    <?php // echo $form->field($model, 'columns_urlname') ?>

    <?php // echo $form->field($model, 'columns_subname') ?>

    <?php // echo $form->field($model, 'columns_image') ?>

    <?php // echo $form->field($model, 'columns_tpl') ?>

    <?php // echo $form->field($model, 'columns_keywords') ?>

    <?php // echo $form->field($model, 'columns_description') ?>

    <?php // echo $form->field($model, 'columns_upload_config') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
