<?php

namespace backend\controllers;

use Yii;
use backend\models\WebMenu;
use backend\models\WebMenuSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\library\UnlimitCat;

/**
 * WebMenuController implements the CRUD actions for WebMenu model.
 */
class WebMenuController extends Controller
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
     * Lists all WebMenu models.
     * @return mixed
     */

    public function actionIndex($id)
    {
        $model = new WebMenu();
        $data  = new UnlimitCat();

        $rows  = $model::find()->where(['category_id' => $id])->Asarray()->all();
        $datas = $data->genCate($rows, 0, 0);

        return $this->render('index', [
            'data' => $datas,
        ]);
    }

    /**
     * Displays a single WebMenu model.
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
     * Creates a new WebMenu model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new WebMenu();
        $model->target=0; //默认在当前页面打开

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing WebMenu model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index', 'id' => $_GET['pid']]);
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
            return $this->redirect([$_GET['act'], 'id' => $_GET['pid']]);
        }

    }
    /**
     * Deletes an existing WebMenu model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index', 'id' => $_GET['pid']]);
    }

    /**
     * Finds the WebMenu model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return WebMenu the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = WebMenu::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
