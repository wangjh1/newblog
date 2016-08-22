<?php
use \yii\helpers\Html;
use \yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<?=Html::cssFile('@web/css/style.css')?>
<?=Html::cssFile('@web/css/index.css')?>
<div class="row">
    <div class="col-lg-9">
        <!--轮播 -->
<!--        --><?php //if ($this->beginCache($id)) {   ?>
        <div class="panel">
            <div id="artCarousel" class="carousel slide">
                <ol class="carousel-indicators">
                    <li data-target="#artCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#artCarousel" data-slide-to="1"></li>
                    <li data-target="#artCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/slide01.jpg" alt="Model 1">
                        <div class="carousel-caption">
                            <h4>Website Templates</h4>
                            <p>Download <a href="http://www.cssmoban.com" >Free Templates</a> for your websites!</p>
                        </div>
                    </div>
                    <div class="item"><a href="#" target="_blank"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/slide02.jpg" alt="Model 2"></a></div>
                    <div class="item"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/slide03.jpg" alt="Model 3"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#artCarousel" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">《</span></a>
                <a class="right carousel-control" href="#artCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">》</span></a>
            </div>
        </div>
<!--        --><?php //   $this->endCache();} ?>
        <!--文章 -->
        <div class="panel">
            <div class="panel-title box-title">
                <span>最新文章</span>
                <span class="pull-right"><a href="/post/index-all.html" class="font-12">更多»</a></span>
            </div>
            <div class="new-list">
                <div class="panel-body border-bottom">
                    <div class="row">
                        <div class="col-lg-4 label-img-size">
                            <a href="#" class="post-label">
                                <img src="http://up.yii-china.com/image/20160505/1462417912122071.png" alt="Yii2.0 基于RBAC的后台管理系统（附演示地址）">
                            </a>
                        </div>
                        <div class="col-lg-8 btn-group">
                            <h1><a href="/post/detail/226.html">Yii2.0 基于RBAC的后台管理系统（附演示地址）</a>&nbsp;<span class="cat">[基础教程]</span><span class="top">置顶</span></h1>
                    <span class="post-tags">
                        <span class="glyphicon glyphicon-user"></span><a href="/member/index/1.html">上班偷偷打酱油</a>&nbsp;
                        <span class="glyphicon glyphicon-time"></span>2016-05-05&nbsp;
                        <span class="glyphicon glyphicon-eye-open"></span>6290&nbsp;
                        <span class="glyphicon glyphicon-comment"></span><a href="/post/detail/226.html">10</a>
                    </span>
                            <p class="post-content">简介系统基于yii2.0框架开发，保留框架原有的特性，适合作为二次开发的基础系统，也可以直接拿来作为后台系统。管理系统的模块在不断完善中，现有的功能包含，完整的RBAC权限管理，封...</p>
                            <a href="<?= Url::to(['post/detail', 'id'=>11])?>"><button class="btn btn-warning no-radius btn-sm pull-right">阅读全文</button></a>
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
                <div class="panel-body border-bottom">
                    <div class="row">
                        <div class="col-lg-4 label-img-size">
                            <a href="#" class="post-label">
                                <img src="/themes/yiicn/images/banner/b_0.jpg" alt="网站地图的创建与提交">
                            </a>
                        </div>
                        <div class="col-lg-8 btn-group">
                            <h1><a href="/post/detail/354.html">网站地图的创建与提交</a>&nbsp;<span class="cat">[PHP相关]</span></h1>
                    <span class="post-tags">
                        <span class="glyphicon glyphicon-user"></span><a href="/member/index/1001.html">鲁鲁槟</a>&nbsp;
                        <span class="glyphicon glyphicon-time"></span>2016-07-21&nbsp;
                        <span class="glyphicon glyphicon-eye-open"></span>9&nbsp;
                        <span class="glyphicon glyphicon-comment"></span><a href="/post/detail/354.html">0</a>
                    </span>
                            <p class="post-content">网站地图一般有2种一、一种是站内地图，用户可以方便进入各级栏目查看内容。Yii 下如何创建用户的网站地图（1）在控制器中新建actionXml操作public function a...</p>
                            <a href="/post/detail/354.html"><button class="btn btn-warning no-radius btn-sm pull-right">阅读全文</button></a>
                        </div>
                    </div>
                    <div class="tags">
                    </div>
                </div>
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
        <!--日期 -->
        <div class="panel panel-default">
            <div class="panel-ul">
                <a class="btn btn-green Cfff j_Sign btn-sign signed width100" data-url="">
                    <i class="glyphicon glyphicon-calendar pull-left"></i>
                    <p class="j_Curtime">2016年07月21日</p><p class="j_Signed">今天有个好天气</p>
                </a>
            </div>
        </div>
        <!--交流咨询 -->
        <div class="panel">
            <div class="panel-title box-title">
                <span>交流咨询</span>
            </div>
            <div class="contact">
                <ul class="list-unstyled">
                    <li><span><i class="fa fa-qq"></i></span>技术1群（123456789）<font class="fast">（已满）</font></li>

                </ul>
            </div>
        </div>
        <!--推荐内容 -->
        <div class="panel">
            <div class="panel-title box-title">
                <span>站长推荐</span>
                <span class="pull-right"><a href="http://www.yii-china.com/doc/index.html" class="font-12">更多»</a></span>
            </div>
            <div class="panel-body hot-body">
                <div class="clearfix hot-list">
                    <div class="pull-left media-left">
                        <span class="sort sort-1">1</span>
                    </div>
                    <div class="media-right">
                        <a href="http://www.yii-china.com/doc/yii2-windows.html"><span class="cat-name">[文档]</span>Yii2.0高级版开发指南</a>
                    </div>
                </div>
                <div class="clearfix hot-list">
                    <div class="pull-left media-left">
                        <span class="sort sort-2">2</span>
                    </div>
                    <div class="media-right">
                        <a href="http://www.yii-china.com/doc/rbac.html"><span class="cat-name">[文档]</span>Yii2.0基于角色的权限控制（RBAC）</a>
                    </div>
                </div>
            </div>
        </div>
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
