<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\WebContentPage;
use backend\models\WebContentPost;
use backend\models\WebContentSearch;
use common\library\KindEditor;
use common\library\Constants;


/* @var $this yii\web\View */
/* @var $model backend\models\WebContent */
/* @var $form yii\widgets\ActiveForm */
//判断是添加还是更新
Yii::$app->request->get('act') == 'post' ? $bodymodel = new WebContentPost() : $bodymodel = new WebContentPage();
if (Yii::$app->request->get('id'))
{
    $bodymodel = $bodymodel::find()->where(['content_id' => Yii::$app->request->get('id')])->one();
}
//获取分类树形数组
$models = new WebContentSearch();
$datas = $models::typeTree(Yii::$app->request->get('act'));
?>

<div class="web-content-form">

    <?php $form = ActiveForm::begin([
        'options'=>['enctype'=>'multipart/form-data','class' => 'form-horizontal'],
        'fieldConfig' => [
            //'template' => "{label}\n<div class=\"col-lg-8\">{input}</div>\n<div class=\"col-lg-1\">{error}</div>",
            //'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
    <div class="row">
        <div class="col-lg-8">
            <div class="box box-info box-default box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">文章基本信息</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                    <div class="box-body">

                        <?= $form->field($model, 'title',[
                            'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-1\"></div>\n{error}",
                            'labelOptions' => [ 'class' => 'col-sm-1 control-label']])-> textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'sub_title',[
                            'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-1\"></div>\n{error}",
                            'labelOptions' => [ 'class' => 'col-sm-1 control-label']])-> textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'url_alias',[
                            'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-1\"></div>\n{error}",
                            'labelOptions' => [ 'class' => 'col-sm-1 control-label'],
                        ])-> textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'redirect_url',[
                            'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-1\"></div>\n{error}",
                            'labelOptions' => [ 'class' => 'col-sm-1 control-label']])-> textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'thumb',[
                            'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-1\"></div>\n{error}",
                            'labelOptions' => [ 'class' => 'col-sm-1 control-label']])->widget('common\widgets\file_upload\FileUpload',[
                            'config'=>[
                                '图片上传的一些配置，不写调用默认配置'
                            ]
                        ]) ?>

                        <?= $form->field($model, 'summary',[
                            'template' => "{label}\n<div class=\"col-sm-8\">{input}</div>\n<div class=\"col-sm-1\"></div>\n{error}",
                            'labelOptions' => [ 'class' => 'col-sm-1 control-label']])-> textarea(['rows' => 6]) ?>


                        <?= $form->field($bodymodel, 'body', [
                            'template' => "{label}\n<div class=\"col-sm-11\">{input}</div>",
                            'labelOptions' => [ 'class' => 'col-sm-1 control-label']])->widget('common\widgets\kindeditor\KindEditor',
                            ['clientOptions'=>['allowFileManager'=>'true',
                                'allowUpload'=>'true']])
                        ?>

                    </div>
                    <!-- /.box-body -->

            </div>

        </div>
        <div class="col-lg-4">

            <div class="box box-primary box-default box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">文章配置信息</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                    <div class="box-body" style="padding:15px;">

                        <div class="col-lg-12">

                            <?= $form->field($model, 'type_id')->dropDownList(ArrayHelper::map($datas, 'id', 'name'))->label('分类') ?>
                            <?= $form->field($model, 'sort_num')->textInput() ?>

                            <?= $form->field($model, 'flag')->textInput() ?>
                        </div>
                        <div class="col-lg-4">
                            <?= $form->field($model, 'recommend')->dropDownList(Constants::getRecommendItems(), ['style' =>"width:98%"]) ?>
                        </div>
                        <div class="col-lg-4">
                            <?= $form->field($model, 'headline')->dropDownList(Constants::getHeadlineItems(), ['style' =>"width:98%"]) ?>
                        </div>
                        <div class="col-lg-4">
                            <?= $form->field($model, 'sticky')->dropDownList(Constants::getStickyItems(), ['style' =>"width:98%"]) ?>
                        </div>
                        <div class="col-lg-4">
                            <?= $form->field($model, 'status')->dropDownList(Constants::getStatusItemsForContent(), ['style' =>"width:98%"]) ?>
                        </div>
                        <div class="col-lg-4">
                            <?= $form->field($model, 'visibility')->dropDownList(Constants::getVisibilityItems(), ['style' =>"width:98%"]) ?>
                        </div>
                        <div class="col-lg-4">
                            <?= $form->field($model, 'allow_comment')->dropDownList(Constants::getYesNoItems(), ['style' =>"width:98%"]) ?>
                        </div>
                    </div>
                    <!-- /.box-body -->
                <div class="box-footer">
                    <div class="form-group">
                        <?= Html::resetButton('重置', ['class'=>'btn btn-primary buttons','name' =>'submit-button']) ?>
                        <?= Html::submitButton($model->isNewRecord ? '提交' : '更新', ['class' => $model->isNewRecord ? 'btn btn-success buttons' : 'btn btn-primary buttons']) ?>
                    </div>
                </div>
                <!-- /.box-footer -->
            </div>
            <div class="box box-success box-default box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">SEO信息</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>

                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body" style="padding:15px;display: none;">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'seo_title')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'seo_keywords')->textInput(['maxlength' => true]) ?>

                        <?= $form->field($model, 'seo_description')->textInput(['maxlength' => true]) ?>
                    </div>
                </div>
            </div>

            <div class="box box-danger box-default box-solid collapsed-box">
                <div class="box-header with-border">
                    <h3 class="box-title">模板设置</h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->

                <div class="box-body" style="padding: 15px; display: none;">
                    <div class="col-lg-12">
                        <?= $form->field($model, 'view')->textInput() ?>
                        <?= $form->field($model, 'layout')->textInput() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <?php ActiveForm::end(); ?>

</div>
