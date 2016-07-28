<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ColumnsType */

$this->title = 'Create Columns Type';
$this->params['breadcrumbs'][] = ['label' => 'Columns Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
