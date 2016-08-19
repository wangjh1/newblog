<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\WebMenu;
use common\library\UnlimitCat;
use common\library\Constants;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\WebMenu */
/* @var $form yii\widgets\ActiveForm */

$models = new WebMenu();
$data  = new UnlimitCat();

$rows  = $models::find()->where(['category_id' => Yii::$app->request->get('id')])->Asarray()->all();
$datas = $data->genCate($rows, 0, 0);

array_unshift($datas, array('id'=> 0, 'name'=> '=根节点='));
?>

<div class="web-menu-form">
    <div class="box box-info box-default box-solid">
        <div class="box-header with-border">
            <h3 class="box-title">菜单信息</h3>
        </div>
    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-5\">{input}</div>\n<div class=\"col-lg-5\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'parent_id')->dropDownList(ArrayHelper::map($datas, 'id', 'name')) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true,'placeholder'=>'请输入名称']) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <label class="col-lg-1 control-label" for="">菜单类型</label>

        <div class="col-lg-5"><input type="hidden" name="" value="">
            <div id="" class="radiostyle">
                <label><input type="radio" name="page" value="1"> 文章分类</label>
                <label><input type="radio" name="page" value="2"> 单页面</label>
                <label><input type="radio" name="page" value="3"> 单篇文章</label>
                <label><input type="radio" name="page" value="4"> 自定义链接</label>
            </div>
        </div>
        <div class="col-lg-5"><div class="help-block"></div></div>
    </div>
    <?= $form->field($model, 'type_id')->textInput() ?>
    <?= $form->field($model, 'target')->radioList(['0' =>'当前窗口', '1' => '新窗口'], ['class'=>'radiostyle'])?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'thumb',[
        'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-1\"></div>\n{error}",
        'labelOptions' => [ 'class' => 'col-sm-1 control-label']])->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[
            '图片上传的一些配置，不写调用默认配置'
        ]
    ]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'sort_num')->textInput() ?>

    <div class="box-footer">
    <div class="form-group">
        <label class="col-lg-1 control-label buttons"></label>
        <?= Html::submitButton($model->isNewRecord ? '提交' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
