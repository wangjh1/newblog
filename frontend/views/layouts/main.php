<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;
use yii\widgets\ActiveForm;
/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <?=Html::cssFile('@web/css/style.css')?>
    <?=Html::cssFile('@web/css/index.css')?>
    <?=Html::cssFile('@web/css/font-awesome.css')?>

    <?/*=Html::cssFile('@web/css/bootstrap.min.css')*/?>
    <?/*=Html::cssFile('@web/css/templatemo_style_fix_menu.css')*/?>
    <?/*=Html::cssFile('@web/css/bootstrap-responsive.min.css')*/?>
    <?/*=Html::cssFile('@web/css/templatemo_style.css')*/?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::t('common', 'My Company'),
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => '首页', 'url' => ['/site/index']],
        ['label' => '关于我', 'url' => ['/site/about'], 'items'=>[['label' => '就是我', 'url' => ['/site/about'], ]]],
        ['label' => '博客', 'url' => ['/site/blog']],
        ['label' => '投资', 'url' => ['/site/port']],
        ['label' => '联系', 'url' => ['/site/contact']],
    ];
    $menuIrignt = [];
    if (Yii::$app->user->isGuest) {
        $menuIrignt[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuIrignt[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuIrignt[] = [
            'label' => '登出 (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post']
        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-left'],
        'items' => $menuItems,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuIrignt,
    ]);
    ?>
    <form class="navbar-form navbar-right" action="#" method="get">
        <div class="input-group">
            <input type="text" class="form-control" name="q" value="" placeholder="全站搜索">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
        </div>
    </form>
    <?php
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<!--<footer style="color: white;background: #28262A;margin-top: 20px;">
    <div class="container">
        <div id= "latest" class="row">
            <section class="col-lg-4 rp_box_wrapper">
                <h4>Latest Blog Posts <i class="icon-pencil icon-white"></i></h4>
                <article class="rp_box">
                    <a href="#"><img src="<?/*= Yii::$app->request->getBaseUrl()*/?>/images/templatemo_image_04.png" alt="image 4" class="img-rounded"/></a>
                    <div class="date">May 24, 2072</div>
                    <a href="#">Sed quam lorem, ultricies et lobortis rutrum, tristique id lorem.</a>
                </article>
                <article class="rp_box">
                    <a href="#"><img src="<?/*= Yii::$app->request->getBaseUrl()*/?>/images/templatemo_image_05.png" alt="image 5"  class="img-rounded"/></a>
                    <div class="date">May 20, 2072</div>
                    <a href="#">Duis vestibulum libero accumsan lorem varius tristique.</a>
                </article>
                <article class="rp_box">
                    <a href="#"><img src="<?/*= Yii::$app->request->getBaseUrl()*/?>/images/templatemo_image_06.png" alt="image 6"  class="img-rounded"/></a>
                    <div class="date">May 16, 2072</div>
                    <a href="#">Class aptent taciti sociosqu ad litora torquent per conubia.</a>
                </article>
            </section>

            <section class="col-lg-4 rp_box_wrapper">

                <h4>Latest Tweets <i class="icon-twitter icon-white"></i></h4>

                <ul class="twitter_post">
                    <li>Suspendisse at scelerisque urna. Aenean tincidunt massa in tellus varius ultricies. <a href="#">#</a></li>
                    <li>Proin dignissim, diam nec <a href="#">@网站模板</a> enim lorem tempus orci, ac imperdiet ante purus in justo.</li>
                    <li>Fusce cursus consectetur ultricies <a href="#">#freetemplate</a> uis nisl lectus, mattis ut elementum id, fermentum sed erat. </li>
                    <li>Sexy social buttons by Stephen Burgess on <a href="http://codepen.io/minimalmonkey/details/Ecpla" target="_blank">codepen.io</a></li>
                    <li>Icons Collect from <a href="http://fontawesome.io" target="_blank">Font Awesome</a></li>
                    <li>Validate <a href="#" >HTML</a> &amp; <a href="#" >CSS</a></li>
                </ul>
                <br />

                <div class="social_buttons">
                    <a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a>
                    <a href="#" class="icon-button facebook"><i class="icon-facebook"></i><span></span></a>
                    <a href="#" class="icon-button google-plus"><i class="icon-google-plus"></i><span></span></a>
                </div>

            </section>

            <section class="col-lg-4 rp_box_wrapper">

                <h4>Contact Us <i class="icon-envelope icon-white"></i></h4>
                <form>
                    <input name="fullname" type="text" id="fullname" placeholder="Name" maxlength="30" />
                    <input name="email" type="text" id="email" placeholder="Email" maxlength="30" />
                    <textarea rows="3" placeholder="Message"></textarea>
                    <p><button type="submit" class="btn">Submit</button></p>
                </form>

                <address>
                    <strong>Responsive</strong><br>
                    222-444 Aliquam semper dignissim,<br>
                    Fusce cursus turpis lacus, 22440<br>
                    Sit amet tortor<br />
                    <a href="#" title="免费矢量下载"  class="res_about" target="_blank">免费矢量下载</a><br>
                    <abbr title="Phone">Phone:</abbr> <a href="tel:020-040-0240" title="give us a call">020-040-0240</a><br>
                    <abbr title="Email">Email:</abbr> <a href="mailto:info@company.com">info@company.com</a>
                </address>

            </section>

        </div>
        <p class="pull-left">&copy; My Company <?/*= date('Y') */?></p>
        <p class="pull-right"><?/*= Yii::powered() */?></p>
       <!-- <div class="credit">
            <p id="templatemo_cr_bar">
                Copyright © 2072 <a href="#">Your Company Name</a> | Collect from <a href="http://http://www.wangjinhao.cn/newcms/frontend/web"></a>
            </p>
        </div>
    </div>
</footer>-->
<footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>
<?php
//$this->registerJsFile('@web/js/bootstrap.min.js');
?>
<?php
$this->registerJs('
           $("#artCarousel").carousel({
      interval: 4000,
      cycle: true
    });

');
?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
