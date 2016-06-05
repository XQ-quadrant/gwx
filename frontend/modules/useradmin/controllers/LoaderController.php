<?php

namespace frontend\modules\useradmin\controllers;

use common\models\User;
use Yii;
use common\models\Loader;
use common\models\LoaderSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LoaderController implements the CRUD actions for Loader model.
 */
class LoaderController extends Controller
{
    public $layout='main.php';
    public function actions()
    {
        return [
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     //这里扩展地址别写错
                'config' => [
                    'imagePathFormat' => "/gbii/frontend/web/uploads/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                ]
            ]
        ];
    }

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
public function actionTest(){
    return $this->render('test');
}

    /**
     * Lists all Loader models.
     * @return mixed
     */
    public function actionIndex()
    {
        //$searchModel = new LoaderSearch();
        //$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $model = Loader::find()->where(['user_id'=>Yii::$app->user->identity->id])->one();
        if($model==null){
            $this->redirect(['create']);
        }
        return $this->render('index', [
            'model' => $model//$this->findModel(Yii::$app->user->identity->id),
        ]);
        /*return $this->render('index', [
            'model' => $this->findModel(Yii::$app->user->identity->id),
            //'dataProvider' => $dataProvider,
        ]);*/
    }

    /**
     * Displays a single Loader model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        //$this->findModel(Yii::$app->user->identity->id
        $model = Loader::find()->where(['user_id'=>Yii::$app->user->identity->id])->one();
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Loader model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Loader();
        $model->user_id = Yii::$app->user->identity->id;

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $user = User::findOne(Yii::$app->user->identity->id);
            $user->status = User::STATUS_LOADER;
            $user->save();

            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Loader model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Loader model.
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
     * Finds the Loader model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Loader the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Loader::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
