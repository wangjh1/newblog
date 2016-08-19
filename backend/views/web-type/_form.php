<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\library\UnlimitCat;
use backend\models\WebType;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\WebType */
/* @var $form yii\widgets\ActiveForm */
$models = new WebType();
$data  = new UnlimitCat();
//echo $models->getCate(Yii::$app->request->get('id'));die;
$rows  = $models::find()->where(['category_id' =>Yii::$app->request->get('id')])->Asarray()->all();
$datas = $data->genCate($rows, 0, 0);

array_unshift($datas, array('id'=> 0, 'name'=> '=根节点='));
?>

<div class="web-type-form">
    <div class="row">
        <div class="col-md-12">
            <!-- Custom Tabs -->
    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-5\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <div class="nav-tabs-custom">
        <ul id="myTab" class="nav nav-tabs">
            <li class="active"><a href="#tabs-info" data-toggle="tab">基本信息</a></li>
            <li><a href="#tabs-seo" data-toggle="tab">模板设置</a></li>
            <li><a href="#tabs-template" data-toggle="tab">SEO设置</a></li>
        </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="tabs-info">
            <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map($datas, 'id', 'name')) ?>

            <?= Html::activeHiddenInput($model, 'category_id', ['value'=> Yii::$app->request->get('id')]) ?>

            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'url_alias')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'redirect_url')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'thumb',[
                'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-1\"></div>\n{error}",
                'labelOptions' => [ 'class' => 'col-sm-1 control-label']])->widget('common\widgets\file_upload\FileUpload',[
                'config'=>[
                    '图片上传的一些配置，不写调用默认配置'
                ]
            ]) ?>

            <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'page_size')->textInput() ?>

            <?= $form->field($model, 'sort_num')->textInput() ?>

        </div>
        <div class="tab-pane fade" id="tabs-seo">
            <?= $form->field($model, 'list_view')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'list_layout')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'detail_view')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'detail_layout')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="tab-pane fade" id="tabs-template">
            <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'seo_keywords')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'seo_description')->textInput(['maxlength' => true]) ?>

            <?= $form->field($model, 'contents')->textInput() ?>

        </div>
      </div>
    </div>
            <!-- nav-tabs-custom -->
    </div>
        <div class="box-footer">
            <div class="form-group">
                <label class="col-lg-1 control-label buttons"></label>
                <?= Html::resetButton('重置', ['class'=>'btn btn-primary buttons','name' =>'submit-button']) ?>
                <?= Html::submitButton($model->isNewRecord ? '提交' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
