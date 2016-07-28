<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ColumnsBase */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="columns-base-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'columns_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent_id')->textInput() ?>

    <?= $form->field($model, 'columns_type_id')->textInput() ?>

    <?= $form->field($model, 'columns_app')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'columns_show')->textInput() ?>

    <?= $form->field($model, 'columns_sequence')->textInput() ?>

    <?= $form->field($model, 'columns_urlname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'columns_subname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'columns_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'columns_tpl')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'columns_keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'columns_description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'columns_upload_config')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
