<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\WebTypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '分类列表');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="web-type-index">

    <h1></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

        <?= Html::a('添加分类', ['create', 'id' => Yii::$app->request->get('id')], ['class' => 'btn btn-success']) ?>
    </p>

    <div id="w0" class="grid-view">
        <!--        <div class="summary">第<b>1-5</b>条，共<b>5</b>条数据.</div>-->
        <table class="table table-striped table-bordered">
            <thead>
            <tr>

                <th>ID</th>
                <th>名称</th>
                <th>链接地址</th>
                <th>排序</th>
                <th>操作</th>
                <th>&nbsp;</th>
            </tr>
            <!--<tr id="w0-filters" class="filters">
                <td>&nbsp;</td>
                <td><input type="text" class="form-control" name="WebMenuSearch[id]"></td>
                <td><input type="text" class="form-control" name="WebMenuSearch[name]"></td>
                <td><input type="text" class="form-control" name="WebMenuSearch[url]"></td>
                <td><input type="text" class="form-control" name="WebMenuSearch[target]"></td>
                <td><input type="text" class="form-control" name="WebMenuSearch[sort_num]"></td>
                <td><input type="text" class="form-control" name="WebMenuSearch[status]"></td>
            </tr>-->
            </thead>
            <tbody>
            <?php foreach ($data as $key=>$val): ?>
                <tr data-key="<?= Html::encode($val['id']) ?>">

                    <td><?= Html::encode($val['id']) ?></td>
                    <td><?= Html::encode($val['name']) ?></td>
                    <td><?= Html::encode($val['redirect_url']) ?></td>
                    <td><?= Html::encode($val['sort_num']) ?></td>
                    <td>
                        <a href="<?= Url::to(['web-type/update', 'id' => $val['id'], 'pid' => Yii::$app->request->get('id')])?>" title="Update" data-pjax="0"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="<?= Url::to(['web-type/delete', 'id' => $val['id']])?>" title="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post" data-pjax="0"><span class="glyphicon glyphicon-trash"></span></a>

                    </td>
                </tr>

            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</div>
