<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use common\models\LoginForm;

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
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    //网站系统设置
    public function actionSystem()
    {

        //网站配置的路径
        $configPath = Yii::getAlias('@webroot').'/config.php';
        //邮件配置路径
        $mail = WEB_PATHS.'/common/config/main-local.php';
        //echo $configPath;die;
        if(file_exists($configPath) && file_exists($mail))
        {
            //邮件配置
            $mail_rows = require($mail);
            $config = array_merge(require($configPath), $mail_rows['components']['mailer']['transport']);
        }
        else
        {
            throw new NotFoundHttpException('网站配置文件不存在');

        }

        if(!empty($_POST) && isset($_POST['submit']))
        {
            $newconfig = $_POST;
            $mailconfig['components']['mailer']['transport'] = $newconfig['mail'];
            $mailconfig = ArrayHelper::merge($mail_rows, $mailconfig);
            unset($newconfig['mail']);
            //print_r($_POST);die;
            $config = array_merge(require($configPath), $newconfig);

            $config_content = var_export($config, true);
            $mail_content = var_export($mailconfig, true);

            if (is_writeable($configPath) && is_writeable($mail))
            {
                if( file_put_contents($configPath, "<?php \r\nreturn " . $config_content . ';') && file_put_contents($mail, "<?php \r\nreturn " . $mail_content . ';'))
                {
                    \Yii::$app->getSession()->setFlash('success', "网站配置成功！");
                    return $this->redirect(Url::toRoute('system'));
                }
                else
                {
                    \Yii::$app->getSession()->setFlash('error', "网站配置失败！");
                    return $this->redirect(Url::toRoute('system'));
                }
            }
            else
            {
                \Yii::$app->getSession()->setFlash('error', "此文件不可写！");
                return $this->redirect(Url::toRoute('system'));
            }

        }
        return $this->render('system', ['config'=>$config]);
    }
    public function actionDel()
    {
        Yii::$app->cache->flush();
        return $this->goBack();
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
}
