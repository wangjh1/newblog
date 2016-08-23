<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\models\ColumnsType */

$this->title = $data[0]['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::cssFile('@web/css/article.css')?>
<div class="container">
<div class="row">
    <?php echo $data[0]['body']?>
</div>
</div>
