<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\WebTypeCategorySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '分类管理');
$this->params['breadcrumbs'][] = $this->title;
?>
<?php
//增加操作
Modal::begin([
    'id' => 'create-modal',
    'header' => '<h4 class="modal-title">创建</h4>',
    'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>',
]);
$requestUrl = Url::toRoute('create');
$js = <<<JS
    $.get('{$requestUrl}', {},
        function (data) {
            $('.modal-body').html(data);
        }
    );
JS;
$this->registerJs($js);
Modal::end();
// 更新操作
Modal::begin([
    'id' => 'update-modal',
    'header' => '<h4 class="modal-title">更新</h4>',
    'footer' => '<a href="#" class="btn btn-primary" data-dismiss="modal">Close</a>',
]);
$requestUpdateUrl = Url::toRoute('update');
$updateJs = <<<JS
    $('.data-update').on('click', function () {
        $.get('{$requestUpdateUrl}', { id: $(this).closest('tr').data('key') },
            function (data) {
                $('.modal-body').html(data);
            }
        );
    });
JS;
$this->registerJs($updateJs);
Modal::end();
?>
<div class="web-type-category-index">

    <h1></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php
        echo Html::a('添加分类', '', [
            'id' => 'create',
            'data-toggle' => 'modal',
            'data-target' => '#create-modal',
            'class' => 'btn btn-success',
        ]);
        ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'identify',
            [
                'attribute'=> 'name',
                'value' => function ($model, $key) {

                    return Html::a($model->name, Url::to(['web-type/index', 'id' => $key]));

                },

                'format' => 'raw',
            ],
            'description',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update}{delete}',
                'buttons' => [
                    'update' => function ($url, $model, $key) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>&nbsp;', '#', [
                            'data-toggle' => 'modal',
                            'data-target' => '#update-modal',
                            'class' => 'data-update',
                            'data-id' => $key,
                        ]);
                    },
                ],
            ],
        ],
    ]); ?>

</div>
