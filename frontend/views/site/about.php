<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>Who We Are</h1>

    <div class="row">
        <div class="col-lg-9">
            <section class="row">
                <div class="col-lg-9">
<!--                    <h3>Who We Are</h3>-->
                    <p class="lead muted">Aliquam erat volutpat. Nunc et nunc vel quam tincidunt mollis. Integer dignissim ullamcorper nunc, a fermentum ligula egestas a. Integer congue tellus sed nisi tincidunt cursus. Etiam adipiscing consequat nisi.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi eros odio, rutrum quis volutpat nec, venenatis congue nulla. Praesent quis mauris purus, at pellentesque ante. Donec convallis tortor eu nunc viverra nec euismod nunc consequat. Nunc in faucibus nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin dignissim turpis nec diam varius ac aliquet justo ultrices. Praesent eros arcu, molestie at dignissim in, fermentum vitae neque.</p>
                </div>
            </section>
            <section>
                <div class="row">
                    <div class="col-lg-9">
                        <h3>Our Team Members</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-center">
                        <img src="<?= Yii::$app->request->getBaseUrl()?>/images/user1.jpg" class="img-polaroid" alt="Chief Designer">
                        <h6 class="text-center">Chief Designer</h6>
                    </div>
                    <div class="col-lg-7">
                        <p>Etiam cursus cursus libero, a feugiat tortor ornare sit amet. Aliquam hendrerit eros non felis bibendum a condimentum orci euismod. Sed justo nisl, eleifend non luctus placerat, porttitor in sem.<br>Sexy social buttons by Stephen Burgess on <a href="http://codepen.io/minimalmonkey/details/Ecpla" target="_blank">codepen.io</a></p>
                        <p class="social_buttons">
                            <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                            <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                            <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2 text-center">
                        <img src="<?= Yii::$app->request->getBaseUrl()?>/images/user2.jpg" class="img-polaroid" alt="Fashion Designer">
                        <h6>Fashion Designer</h6>
                    </div>
                    <div class="col-lg-7">
                        <p>Etiam cursus cursus libero, a feugiat tortor ornare sit amet. Aliquam hendrerit eros non felis bibendum a condimentum orci euismod. Sed justo nisl, eleifend non luctus placerat, porttitor in sem.</p>
                        <p class="social_buttons">
                            <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                            <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                            <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 text-center">
                        <img src="<?= Yii::$app->request->getBaseUrl()?>/images/user3.jpg" class="img-polaroid" alt="Visual Artist">
                        <h6 class="text-center">Visual Artist</h6>
                    </div>
                    <div class="col-lg-7">
                        <p>Etiam cursus cursus libero, a feugiat tortor ornare sit amet. Aliquam hendrerit eros non felis bibendum a condimentum orci euismod. Sed justo nisl, eleifend non luctus placerat, porttitor in sem.</p>
                        <p class="social_buttons">
                            <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                            <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                            <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <aside class="col-lg-3">
            <nav class="well sidebar-nav">
                <ul class="nav nav-list">
                    <li class="nav-header">Categories</li>
                    <li class="active"><a href="#">Lorem ipsum</a></li>
                    <li><a href="#">Suspendisse </a></li>
                    <li><a href="#">Calender</a></li>
                    <li><a href="#">Events</a></li>
                    <li class="nav-header">Sidebar</li>
                    <li><a href="#">Nam sed mi</a></li>
                    <li><a href="#">Aenean</a></li>
                    <li><a href="#">Quisque</a></li>
                    <li><a href="#">Fusce</a></li>
                    <li><a href="#">Sed varius</a></li>
                    <li><a href="#">Maecenas</a></li>
                    <li class="nav-header">Sidebar</li>
                    <li><a href="#">Cras convallis</a></li>
                    <li><a href="#">Integer id sapien</a></li>
                    <li><a href="#">Vestibulum</a></li>
                </ul>
            </nav>

            <section>
                <h4 class="text-center">Testimonials</h4>
                <blockquote class="pull-right"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <small><cite title="Source Title">Tim Cook</cite>, Visual Designer</small>
                </blockquote>
            </section>
        </aside>
    </div>
    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
</div>
