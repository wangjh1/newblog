<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>Our Porfolio</h1>

    <div class="row">
        <div class="col-lg-12">

            <!-- 模态框（Modal） -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog"
                 aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close"
                                    data-dismiss="modal" aria-hidden="true">
                                &times;
                            </button>
                            <h4 class="modal-title" id="myModalLabel">
                                Featured Model
                            </h4>
                        </div>
                        <div class="modal-body">
                            <p><img src="<?= Yii::$app->request->getBaseUrl()?>/images/templatemo_image_08.jpg" alt="Model 7"><br /><br /></p>

                            <p>Nullam bibendum lacinia venenatis. Phasellus sapien nisl, scelerisque eu sodales sit amet, imperdiet non neque. Curabitur viverra cursus augue, sed mattis nulla dignissim et. Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Etiam nec turpis bibendum massa dapibus dictum. Donec eu odio sapien. Donec tincidunt eleifend mauris, ac volutpat leo tincidunt a. Aenean vel vehicula augue.</p>
                            <p>Vestibulum lectus sem, porttitor non molestie quis, pulvinar nec nulla. Maecenas id orci vitae lectus fermentum posuere. <a href="#">Phasellus</a> lacinia eleifend elit, eu mollis erat consectetur et. Integer semper sollicitudin quam a ornare. Nam venenatis nibh ac sem faucibus et imperdiet magna laoreet. Sed at risus dui. Ut imperdiet libero at mauris vestibulum tempor.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default"
                                    data-dismiss="modal">关闭
                            </button>
                            <button type="button" class="btn btn-primary">
                                提交更改
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <p class="lead muted">Aliquam erat volutpat. Nunc et nunc vel quam tincidunt mollis. Integer dignissim ullamcorper nunc, a fermentum ligula egestas a. Integer congue tellus sed nisi tincidunt cursus. Etiam adipiscing consequat nisi.</p>

            <ul class="thumbnails pors">
                <li class="col-lg-4">
                    <a href="#myModal" class="thumbnail" data-toggle="modal"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/flashmo_fluidity_01.jpg" alt="Model 1"></a>
                </li>
                <li class="col-lg-4">
                    <a href="#myModal" class="thumbnail" data-toggle="modal"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/flashmo_fluidity_02.jpg" alt="Model 2"></a>
                </li>
                <li class="col-lg-4">
                    <a href="#myModal" class="thumbnail" data-toggle="modal"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/flashmo_fluidity_03.jpg" alt=" Model 3"></a>
                </li>

                <li class="col-lg-4">
                    <a href="#myModal" class="thumbnail" data-toggle="modal"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/flashmo_fluidity_04.jpg" alt="Model 4"></a>
                </li>
                <li class="col-lg-4">
                    <a href="#myModal" class="thumbnail" data-toggle="modal"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/flashmo_fluidity_05.jpg" alt="Model 5"></a>
                </li>
                <li class="col-lg-4">
                    <a href="#myModal" class="thumbnail" data-toggle="modal"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/flashmo_fluidity_06.jpg" alt="Model 6"></a>
                </li>
            </ul>
        </div>
    </div>
    <p>This is the About page. You may modify the following file to customize its content:</p>

<!--        <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">-->
       <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Featured Model</h3>
            </div>
            <div class="modal-body">
                <img src="<?= Yii::$app->request->getBaseUrl()?>/images/templatemo_image_08.jpg" alt="Model 7"><br /><br />
                <p>Nullam bibendum lacinia venenatis. Phasellus sapien nisl, scelerisque eu sodales sit amet, imperdiet non neque. Curabitur viverra cursus augue, sed mattis nulla dignissim et. Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Etiam nec turpis bibendum massa dapibus dictum. Donec eu odio sapien. Donec tincidunt eleifend mauris, ac volutpat leo tincidunt a. Aenean vel vehicula augue.</p>
                <p>Vestibulum lectus sem, porttitor non molestie quis, pulvinar nec nulla. Maecenas id orci vitae lectus fermentum posuere. <a href="#">Phasellus</a> lacinia eleifend elit, eu mollis erat consectetur et. Integer semper sollicitudin quam a ornare. Nam venenatis nibh ac sem faucibus et imperdiet magna laoreet. Sed at risus dui. Ut imperdiet libero at mauris vestibulum tempor.</p>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>-->

    <code><?= __FILE__ ?></code>
</div>
