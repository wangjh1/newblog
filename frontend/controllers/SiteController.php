<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use backend\models\News;
use backend\models\WebMenu;
use common\library\UnlimitCat;
use yii\db\Query;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function init()
    {

    }

    public function actionIndex()
    {

        /*$menuItems = [
            ['label' => '首页', 'url' => ['/site/index']],
            ['label' => '关于我', 'url' => ['/site/about']],
            ['label' => '博客', 'url' => ['/site/blog'], 'data-target' => '_blank'],
            ['label' => '投资', 'url' => ['/site/port']],
            ['label' => '联系', 'url' => ['/site/contact']],
        ];*/
        /*$menu = new WebMenu();
        $menu = $menu::find()->orderBy('sort_num DESC')->Asarray()->all();
        $tree = new UnlimitCat();
        $rows = $tree->getRows($menu, 0);

        print_r($rows);die;
        $view = Yii::$app->view;
        $view -> params['layoutData'] = $rows;*/

        $data = (new Query())
            ->select(['body', 'title'])
            ->from('web_content_post')
            ->join('LEFT JOIN','web_content','web_content_post.content_id = web_content.id')
            ->where(['web_content.headline'=>6])
            //->offset(5)
            //->limit(10)
            ->all();
        //print_r($data);die;

        $model = new News();
        $news = $model::find()->all();
        return $this->render('indexs', [
            'news' => $news,
            'data' => $data,
        ]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionBlog()
    {
        return $this->render('blog');
    }

    public function actionBlogd()
    {
        return $this->render('blogd');
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionPort()
    {
        return $this->render('port');
    }

    /*public function send()
    {
        $mail = \Yii::$app->mailer->compose()
            ->setFrom(['627658543@qq.com' => 'Yii 中文网'])
            ->setTo('2445648562@qq.com')
            ->setSubject('邮件发送配置')
            //->setTextBody('Yii中文网教程真好 www.yii-china.com')   //发布纯文字文本
            ->setHtmlBody("<br>Yii中文网教程真好！www.yii-china.com")    //发布可以带html标签的文本
            ->send();
        if($mail)
            echo 'success';
        else
            echo 'fail';
    }*/
    public function actionSignup()
    {
        $mail = \Yii::$app->mailer->compose()
            ->setFrom(['627658543@qq.com' => 'Yii 中文网'])
            ->setTo('2880326171@qq.com')
            ->setSubject('邮件发送配置')
            //->setTextBody('Yii中文网教程真好 www.yii-china.com')   //发布纯文字文本
            ->setHtmlBody("<br>Yii中文网教程真好！www.yii-china.com")    //发布可以带html标签的文本
            ->send();
        if($mail)
            echo 'success';
        else
            echo 'fail';

        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
