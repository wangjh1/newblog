<?php
use \yii\helpers\Html;
use \yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>

<?=Html::cssFile('@web/css/article.css')?>

<div class="container">
    <?php
    $this->title = '文章';
    $this->params['breadcrumbs'][] = $this->title;
    ?>
<div class="row">
    <div class="col-lg-9">
        <!--文章 -->
        <div class="panel">
            <div class="panel-title box-title">
                <span>最新文章</span>
<!--                <span class="pull-right"><a href="/post/index-all.html" class="font-12">更多»</a></span>-->
            </div>
            <div class="new-list">
                <?php foreach ($post as $key=>$val) :?>
                <div class="panel-body border-bottom">
                    <div class="row">
                        <div class="col-lg-4 label-img-size">
                            <a href="<?= Url::to(['post/detail', 'id'=>$val['id']])?>" class="post-label">
                                <img src="
                                <?php if (!$val['thumb']){
                                    echo Yii::$app->request->getBaseUrl().'/images/notice.jpg';
                                }else{
                                    echo IMG_PATHS.$val['thumb'] ;
                                }
                                ?>" alt="<?= Html::encode($val['title'])?>">
                            </a>
                        </div>
                        <div class="col-lg-8 btn-group">
                            <h1><a href="<?= Url::to(['post/detail', 'id'=>$val['id']])?>"><?= Html::encode($val['title'])?></a>&nbsp;
<!--                                <span class="cat">[基础教程]</span><span class="top">置顶</span>-->
                            </h1>
                    <span class="post-tags">
                        <span class="glyphicon glyphicon-user"></span><a href="/member/index/1.html"><?= Html::encode($val['user_name'])?></a>&nbsp;
                        <span class="glyphicon glyphicon-time"></span><?php echo date('Y-m-d', $val['created_at'])?>&nbsp;
                        <span class="glyphicon glyphicon-eye-open"></span><?= Html::encode($val['view_count'])?>&nbsp;
<!--                        <span class="glyphicon glyphicon-comment"></span><a href="#">10</a>-->
                    </span>
                            <p class="post-content"><?= Html::encode($val['summary'])?></p>
                            <a href="<?= Url::to(['post/detail', 'id'=>$val['id']])?>"><button class="btn btn-warning no-radius btn-sm pull-right">阅读全文</button></a>
                        </div>
                    </div>
                    <div class="tags">
                        <span class="fa fa-tags"></span>
                        <a href="#">标签</a>，
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
    </div>
    <div class="col-lg-3">
        <!--热门浏览 -->
        <div class="panel">
            <div class="panel-title box-title">
                <span>热门浏览</span>
<!--                <span class="pull-right"><a href="/post/hot.html" class="font-12">更多»</a></span>-->
            </div>
            <div class="panel-body hot-body">

                <?php foreach ($hot as $k=>$v) :?>
                <div class="clearfix hot-list">
                    <div class="pull-left media-left">
                        <a href="#">浏览<em><?= Html::encode($v['view_count'])?></em></a>
                    </div>
                    <div class="media-right">
                        <a href="<?=Url::to(['post/detail', 'id' =>$v['id']])?>">
<!--                            <span class="cat-name">[基础教程]</span>-->
                            <?= Html::encode($v['title'])?></a>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <!--相关文章-->
        <div class="panel">
            <div class="panel-title box-title">
                <span>推荐</span>
                <span class="pull-right"><a href="#" class="font-12">更多»</a></span>
            </div>
            <div class="panel-body hot-body">

                <?php foreach ($recommend as $kr=>$vr) :?>
                <div class="clearfix hot-list">
                    <div class="pull-left media-left">
                        <span class="sort sort-<?= Html::encode($kr+1)?>"><?= Html::encode($kr+1)?></span>
                    </div>
                    <div class="media-right">
                        <a href="/post/detail/142.html"><?= Html::encode($vr['title'])?></a>
                        <span class="browser">阅读(<?= Html::encode($vr['view_count'])?>)</span>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <!--分类文章-->
        <div class="panel">
            <div class="panel-title box-title">
                <span>分类</span>
                <span class="pull-right"><a href="#" class="font-12">更多»</a></span>
            </div>
            <div class="panel-body hot-body">

                <?php foreach ($cat as $kc=>$vc) :?>
                <div class="clearfix hot-list">

                    <div class="media-right">
                        <a href="<?= Url::to(['post/index', 'cat' => $vc['id']])?>"><?= Html::encode($vc['name'])?></a>
                        <span class="browser">文章(<?= Html::encode($vc['id'])?>)</span>
                    </div>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <!--热门标签-->
        <div class="panel">
            <div class="panel-title box-title">
                <span>热门标签</span>
                <span class="pull-right"><a href="#" class="font-12">更多»</a></span>
            </div>
            <div class="panel-body padding-left-0">
                <div class="tag-cloud">
                    <a href="#">RBAC</a>
                    <a href="#">yii2-admin</a>
                    <a href="#">yii2</a>
                    <a href="#">权限</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

