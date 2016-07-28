<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>Blog</h1>

    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <header class="col-lg-12">
                </header>
            </div>
            <section id="content">
                <article class="post_box"> <a href="<?= Url::to(['site/blogd'])?>"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/templatemo_image_01.png" alt="Model Girl 1" class="image_frame_300 img-polaroid"/></a>
                    <h2>Proin Mauris Nibh Aliquet id Consequat</h2>
                    <p> In ante felis, molestie eu euismod id, gravida id enim. Nam consequat vehicula libero, in dignissim velit blandit vel. Morbi quam sapien, pellentesque id aliquam eu, molestie non velit, non viverra quam sem eget elit.</p>
                    <a href="<?= Url::to(['site/blogd'])?>" class="btn btn-danger">Read more...</a>
                    <div class="cleaner"></div>
                    <div class="post_meta">
                        Posted: <i>24 May 2072</i> | In <a href="#"><i>New Faces</i></a>, <a href="#"><i>Fashion Shows</i></a>
                        <span>( 256 comments )</span>
                    </div>

                </article>
                <article class="post_box"> <a href="<?= Url::to(['site/blogd'])?>"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/templatemo_image_02.png" alt="Model Girl 2" class="image_frame_300 img-polaroid" /></a>
                    <h2>Aliquam Consectetur Varius Lorem</h2>
                    <p>Suspendisse bibendum eros eu lorem pharetra porta. Suspendisse porta convallis libero eu ultricies. Aenean dictum lacus vitae dolor commodo fringilla. Donec vitae justo sed diam tincidunt gravida sed vel nisi.</p>
                    <a href="<?= Url::to(['site/blogd'])?>" class="btn btn-danger">Read more...</a>
                    <div class="cleaner"></div>
                    <div class="post_meta">
                        Posted: <i>20 May 2072</i> | In <a href="#"><i>Models</i></a>, <a href="#"><i>Trends</i></a>
                        <span>( 512 comments )</span>
                    </div>

                </article>

                <article class="post_box"> <a href="<?= Url::to(['site/blogd'])?>"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/templatemo_image_03.png" alt="Model Girl 3" class="image_frame_300 img-polaroid" /></a>
                    <h2>Nullam Bibendum Lacinia Venenatis</h2>
                    <p>Nullam bibendum lacinia venenatis. Phasellus sapien nisl, scelerisque eu sodales sit amet, imperdiet non neque. Curabitur viverra cursus augue, sed mattis nulla dignissim et.</p>
                    <a href="<?= Url::to(['site/blogd'])?>" class="btn btn-danger">Read more...</a>
                    <div class="cleaner"></div>
                    <div class="post_meta">
                        Posted: <i>16 May 2072</i> | In <a href="#"><i>Fashion</i></a>, <a href="#"><i>Design</i></a>
                        <span>( 768 comments )</span>
                    </div>

                </article>
                <nav class="pagination pagination-centered">
                    <ul>
                        <li class="disabled"><a href="http://www.cssmoban.com"  target="_parent">&laquo;</a></li>
                        <li class="active"><a  href="http://www.cssmoban.com/" target="_parent">1</a></li>
                        <li><a  href="http://www.cssmoban.com/" target="_parent">2</a></li>
                        <li><a  href="http://www.cssmoban.com/" target="_parent">3</a></li>
                        <li><a  href="http://www.cssmoban.com/" target="_parent">4</a></li>
                        <li><a  href="http://www.cssmoban.com/" target="_parent">5</a></li>
                        <li><a  href="http://www.cssmoban.com/page/6" target="_parent">6</a></li>
                        <li><a  href="http://www.cssmoban.com/page/7" target="_parent">&raquo;</a></li>
                    </ul>
                </nav>
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
