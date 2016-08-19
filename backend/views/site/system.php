<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use backend\assets\AppAsset;
use common\library\KindEditor;
/* @var $this yii\web\View */
/* @var $model backend\models\WebContent */
/* @var $form yii\widgets\ActiveForm */
$this->title = '网站设置';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="web-type-form">
    <h1></h1>
   <form  class="form-horizontal" action="<?= Url::to(['site/system']) ?>" method="post" enctype="multipart/form-data">
    <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <div class="row">
            <!-- Custom Tabs -->
            <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul id="myTab" class="nav nav-tabs">
                    <li class="active"><a href="#tabs-info" data-toggle="tab">站点信息</a></li>
                    <li><a href="#tabs-seo" data-toggle="tab">SEO设置</a></li>
                    <li><a href="#tabs-mail" data-toggle="tab">邮件设置</a></li>
                    <li><a href="#tabs-upload" data-toggle="tab">上传设置</a></li>
                </ul>

                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade in active" id="tabs-info">

                        <div class="form-group field-webtype-sitename">
                            <label class="col-lg-1 control-label" for="sitename">名称</label>
                            <div class="col-lg-5 field"><input type="text" id="sitename" class="form-control" placeholder="网站名称" data-validate="required:请填写你网站的名称" name="sitename" maxlength="64" value="<?= Html::encode($config['sitename']) ?>"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-siteurl">
                            <label class="col-lg-1 control-label" for="siteurl">网址</label>
                            <div class="col-lg-5 field"><input type="text" id="siteurl" class="form-control" placeholder="请填写网址" data-validate="required:填写网址,url:填写正确的网址(加http://)" name="siteurl" value="<?= Html::encode($config['siteurl']) ?>" maxlength="64"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>

                        <div class="form-group field-webtype-title">
                            <label class="col-lg-1 control-label" for="title">优化标题</label>
                            <div class="col-lg-5 field"><input type="text" id="title" class="form-control" placeholder="title标题内容，用于搜索引擎优化" data-validate="required:请填写优化标题，建议在80字以内。" value="<?= Html::encode($config['title']) ?>" name="title" maxlength="64"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-keywords">
                            <label class="col-lg-1 control-label" for="keywords">关键词</label>
                            <div class="col-lg-5 field"><input type="text" id="keywords" class="form-control" placeholder="站点关键词，用于搜索引擎优化" data-validate="required:请填写站点关键词，建议在100字以内。" value="<?= Html::encode($config['keywords']) ?>" name="keywords" maxlength="64"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-desc">
                            <label class="col-lg-1 control-label" for="desc">描述</label>
                            <div class="col-lg-5 field"><input type="text" id="desc" class="form-control" placeholder="网站的描述，用于搜索引擎优化" data-validate="required:请填写网站的描述，建议在200字以内。" value="<?= Html::encode($config['desc']) ?>" name="desc" maxlength="64"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>

                        <div class="form-group field-webtype-mobile">
                            <label class="col-lg-1 control-label" for="mobile">手机号</label>
                            <div class="col-lg-5 field"><input type="text" id="mobile" class="form-control" placeholder="网站联系人电话" data-validate="required:请填写手机号码,mobile:请填写正确的号码" name="mobile" value="<?= Html::encode($config['mobile']) ?>" maxlength="64"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-mobile">
                            <label class="col-lg-1 control-label" for="QQ">QQ</label>
                            <div class="col-lg-5 field"><input type="text" id="QQ" class="form-control" placeholder="网站联系QQ" data-validate="required:请填写QQ, QQ:请填写QQ" name="QQ" maxlength="64" value="<?= Html::encode($config['QQ']) ?>"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-email">
                            <label class="col-lg-1 control-label" for="QQ">Email</label>
                            <div class="col-lg-5 field"><input type="text" id="email" class="form-control" placeholder="网站联系email" data-validate="required:请填写email,email:请填写正确的email" name="email" value="<?= Html::encode($config['email']) ?>" maxlength="64"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-copyright">
                            <label class="col-lg-1 control-label" for="copyright">copyright</label>
                            <div class="col-lg-5 field"><input type="text" id="copyright" class="form-control" placeholder="网站底部版权信息" data-validate="required:请填写版权信息" name="copyright" maxlength="64" value="<?= Html::encode($config['copyright']) ?>"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-email">
                            <label class="col-lg-1 control-label" for="QQ">网站维护状态</label>
                            <div class="col-lg-5 field">
                                <div class="button-group button-group-small radio">
                                    <label><input type="radio" name="sitestatus" value="1" <?php if ($config['sitestatus'] == 0){echo 'checked';} ?>> 开启 </label>
                                    <label><input type="radio" name="sitestatus" value="0" <?php if ($config['sitestatus'] == 1){echo 'checked';} ?>> 关闭 </label>
                                </div>
                            </div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-sitestatus_detail">
                            <label class="col-lg-1 control-label" for="sitestatus_detail">维护说明</label>
                            <div class="col-lg-5 field">
                                <textarea type="text" rows= "5" id="sitestatus_detail" class="form-control" placeholder="请填写维护说明" name="sitestatus_detail" maxlength="64"></textarea>
                            </div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>

                    </div>
                    <!--   SEO信息                 -->
                    <div class="tab-pane fade" id="tabs-seo">
                        <div class="form-group field-webtype-seo_title">
                            <label class="col-lg-1 control-label" for="seo_title">SEO 标题</label>
                            <div class="col-lg-5 field"><input type="text" value="<?= Html::encode($config['seo_title']) ?>" id="seo_title" class="form-control" placeholder="SEO标题" name="seo_title" maxlength="64"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-seo_keywords">
                            <label class="col-lg-1 control-label" for="seo_keywords">SEO 关键字</label>
                            <div class="col-lg-5 field"><input type="text" value="<?= Html::encode($config['seo_keywords']) ?>" id="seo_keywords" class="form-control" placeholder="请填写关键字"  name="seo_keywords" maxlength="64"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-seo_desc">
                            <label class="col-lg-1 control-label" for="seo_desc">SEO 描述</label>
                            <div class="col-lg-5 field">
                                <textarea type="text" rows= "5" id="seo_desc" value="<?= Html::encode($config['seo_desc']) ?>" class="form-control" placeholder="请填写SEO 描述" name="seo_desc" maxlength="64"></textarea>
                            </div>

                        </div>
                        <div class="form-group field-webtype-seo_other">
                            <label class="col-lg-1 control-label" for="seo_other">其他头部信息</label>
                            <div class="col-lg-5 field">
                                <textarea type="text" rows= "5" value="<?= Html::encode($config['seo_other']) ?>" id="seo_other" class="form-control" placeholder="请填写其他头部SEO信息"  name="seo_other" maxlength="64"></textarea>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-mail">
                        <div class="form-group field-webtype-mail_type">
                            <label class="col-lg-1 control-label" for="mail_type">邮件发送方式</label>
                            <div class="col-lg-5 field">
                                <select id="webtype-parent_id" class="form-control" name="mail_type">
                                    <option value="1">SMTP</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group field-webtype-port">
                            <label class="col-lg-1 control-label" for="port">SMTP端口</label>
                            <div class="col-lg-5 field"><input type="text" id="port" class="form-control" name="mail[port]" placeholder="SMTP端口一般为25" maxlength="64" value="<?= Html::encode($config['port']) ?>"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-host">
                            <label class="col-lg-1 control-label" for="host">SMTP主机</label>
                            <div class="col-lg-5 field"><input type="text" id="host" class="form-control" name="mail[host]" placeholder="SMTP主机" maxlength="64" value="<?= Html::encode($config['host']) ?>"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>
                        <div class="form-group field-webtype-username">
                            <label class="col-lg-1 control-label" for="username">SMTP用户名</label>
                            <div class="col-lg-5 field"><input type="text" id="username" class="form-control" placeholder="SMTP用户名" name="mail[username]" maxlength="64" value="<?= Html::encode($config['username']) ?>"></div>
                        </div>
                        <div class="form-group field-webtype-password">
                            <label class="col-lg-1 control-label" for="password">SMTP密码</label>
                            <div class="col-lg-5 field"><input type="text" id="password" class="form-control" placeholder="SMTP用户名(一般为授权码)" name="mail[password]" maxlength="64" value="<?= Html::encode($config['password']) ?>"></div>
                            <div class="col-lg-5"><div class="help-block"></div></div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="tabs-upload">
                    </div>
                </div>
            </div>

            <!-- nav-tabs-custom -->
        </div>
        <div class="box-footer">
            <div class="form-group">
                <label class="col-lg-1 control-label buttons"></label>
                <?= Html::resetButton('重置', ['class'=>'btn btn-primary buttons','name' =>'submit-button']) ?>
                <?= Html::submitButton('提交', ['class' => 'btn btn-primary buttons', 'name' =>'submit']) ?>
            </div>
        </div>
        </form>
    </div>
</div>
<?php
AppAsset::register($this);
AppAsset::addScript($this, "@web/js/pintuer.js");

?>