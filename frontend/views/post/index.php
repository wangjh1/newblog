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
                <span class="pull-right"><a href="/post/index-all.html" class="font-12">更多»</a></span>
            </div>
            <div class="new-list">
                <?php foreach ($post as $key=>$val) :?>
                <?php if (!empty($val['content'])) :?>
                <div class="panel-body border-bottom">
                    <div class="row">
                        <div class="col-lg-4 label-img-size">
                            <a href="#" class="post-label">
                                <img src="<?= Html::encode($val['content']['thumb'])?>" alt="<?= Html::encode($val['content']['title'])?>">
                            </a>
                        </div>
                        <div class="col-lg-8 btn-group">
                            <h1><a href="<?= Url::to(['post/detail', 'id'=>$val['content']['id']])?>"><?= Html::encode($val['content']['title'])?></a>&nbsp;<span class="cat">[基础教程]</span><span class="top">置顶</span></h1>
                    <span class="post-tags">
                        <span class="glyphicon glyphicon-user"></span><a href="/member/index/1.html"><?= Html::encode($val['content']['user_name'])?></a>&nbsp;
                        <span class="glyphicon glyphicon-time"></span><?php echo date('Y-m-m', $val['content']['created_at'])?>&nbsp;
                        <span class="glyphicon glyphicon-eye-open"></span><?= Html::encode($val['content']['view_count'])?>&nbsp;
                        <span class="glyphicon glyphicon-comment"></span><a href="<?= Url::to(['post/detail', 'id'=>$val['content']['id']])?>">10</a>
                    </span>
                            <p class="post-content"><?= Html::encode($val['content']['summary'])?></p>
                            <a href="<?= Url::to(['post/detail', 'id'=>$val['content']['id']])?>"><button class="btn btn-warning no-radius btn-sm pull-right">阅读全文</button></a>
                        </div>
                    </div>
                    <div class="tags">
                        <span class="fa fa-tags"></span>
                        <a href="#">RBAC</a>，
                        <a href="#">源码</a>，
                        <a href="#">后台管理</a>，
                        <a href="#">系统</a>，
                    </div>
                </div>
                <?php endif;?>
                <?php endforeach;?>
            </div>
            <!--<div class="row in_image">
                <article class="col-lg-6">
                    <a href="http://www.wangjinhao.cn/newcms/frontend/web/"><img src="<?/*= Yii::$app->request->getBaseUrl()*/?>/images/product1.jpg" width="100%"></a>
                </article>
                <article class="col-lg-3">
                    <a href="http://www.wangjinhao.cn/newcms/frontend/web/"><img src="<?/*= Yii::$app->request->getBaseUrl()*/?>/images/product2.jpg" width="100%"></a>
                </article>
                <article class="col-lg-3">
                    <a href="http://www.wangjinhao.cn/newcms/frontend/web/"><img src="<?/*= Yii::$app->request->getBaseUrl()*/?>/images/product3.jpg" width="100%"></a>
                </article>
            </div>-->
        </div>
    </div>
    <div class="col-lg-3">
        <!--热门浏览 -->
        <div class="panel">
            <div class="panel-title box-title">
                <span>热门浏览</span>
                <span class="pull-right"><a href="/post/hot.html" class="font-12">更多»</a></span>
            </div>
            <div class="panel-body hot-body">
                <div class="clearfix hot-list">
                    <div class="pull-left media-left">
                        <a href="#">浏览<em>10420</em></a>
                    </div>
                    <div class="media-right">
                        <a href="/post/detail/2.html"><span class="cat-name">[基础教程]</span>yii2.0-advanced 高级版项目搭建（二）</a>
                    </div>
                </div>
                <div class="clearfix hot-list">
                    <div class="pull-left media-left">
                        <a href="#">浏览<em>9924</em></a>
                    </div>
                    <div class="media-right">
                        <a href="/post/detail/1.html"><span class="cat-name">[基础教程]</span>yii2.0-advanced 高级版项目搭建（一）</a>
                    </div>
                </div>
            </div>
        </div>
        <!--相关文章-->
        <div class="panel">
            <div class="panel-title box-title">
                <span>PHP相关</span>
                <span class="pull-right"><a href="/post/hot.html?type=extend" class="font-12">更多»</a></span>
            </div>
            <div class="panel-body hot-body">
                <div class="clearfix hot-list">
                    <div class="pull-left media-left">
                        <span class="sort sort-1">1</span>
                    </div>
                    <div class="media-right">
                        <a href="/post/detail/142.html">Linux+Nginx+Mysql+Php运维部署</a>
                        <span class="browser">阅读(2148)</span>
                    </div>
                </div>
                <div class="clearfix hot-list">
                    <div class="pull-left media-left">
                        <span class="sort sort-2">2</span>
                    </div>
                    <div class="media-right">
                        <a href="/post/detail/45.html">设计模式：工厂模式</a>
                        <span class="browser">阅读(948)</span>
                    </div>
                </div>

            </div>
        </div>
        <!--分类文章-->
        <div class="panel">
            <div class="panel-title box-title">
                <span>分类</span>
                <span class="pull-right"><a href="/post/hot.html?type=extend" class="font-12">更多»</a></span>
            </div>
            <div class="panel-body hot-body">
                <div class="clearfix hot-list">

                    <div class="media-right">
                        <a href="/post/detail/142.html">Linux</a>
                        <span class="browser">文章(2148)</span>
                    </div>
                </div>
                <div class="clearfix hot-list">
                    <div class="media-right">
                        <a href="/post/detail/45.html">PHP</a>
                        <span class="browser">文章(948)</span>
                    </div>
                </div>

            </div>
        </div>
        <!--热门标签-->
        <div class="panel">
            <div class="panel-title box-title">
                <span>热门标签</span>
                <span class="pull-right"><a href="/post/index.html?sort=tag" class="font-12">更多»</a></span>
            </div>
            <div class="panel-body padding-left-0">
                <div class="tag-cloud">
                    <a href="/search/index.html?q=RBAC">RBAC</a>
                    <a href="/search/index.html?q=yii2-admin">yii2-admin</a>
                    <a href="/search/index.html?q=yii2">yii2</a>
                    <a href="/search/index.html?q=%E6%9D%83%E9%99%90">权限</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

