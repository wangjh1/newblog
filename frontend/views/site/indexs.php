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
                    <h1>WANG CMS</h1>
                    <h4>一个现代的、轻量级的、可扩展的PHPCMS</h4>
                    <a href="<?=Url::to(['site/contact'])?>" class="btn btn-radius btn-primary"><i class="fa fa-phone"></i> 联系我们</a>
                    <a href="https://github.com/wangjh1/newblog.git" class="btn btn-radius btn-primary" target="_blank"><i class="fa fa-github-alt"></i>  Git@github</a>
                    <!--<a href="/index.php?r=doc%2Findex" class="btn btn-radius btn-primary btn-alt"><i class="fa fa-book"></i>
                        开始使用</a>-->
                </div>
            </div>
        </div>
    </section>
    <?php foreach ($data as $k=>$v) :?>
    <section class="main-section feature">
        <?php echo $v['body']?>
    </section>
    <?php endforeach;?>
    <section class="main-section demo">

        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <img alt="" src="<?= Yii::$app->request->getBaseUrl()?>/images/demo.png">
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <div class="demo-wrapper">
                        <h2>演示 </h2>
                        <div>
                            <a href="http://front.wangjinhao.cn" class="btn btn-primary btn-lg btn-block" style="border-radius:0; font-size: x-large; font-weight: 500;padding-top:18px;padding-bottom:16px" target="_blank">
                                前台演示
                            </a>
                            <a href="http://admin.wangjinhao.cn" class="btn btn-primary btn-lg btn-block" style="border-radius:0; font-size: x-large; font-weight: 500;padding-top:18px;padding-bottom:16px" target="_blank">
                                控制面板
                            </a>
                            <div class="well well-sm text-center">
                                <i class="fa fa-user">&nbsp;&nbsp;  </i>username: <b>admin</b> &amp;&amp; password: <b>123456</b>
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
            <h3>在实践中学习，和大家一起探讨进步<span>我的目标是放弃臃肿、过时的方法，打造一个简洁、快速、方便的内容管理系统!</span></h3>
            <ul class="author-info">
                <li><a href="#">
                        <img src="<?= Yii::$app->request->getBaseUrl()?>/images/git.jpg" alt="" width="105" height="105">
                        <h4>Wang</h4>
                        <span>项目创始人</span>
                    </a></li>
            </ul>
        </div>
    </section>                        </div>
