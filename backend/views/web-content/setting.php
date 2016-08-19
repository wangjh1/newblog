<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WebMenu */

?>
<div class="web-web-content-setting">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group field-webcontent-title required">
        <label class="col-lg-2 control-label" for="webcontent-title">标题</label>
        <div class="col-lg-8">
            <select id="web-content-type" class="form-control" name="web_content_type">
                <?php foreach ($data as $val) :?>
                    <option value="<?= $val['id']?>" <?php if ($ids ==$val['id']){echo 'selected';} ?>><?= $val['name']?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="help-block"></div>
    </div>

    <div class="form-group">
       <button type="submit" class="btn btn-primary buttons">更新</button>
    </div>
    <?php ActiveForm::end(); ?>

</div>
