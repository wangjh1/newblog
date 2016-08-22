<?php
use \yii\helpers\Html;
use \yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div id="page-content">

    <section class="main-section jumbotron">
        <div class="background-image-holder" style="background: url(<?= Yii::$app->request->getBaseUrl()?>/images/hero4.jpg) 50% 100%;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1>HASSIUM CMS</h1>
                    <h4>一个现代的、轻量级的、可扩展的PHPCMS</h4>
                    <a href="/index.php?r=page%2F63+" class="btn btn-radius btn-primary"><i class="fa fa-download"></i> 下载Hassium</a>
                    <a href="https://github.com/hassiumsoft/hasscms-app.git" class="btn btn-radius btn-primary"><i class="fa fa-github-alt"></i>  Git@github</a>
                    <a href="/index.php?r=doc%2Findex" class="btn btn-radius btn-primary btn-alt"><i class="fa fa-book"></i>
                        开始使用</a>
                </div>
            </div>
        </div>
    </section>
    <section class="main-section feature">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12  head-line">
                    <h2>为什么选择Hassium</h2>
                    <hr>
                </div>
            </div>
            <div class="row pad-bottom">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="feature-wrapper">
                        <div class="media">
                            <span class="media-left"><i class="fa fa-lightbulb-o fa-5x"></i></span>
                            <div class="media-body">
                                <h4><strong>简单</strong></h4> Hassium cms只包含常用的功能供你使用
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="feature-wrapper">
                        <div class="media">
                            <span class="media-left"><i class="fa fa-rocket fa-5x"></i></span>
                            <div class="media-body">
                                <h4><strong>现代</strong></h4> Hassium使用php最新的特性,并基于yii2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="feature-wrapper">
                        <div class="media">
                            <span class="media-left"><i class="fa fa-magic fa-5x"></i></span>
                            <div class="media-body">
                                <h4><strong>通用</strong></h4> 你可以使用Hassium开发从简单到复杂的各种web应用程序
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="feature-wrapper">
                        <div class="media">
                            <span class="media-left"><i class="fa fa-puzzle-piece fa-5x"></i></span>
                            <div class="media-body">
                                <h4><strong>可扩展</strong></h4> Hassium的插件和主题可以和平台无缝集成
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="feature-wrapper">
                        <div class="media">
                            <span class="media-left"><i class="fa fa-link fa-5x"></i></span>
                            <div class="media-body">
                                <h4><strong>靠谱</strong></h4> Hassium很靠谱,在每次更新后不会破坏你的应用程序和主题
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="feature-wrapper">
                        <div class="media">
                            <span class="media-left"><i class="fa fa-book fa-5x"></i></span>
                            <div class="media-body">
                                <h4><strong>容易学习</strong></h4> 基于Yii2模块化开发,简单容易上手
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="feature-wrapper">
                        <div class="media">
                            <span class="media-left"><i class="fa fa-tachometer fa-5x"></i></span>
                            <div class="media-body">
                                <h4><strong>省时</strong></h4> 官方应用仓库拥有大量的第三方的插件和主题，让你快速搭建你的网站！
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <div class="feature-wrapper">
                        <div class="media">
                            <span class="media-left"><i class="fa fa-group fa-5x"></i></span>
                            <div class="media-body">
                                <h4><strong>开源</strong></h4> Hassium的源代码被分享在Github，可以方便查看代码。
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-section demo">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <img alt="" src="/storage/assets/fc0cf0b6/images/admin-ui.png">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="demo-wrapper">
                        <h2>演示 </h2>
                        <div>
                            <a href="http://demo.hassium.org/index.php" class="btn btn-primary btn-lg btn-block" style="border-radius:0; font-size: x-large; font-weight: 500;padding-top:18px;padding-bottom:16px" target="_blank">
                                前台演示
                            </a>
                            <a href="http://demo.hassium.org/admin.php" class="btn btn-primary btn-lg btn-block" style="border-radius:0; font-size: x-large; font-weight: 500;padding-top:18px;padding-bottom:16px" target="_blank">
                                控制面板
                            </a>
                            <div class="well well-sm text-center">
                                <i class="fa fa-user">&nbsp;&nbsp;  </i>username: <b>demo</b> &amp;&amp; password: <b>demo1234</b>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main-section author">
        <div class="container">
            <!--  -->
            <h3>你在我们的身上会看到和wordpress、drupal很多相似的地方<span>我们的目标是放弃臃肿、过时的方法，打造一个简洁、快速、方便的内容管理系统!</span></h3>
            <ul class="author-info">
                <li><a href="#">
                        <img src="/storage/assets/fc0cf0b6/images/client-pic1.jpg" alt="">
                        <h4>zhepama</h4>
                        <span>项目创始人</span>
                    </a></li>
            </ul>
        </div>
    </section>                        </div>
