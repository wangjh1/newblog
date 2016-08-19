<?php

namespace backend\controllers;

use Yii;
use backend\models\WebType;
use backend\models\WebTypeSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\library\UnlimitCat;

/**
 * WebTypeController implements the CRUD actions for WebType model.
 */
class WebTypeController extends Controller
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
     * Lists all WebType models.
     * @return mixed
     */
    public function actionIndex($id)
    {
        $model = new WebType();
        $data  = new UnlimitCat(); //获取树形数组

        $rows  = $model::find()->where(['category_id' => $id])->Asarray()->all();
        $datas = $data->genCate($rows, 0, 0);
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        //print_r($datas);die;
        return $this->render('index', [
            'data' => $datas,
        ]);
    }

    /**
     * Displays a single WebType model.
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
     * Creates a new WebType model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WebType();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WebType model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing WebType model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the WebType model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WebType the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WebType::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
