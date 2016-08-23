<?php

namespace backend\controllers;

use Yii;
use backend\models\WebContent;
use backend\models\WebContentSearch;
use backend\models\WebContentPage;
use backend\models\WebContentPost;
use backend\models\WebTypeCategory;
use yii\web\Controller;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\library\BaseFunction;
/**
 * WebContentController implements the CRUD actions for WebContent model.
 */
class WebContentController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            /*'ueditor' => [
                'class' => 'common\widgets\ueditor\UeditorAction',
                'config' => [
                    "imageUrlPrefix"  => "",//图片访问路径前缀
                    "imagePathFormat" => Yii::$app->request->getBaseUrl()."/uploads/image/{yyyy}{mm}{dd}/{time}{rand:6}" //上传保存路径
                ],
            ],*/
            'Kupload' => [
                'class' => 'common\widgets\kindeditor\KindEditorAction',
            ],
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     //这里扩展地址别写错
                'config' => [
                    //'imagePathFormat' => dirname(Yii::$app->request->getScriptFile())."/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                    'imagePathFormat' => Yii::$app->request->getBaseUrl()."/uploads/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                ],
            ],
        ];
    }

    /**
     * Lists all WebContent models.
     * @return mixed
     */
    //文章首页
    public function actionPost($content_type = 'post')
    {
        $searchModel = new WebContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $content_type);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    //页面首页
    public function actionPage($content_type = 'page')
    {
        $searchModel = new WebContentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams, $content_type);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    //设置分类
    public function actionSetting()
    {

        $model = new WebTypeCategory();
        $data = $model::find()->Asarray()->all();
        $ids = BaseFunction::getconfig()[$_GET['act']];

        $post_data = Yii::$app->request->post();
        if ($post_data)
        {
            //网站配置的路径
            $configPath = Yii::getAlias('@webroot').'/config.php';
            $config =  BaseFunction::getconfig();
            $rows[$_GET['act']] = $post_data['web_content_type'];
            $config_rows = array_merge($config, $rows);
            $config_content = var_export($config_rows, true);
            if (is_writeable($configPath))
            {
                if (file_put_contents($configPath, "<?php \r\nreturn " . $config_content . ';'))
                {
                    \Yii::$app->getSession()->setFlash('success', "配置成功！");
                    return $this->redirect(Url::toRoute($_GET['act']));
                }
                else
                {
                    \Yii::$app->getSession()->setFlash('error', "配置失败！");
                    return $this->redirect(Url::toRoute($_GET['act']));

                }
            }

        }
        return $this->renderAjax('setting', [
            'data' => $data,
            'ids' => $ids,
        ]);
    }
    /**
     * Displays a single WebContent model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new WebContent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WebContent();
        //判断是文章或者页面
        if ($_GET['act'] == 'post')
        {
            $bodymodel = new WebContentPost();
        }
        elseif ($_GET['act'] == 'page')
        {
            $bodymodel = new WebContentPage();
        }
        else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        if (Yii::$app->request->post())
        {
            $transaction = Yii::$app->db->beginTransaction();
            try{
                $cre = $model->load(Yii::$app->request->post());
                if(!$cre)
                    throw new \Exception('操作失败！');
                $sre = $model->save();
                if(!$sre)
                    throw new \Exception('操作失败！');
                $rows = [];
                $rows['WebContentPost']['content_id'] = $model->id;
                $rows['WebContentPage']['content_id'] = $model->id;
                $brows = ArrayHelper::merge(Yii::$app->request->post(), $rows);
                //print_r($brows);die;
                $bre = $bodymodel->load($brows);
                if(!$bre)
                    throw new \Exception('操作失败！');
                $tre = $bodymodel->save();
                if(!$tre)
                    throw new \Exception('操作失败！');
                //以上执行都成功，则对数据库进行实际执行
                $transaction->commit();
                \Yii::$app->getSession()->setFlash('success', '添加成功');
                return $this->redirect($_GET['act']);
            }catch (\Exception $e){
                //如果抛出错误则进入catch，先callback，然后捕获错误，返回错误
                $transaction->rollBack();
                \Yii::$app->getSession()->setFlash('error', $e->getMessage());
                //return Helper::arrayReturn(['status'=>false,'msg'=>$e->getMessage()]);
            }
        }


        return $this->render('create', [
            'model' => $model,
            'bodymodel' => $bodymodel,
        ]);

    }

    /**
     * Updates an existing WebContent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

        $model = $this->findModel($id);
        //判断是文章或者页面
        if ($_GET['act'] == 'post')
        {
            $bodymodel = new WebContentPost();
            $bodymodels = $bodymodel::find()->where(['content_id' => $id])->one();
        }
        elseif ($_GET['act'] == 'page')
        {
            $bodymodel = new WebContentPage();
            $bodymodels = $bodymodel::find()->where(['content_id' => $id])->one();
        }
        else
        {
            throw new NotFoundHttpException('The requested page does not exist.');
        }

        //print_r(Yii::$app->request->post());die;
        if ($model->load(Yii::$app->request->post()) && $model->save() &&
            $bodymodels->load(Yii::$app->request->post()) && $bodymodels->save())
        {
            return $this->redirect([$_GET['act']]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionChangestatu($id)
    {
        $model = $this->findModel($id);
        $_GET['status'] == 0 ? $model->status = 1 : $model->status = 0;
        if ($model->save())
        {
            return $this->redirect([$_GET['act']]);
        }

    }

    /**
     * Deletes an existing WebContent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect([$_GET['act']]);
    }

    /**
     * Finds the WebContent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WebContent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WebContent::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
