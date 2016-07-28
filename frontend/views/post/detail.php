<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Modal;
/* @var $this yii\web\View */
/* @var $model app\models\ColumnsType */

$this->params['breadcrumbs'][] = ['label' => '文章', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $news->title];

?>

<div class="row">
    <div class="col-lg-9">
        <div class="page-title  data-id="226">
            <h1><?= Html::encode($news->title) ?>（附演示地址） <span>[基础教程]</span></h1>
            <span>作者：<a href="/member/index/1.html">上班偷偷打酱油</a></span>
            <span>发布于：2016-05-05</span>
            <span>浏览：6344次</span>
            <span><a href="javascript:;" class="j-collect">收藏</a></span>
        </div>


        <div class="page-content">
            <?php echo $news->content; ?>
        </div>
        <div class="post-donate">
            <span>如果文章对您有所帮助，希望继续支持我们，您的支持是我们最大的动力</span>
            <a href="/donate/index.html" class="btn btn-success">￥打赏</a>
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

        <div class="page-comment">
            <div id="comments" style="margin-top: 10px;">
                <div class="page-header">
                    <h2>共 8 条评论</h2>
                </div>
                <ul id="reply" class="media-list J_mediaList">
                    <li class="media" data-key="1043">
                        <div class="media-left">
                            <a href="/member/index/1990.html" rel="author" data-original-title="" title=""><img class="media-object" src="/themes/yiicn/images/avatar/small.jpg" alt="ws2232295" data-bd-imgshare-binded="1"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="/member/index/1990.html" rel="author" data-original-title="" title="">ws2232295</a> 评论于 2016-06-15 20:11:08                            </div>
                            <div class="media-content"><p>酱油君真的非常耐心，三个小时细心教（本人小白，学习yii 6天，所以耽误时间了）截止发稿时间，酱油君还没有用晚餐。大家都来支持酱油君做出更好的东西。</p></div>
                            <div class="J-media">
                            </div>
                            <div class="media-action">
                                <span class="reply-btn cursor j_replayBtn">回复</span>
                                <form id="w3" class="reply-form j_replayForm" action="" method="post" style="display:none;">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="comment"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm btn-primary J_btnPrimary">回复</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media" data-key="1040">
                        <div class="media-left">
                            <a href="/member/index/728.html" rel="author" data-original-title="" title=""><img class="media-object" src="/themes/yiicn/images/avatar/avatar_4.jpg" alt="wike" data-bd-imgshare-binded="1"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="/member/index/728.html" rel="author" data-original-title="" title="">wike</a> 评论于 2016-06-13 17:29:19                            </div>
                            <div class="media-content"><p>酱油哥，左侧的菜单怎么自定义自己的样式啊？</p><pre class="brush:php;toolbar:false">&lt;?php
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;Nav::widget(
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'encodeLabels'&nbsp;=&gt;&nbsp;false,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'options'&nbsp;=&gt;&nbsp;['class'&nbsp;=&gt;&nbsp;'sidebar-menu'],
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'items'&nbsp;=&gt;&nbsp;MenuHelper::getAssignedMenu(Yii::$app-&gt;user-&gt;id,&nbsp;1),
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'dropDownCaret'&nbsp;=&gt;&nbsp;'&lt;i&nbsp;class="fa&nbsp;fa-angle-left&nbsp;pull-right"&gt;&lt;/i&gt;'
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;);
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;?&gt;</pre><p>这样生成的是bootstrap默认的样式，子菜单的ul的class怎么修改？<br></p></div>
                            <div class="J-media">
                            </div>
                            <div class="media-action">
                                <span class="reply-btn cursor j_replayBtn">回复</span>
                                <form id="w3" class="reply-form j_replayForm" action="" method="post" style="display:none;">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="comment"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm btn-primary J_btnPrimary">回复</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media" data-key="1024">
                        <div class="media-left">
                            <a href="/member/index/616.html" rel="author" data-original-title="" title=""><img class="media-object" src="/themes/yiicn/images/avatar/small.jpg" alt="艾小智" data-bd-imgshare-binded="1"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="/member/index/616.html" rel="author" data-original-title="" title="">艾小智</a> 评论于 2016-06-06 23:39:10                            </div>
                            <div class="media-content"><p>酱油哥，左侧菜单，控制选中状态的js是怎么处理的呢？</p></div>
                            <div class="J-media">

                                <div class="media">
                                    <div class="media-left"><a href="/member/index/1.html" rel="author" title=""><img class="media-object" src="/themes/yiicn/images/avatar/avatar_4.jpg" alt="上班偷偷打酱油" data-bd-imgshare-binded="1"></a></div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a href="/user/index/1.html" rel="author" data-original-title="" title="" class="j_name">上班偷偷打酱油</a> 回复于 2016-06-07 09:04:07														<span class="pull-right"><a class="reply-btn j_replayAt" href="javascript:;">回复</a></span>
                                        </div>
                                        不需要写js，调用yii2的组件可以搞定					</div>
                                </div>

                                <div class="media">
                                    <div class="media-left"><a href="/member/index/616.html" rel="author" title=""><img class="media-object" src="/themes/yiicn/images/avatar/small.jpg" alt="艾小智" data-bd-imgshare-binded="1"></a></div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a href="/user/index/616.html" rel="author" data-original-title="" title="" class="j_name">艾小智</a> 回复于 2016-06-07 10:41:31														<span class="pull-right"><a class="reply-btn j_replayAt" href="javascript:;">回复</a></span>
                                        </div>
                                        <a href="/member/index/1.html">@上班偷偷打酱油</a> 具体哪个组件呢					</div>
                                </div>

                                <div class="media">
                                    <div class="media-left"><a href="/member/index/1.html" rel="author" title=""><img class="media-object" src="/themes/yiicn/images/avatar/avatar_4.jpg" alt="上班偷偷打酱油" data-bd-imgshare-binded="1"></a></div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a href="/user/index/1.html" rel="author" data-original-title="" title="" class="j_name">上班偷偷打酱油</a> 回复于 2016-06-07 13:29:34														<span class="pull-right"><a class="reply-btn j_replayAt" href="javascript:;">回复</a></span>
                                        </div>
                                        <a href="/member/index/616.html">@艾小智</a> yii2自带那个menu					</div>
                                </div>
                            </div>
                            <div class="media-action">
                                <span class="reply-btn cursor j_replayBtn">回复</span>
                                <form id="w3" class="reply-form j_replayForm" action="" method="post" style="display:none;">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="comment"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm btn-primary J_btnPrimary">回复</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media" data-key="984">
                        <div class="media-left">
                            <a href="/member/index/1654.html" rel="author" data-original-title="" title=""><img class="media-object" src="/themes/yiicn/images/avatar/avatar_4.jpg" alt="咸蛋超人" data-bd-imgshare-binded="1"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="/member/index/1654.html" rel="author" data-original-title="" title="">咸蛋超人</a> 评论于 2016-05-22 13:13:23                            </div>
                            <div class="media-content"><p>老大，你这个权限这块是怎么换成自己模板的</p></div>
                            <div class="J-media">
                            </div>
                            <div class="media-action">
                                <span class="reply-btn cursor j_replayBtn">回复</span>
                                <form id="w3" class="reply-form j_replayForm" action="" method="post" style="display:none;">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="comment"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm btn-primary J_btnPrimary">回复</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media" data-key="945">
                        <div class="media-left">
                            <a href="/member/index/1394.html" rel="author" data-original-title="" title=""><img class="media-object" src="/themes/yiicn/images/avatar/small.jpg" alt="lele62330" data-bd-imgshare-binded="1"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="/member/index/1394.html" rel="author" data-original-title="" title="">lele62330</a> 评论于 2016-05-09 10:39:56                            </div>
                            <div class="media-content"><p>老大没有写好的代码和sql可供下载的啊？<br></p></div>
                            <div class="J-media">
                            </div>
                            <div class="media-action">
                                <span class="reply-btn cursor j_replayBtn">回复</span>
                                <form id="w3" class="reply-form j_replayForm" action="" method="post" style="display:none;">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="comment"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm btn-primary J_btnPrimary">回复</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media" data-key="937">
                        <div class="media-left">
                            <a href="/member/index/1734.html" rel="author" data-original-title="" title=""><img class="media-object" src="/themes/yiicn/images/avatar/small.jpg" alt="ouyang123" data-bd-imgshare-binded="1"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="/member/index/1734.html" rel="author" data-original-title="" title="">ouyang123</a> 评论于 2016-05-06 17:31:44                            </div>
                            <div class="media-content"><p>你好&nbsp; 有源码吗&nbsp; 学习下<br></p></div>
                            <div class="J-media">

                                <div class="media">
                                    <div class="media-left"><a href="/member/index/21.html" rel="author" title=""><img class="media-object" src="/themes/yiicn/images/avatar/avatar_6.jpg" alt="pear2007" data-bd-imgshare-binded="1"></a></div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a href="/user/index/21.html" rel="author" data-original-title="" title="" class="j_name">pear2007</a> 回复于 2016-05-15 10:04:44														<span class="pull-right"><a class="reply-btn j_replayAt" href="javascript:;">回复</a></span>
                                        </div>
                                        酱油君说的很清楚     有能力的自己研究  能力差点的 付费提供源码很公平					</div>
                                </div>
                            </div>
                            <div class="media-action">
                                <span class="reply-btn cursor j_replayBtn">回复</span>
                                <form id="w3" class="reply-form j_replayForm" action="" method="post" style="display:none;">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="comment"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm btn-primary J_btnPrimary">回复</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media" data-key="935">
                        <div class="media-left">
                            <a href="/member/index/1109.html" rel="author" data-original-title="" title=""><img class="media-object" src="/themes/yiicn/images/avatar/small.jpg" alt="Vin" data-bd-imgshare-binded="1"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="/member/index/1109.html" rel="author" data-original-title="" title="">Vin</a> 评论于 2016-05-06 10:59:02                            </div>
                            <div class="media-content"><p>大大的赞</p></div>
                            <div class="J-media">
                            </div>
                            <div class="media-action">
                                <span class="reply-btn cursor j_replayBtn">回复</span>
                                <form id="w3" class="reply-form j_replayForm" action="" method="post" style="display:none;">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="comment"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm btn-primary J_btnPrimary">回复</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="media" data-key="932">
                        <div class="media-left">
                            <a href="/member/index/1251.html" rel="author" data-original-title="" title=""><img class="media-object" src="/themes/yiicn/images/avatar/avatar_4.jpg" alt="uucto" data-bd-imgshare-binded="1"></a>
                        </div>
                        <div class="media-body">
                            <div class="media-heading">
                                <a href="/member/index/1251.html" rel="author" data-original-title="" title="">uucto</a> 评论于 2016-05-06 08:29:48                            </div>
                            <div class="media-content"><p>酱油哥，是按你的视频教程做出来的吗？挺好的，有没有源代码，学习一下。<br></p></div>
                            <div class="J-media">

                                <div class="media">
                                    <div class="media-left"><a href="/member/index/1990.html" rel="author" title=""><img class="media-object" src="/themes/yiicn/images/avatar/small.jpg" alt="ws2232295" data-bd-imgshare-binded="1"></a></div>
                                    <div class="media-body">
                                        <div class="media-heading">
                                            <a href="/user/index/1990.html" rel="author" data-original-title="" title="" class="j_name">ws2232295</a> 回复于 2016-06-15 20:24:46														<span class="pull-right"><a class="reply-btn j_replayAt" href="javascript:;">回复</a></span>
                                        </div>
                                        有可能是酱油哥按照这个做的视频哦= =					</div>
                                </div>
                            </div>
                            <div class="media-action">
                                <span class="reply-btn cursor j_replayBtn">回复</span>
                                <form id="w3" class="reply-form j_replayForm" action="" method="post" style="display:none;">
                                    <div class="form-group field-comment-content required">
                                        <textarea id="comment-content" class="form-control" name="comment"></textarea>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-sm btn-primary J_btnPrimary">回复</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
            <input type="hidden" value="/comment/reply.html" class="j_reply_url">        </div>

        <div class="page-comment">
            <div class="panel">
                <div class="panel-content">
                    <div class="well danger">您需要登录后才可以评论。<a href="/site/login.html">登录</a> | <a href="/site/signup.html">立即注册</a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="panel">
            <div class="panel-title box-title">
                <span>最新文章</span>
                <span class="pull-right"><a href="/post/index.html" class="font-12">更多»</a></span>
            </div>
            <div class="new last-post J_lastTime">
                <ul>
                    <li class="hov">
                        <a href="/post/detail/354.html" target="_blank">
                            <div class="time">
                                <span class="r">21</span>/<span class="y">07月</span>
                            </div>
                            <div class="title">网站地图的创建与提交</div>
                        </a>
                    </li>
                    <li>
                        <a href="/post/detail/353.html" target="_blank">
                            <div class="time">
                                <span class="r">21</span>/<span class="y">07月</span>
                            </div>
                            <div class="title">yii2-bootstrap轮播图插件Carousel</div>
                        </a>
                    </li>
                    <li>
                        <a href="/post/detail/352.html" target="_blank">
                            <div class="time">
                                <span class="r">20</span>/<span class="y">07月</span>
                            </div>
                            <div class="title">yii2-bootstrap扩展之tab切换</div>
                        </a>
                    </li>
                    <li>
                        <a href="/post/detail/339.html" target="_blank">
                            <div class="time">
                                <span class="r">18</span>/<span class="y">07月</span>
                            </div>
                            <div class="title">Yii2 教程：统计网站的每日访问量</div>
                        </a>
                    </li>
                    <li>
                        <a href="/post/detail/338.html" target="_blank">
                            <div class="time">
                                <span class="r">18</span>/<span class="y">07月</span>
                            </div>
                            <div class="title">yii2扩展-twig教程</div>
                        </a>
                    </li>
                    <li>
                        <a href="/post/detail/337.html" target="_blank">
                            <div class="time">
                                <span class="r">15</span>/<span class="y">07月</span>
                            </div>
                            <div class="title">php设计模式六大原则（6）-开闭原则 </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>