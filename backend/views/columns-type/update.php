<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\models\ColumnsType */

$this->title = 'Update Columns Type: ' . ' ' . $model->columns_type_id;
$this->params['breadcrumbs'][] = ['label' => 'Columns Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->columns_type_id, 'url' => ['view', 'id' => $model->columns_type_id]];
$this->params['breadcrumbs'][] = 'Update';

?>
<div class="columns-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
