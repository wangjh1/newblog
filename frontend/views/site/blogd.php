<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1>Blog</h1>

    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <header class="col-lg-12">
                    <h3>Full Blog Post</h3>
                </header>
            </div>
            <div id="content">
                <article class="post_box"><a href="blog_post.html"><img src="<?= Yii::$app->request->getBaseUrl()?>/images/templatemo_image_01.png" alt="Model Girl 1" class="image_frame_300 img-polaroid"/></a>
                    <h2>Proin Mauris Nibh Aliquet id Consequat</h2>
                    <p> In ante felis, molestie eu euismod id, gravida id enim. Nam consequat vehicula libero, in dignissim velit blandit vel. Morbi quam sapien, pellentesque id aliquam eu, molestie non velit,non viverra quam sem eget elit. </p>
                    <p>Morbi venenatis augue sit amet ante facilisis feugiat sed in lectus. Vivamus imperdiet, ante a pretium vehicula, ante enim sodales mi, eu rutrum odio turpis eget arcu. Proin a elit nisl, id aliquam felis. Nunc ultrices iaculis quam, sed commodo erat tempus mollis. Duis ultricies nulla sed dolor egestas id. Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipiscing elit. Etiam nec turpis bibendum massa dapibus dictum. Donec eu odio sapien. </p>
                    <p>Donec tincidunt eleifend mauris, ac volutpat leo tincidunt a. Aenean vel vehicula augue. Vestibulum lectus sem, porttitor non molestie quis, pulvinar nec nulla. Maecenas id orci vitae lectus fermentum posuere. <a href="#">Phasellus</a> lacinia eleifend elit, eu mollis erat consectetur et. Integer semper sollicitudin quam a ornare. Nam venenatis nibh ac sem faucibus et imperdiet magna laoreet. Sed at risus dui. Ut imperdiet libero at mauris vestibulum tempor. </p>
                    <p>Vestibulum at lorem ac lectus rhoncus aliquet eget ac mauris. Proin nec nunc magna, eu blandit massa. Sed elementum nisi ut quam vehicula eu egestas nisi varius. <a href="#">Aenean semper</a> convallis mi eu congue. In vel neque orci.</p>
                </article>
                <div class="cleaner"></div>
                <section id="comment_section">
                    <h5>Comments</h5>
                    <ol class="comments first_level">
                        <li>
                            <article class="comment_box commentbox1">
                                <div class="gravatar">
                                    <img src="<?= Yii::$app->request->getBaseUrl()?>/images/avator.png" alt="author 6" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">Van <span class="date">22 May 2072</span> <span class="time">10:25 am</span></div>
                                    <p>Ut tellus sapien, molestie in lobortis sit amet, blandit vitae purus. Aliquam dictum vehicula fringilla. Sed justo nisl, eleifend non luctus placerat, porttitor in sem. Donec accumsan dui vel ligula varius elementum.</p>
                                    <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </article>
                        </li>
                        <li>
                            <ol class="comments">
                                <li>
                                    <article class="comment_box commentbox2">
                                        <div class="gravatar">
                                            <img src="<?= Yii::$app->request->getBaseUrl()?>/images/avator.png" alt="author 5" />
                                        </div>
                                        <div class="comment_text">
                                            <div class="comment_author">Patrick <span class="date">23 May 2072</span> <span class="time">08:45 pm</span></div>
                                            <p>Etiam cursus cursus libero, a feugiat tortor ornare sit amet. Vestibulum sed felis id massa malesuada tempus in ut nisl. Donec in risus dui, nec bibendum lacus.</p>
                                            <div class="reply"><a href="#">Reply</a></div>
                                        </div>
                                        <div class="cleaner"></div>
                                    </article>
                                </li>
                                <li>
                                    <ol class="comments">
                                        <li>
                                            <article class="comment_box commentbox1">
                                                <div class="gravatar">
                                                    <img src="<?= Yii::$app->request->getBaseUrl()?>/images/avator.png" alt="author 4" />
                                                </div>
                                                <div class="comment_text">
                                                    <div class="comment_author">Anna <span class="date">24 May  2072</span> <span class="time">11:42 am</span></div>
                                                    <p>Sed congue aliquet ultrices. Sed dapibus, justo non ultricies adipiscing, orci risus vehicula metus, vehicula commodo felis odio eu nisi.</p>
                                                    <div class="reply"><a href="#">Reply</a></div>
                                                </div>
                                                <div class="cleaner"></div>
                                            </article>
                                        </li>
                                    </ol>
                                </li>
                            </ol>
                        </li>
                        <li>
                            <article class="comment_box commentbox1">
                                <div class="gravatar">
                                    <img src="<?= Yii::$app->request->getBaseUrl()?>/images/avator.png" alt="author 1" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">Mark <span class="date">25 May  2072</span> <span class="time">04:30 am</span></div>
                                    <p>Donec gravida volutpat purus, a pellentesque odio bibendum malesuada. Pellentesque id velit id lorem laoreet porttitor eget ut risus. Aliquam a nisl ante, eu dapibus est.</p>
                                    <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </article>
                        </li>
                        <li>
                            <article class="comment_box commentbox1">

                                <div class="gravatar">
                                    <img src="<?= Yii::$app->request->getBaseUrl()?>/images/avator.png" alt="author 2" />
                                </div>
                                <div class="comment_text">
                                    <div class="comment_author">Danny <span class="date">26 May  2072</span> <span class="time">12:33 pm</span></div>
                                    <p>Mauris at lacus libero, a dictum mi. Aliquam volutpat odio a sem varius pretium. Proin eleifend, mauris id consequat convallis, risus lacus ullamcorper ante, quis molestie nulla massa et sem.</p>
                                    <div class="reply"><a href="#">Reply</a></div>
                                </div>
                                <div class="cleaner"></div>
                            </article>
                        </li>
                    </ol>
                    <div class="cleaner"></div>
                    <nav class="pagination">
                        <ul>
                            <li class="disabled"><a href="#" target="_parent">&laquo;</a></li>
                            <li class="active"><a href="#" target="_parent">1</a></li>
                            <li><a href="#" target="_parent">2</a></li>
                            <li><a href="#" target="_parent">3</a></li>
                            <li><a  href="http://www.cssmoban.com/" target="_parent">4</a></li>
                            <li><a  href="http://www.cssmoban.com/" target="_parent">5</a></li>
                            <li><a  href="http://www.cssmoban.com/page/6" target="_parent">6</a></li>
                            <li><a  href="http://www.cssmoban.com/page/7" target="_parent">&raquo;</a></li>
                        </ul>
                    </nav>
                </section>
                <div class="cleaner"></div>
                <div id="comment_form">
                    <h5>Leave your comment</h5>
                    <form action="#" method="post">
                        <div class="form_row">
                            <label>Name (* required)</label>
                            <br />
                            <input name="name" type="text" maxlength="30" />
                        </div>
                        <div class="form_row">
                            <label>Email  (* required but it will not be published)</label>
                            <br />
                            <input name="email" type="text" maxlength="30" />
                        </div>
                        <div class="form_row">
                            <label>Your comment</label><br />
                            <textarea  name="comment"></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Submit</button>
                    </form>
                </div>
            </div>
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
