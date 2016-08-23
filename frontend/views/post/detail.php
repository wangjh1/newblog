<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\models\ColumnsType */

$this->title = $data[0]['title'];
$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['post/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<?=Html::cssFile('@web/css/article.css')?>
<div class="container">
<div class="row">
    <div class="col-lg-9">
        <div class="page-title  data-id="226">
            <h1><?= Html::encode($data[0]['title']) ?>（附演示地址） <span>[基础教程]</span></h1>
            <span>作者：<a href="#"><?= Html::encode($data[0]['user_name']) ?></a></span>
            <span>发布于：<?php echo date('Y-m-m', $data[0]['created_at'])?></span>
            <span>浏览：<?= Html::encode($data[0]['view_count']) ?></span>
            <span><a href="javascript:;" class="j-collect">收藏</a></span>
        </div>

        <div class="page-content">
            <?php echo $data[0]['body']; ?>
        </div>
        <div class="post-donate">
            <span>如果文章对您有所帮助，希望继续支持我们，您的支持是我们最大的动力</span>
            <a href="#" class="btn btn-success">￥打赏</a>
        </div>
        <div class="page-tag">
            <b>标签：</b>
            <span><a href="#">RBAC</a></span>
            <span><a href="#">源码</a></span>
            <span><a href="#">后台管理</a></span>
            <span><a href="#">系统</a></span>
            <div class="page-declare">
                <b>声明：</b><span>文章内容由作者原创或整理，未经允许，不得转载！</span>
            </div>
            <div class="bdsharebuttonbox bdshare-button-style0-16" data-bd-bind="1469095822212">
                <a href="#" class="bds_more" data-cmd="more"></a>
                <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                <a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a>
                <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a>
            </div>
            <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{},"image":{"viewList":["qzone","tsina","tqq","renren","weixin"],"viewText":"分享到：","viewSize":"16"}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel">
            <div class="panel-title box-title">
                <span>最新文章</span>
<!--                <span class="pull-right"><a href="/post/index.html" class="font-12">更多»</a></span>-->
            </div>
            <div class="new last-post J_lastTime">
                <ul>
                    <?php foreach ($new as $kn=>$vn) :?>
                    <li class="">
                        <a href="<?= Url::to(['post/detail', 'id'=>$vn['id']])?>" target="_blank">
                            <div class="time">
                                <span class="r"><?php echo date('d', $vn['created_at'])?></span>/<span class="y"><?php echo date('m', $vn['created_at'])?></span>
                            </div>
                            <div class="title"><?= Html::encode($vn['title'])?></div>
                        </a>
                    </li>
                    <?php endforeach;?>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
<?php
$this->registerJs(
'$("document").ready(function(){
        $(".J_lastTime").find("li").eq(0).addClass("hov");
        $(".J_lastTime li").hover(function(){
            $(this).addClass("hov").siblings().removeClass("hov");
        })
    });'
);?>