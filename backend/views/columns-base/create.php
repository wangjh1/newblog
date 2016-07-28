<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ColumnsBase */

$this->title = 'Create Columns Base';
$this->params['breadcrumbs'][] = ['label' => 'Columns Bases', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="columns-base-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
