<?php

namespace frontend\modules\useradmin\controllers;

use common\models\Photo;
use Yii;
use common\models\Room;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\ForbiddenHttpException;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
/**
 * BusinessController implements the CRUD actions for Room model.
 */
class BusinessController extends Controller
{
    public $layout='main.php';
    public $enableCsrfValidation = false;

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['update', 'create','index','view','create_pic','picdelete'],

                'rules' => [
                    [
                        'actions' => ['update','index','create','delete','view','create_pic','picdelete'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                    'picdelete' => ['get','post'],
                    'update' => ['get', 'put', 'post'],
                ],
            ],
        ];
    }
    /*public function actions(){
        return [
            'upload' => [
                'class' => 'common\widgets\ueditor\UEditorAction',
                'config' => [

                    "imageUrlPrefix"  => "http://www.baidu.com",//图片访问路径前缀
                    "imagePathFormat" => "/upload/image/{yyyy}{mm}{dd}/{time}{rand:6}" //上传保存路径
                ],
            ]
        ];

    }*/
    /*public function beforeAction()
    {
        //var_dump(Yii::$app->request->post());die();
        $model = Room::findOne(73);
        //$model = $this->findModel($id);
        //$model = new Photo();
        // $model->album_id = $id;
        $model->scenario = 'pic';
        if (Yii::$app->request->isPost ){
            echo "cvch";die();
            $model->upload();
            //return $this->redirect(['view', 'id' => $model->id]);
        }else {
            return $this->render('create_pic', [
                'model' => $model,
            ]);
        }
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }
    }*/
    public function actions()
    {
        return [
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     //这里扩展地址别写错
                'config' => [
                    'imagePathFormat' => \yii\helpers\Url::to('@web')."/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                ]
            ]
        ];
    }

    /**
     * Lists all Room models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Room::find()->where(['user_id' => Yii::$app->user->identity->id]),
            'pagination' => [
                'pageSize' => 20,
            ],
            'sort' => [
                'defaultOrder' => [
                    'createtime' => SORT_DESC,
                    'id' => SORT_NUMERIC,
                ]
            ],
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Room model.
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
     * Creates a new Room model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        /*Yii::$classMap['iisns\webuploader\MultiImage'] = '@vendor/iisns/yii2-webuploader/MultiImage.php';
        Yii::$classMap['iisns\webuploader\MultiImage'] = '@vendor/iisns/yii2-webuploader/WebUploader.php';
        Yii::$classMap['iisns\webuploader\MultiImage'] = '@vendor/iisns/yii2-webuploader/MultiImageAsset.php';
        Yii::$classMap['iisns\webuploader\MultiImage'] = '@vendor/iisns/yii2-webuploader/CropperAsset.php';
        Yii::$classMap['iisns\webuploader\MultiImage'] = '@vendor/iisns/yii2-webuploader/Cropper.php';*/
        $model = new Room();

        $model->user_id=Yii::$app->user->identity->id;
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            $data["Room"]['facility']= json_encode($data["Room"]['facility']);
            //var_dump($data["Room"]);
            if ($model->load($data) && $model->save()) {
                return $this->redirect(['create_pic', 'id' => $model->id]);
            }else{
                echo "failed";
            }
        }
       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['create_pic', 'id' => $model->id]);
        }*/
        else {
            //return $this->redirect(['create_pic', 'id' => $model->id]);
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    /**
     * 上传图片到相册
     * @param integer $id 相册ID
     */
    /*public function actionUpload($id)
    {
        $model = $this->findModel($id);

        if (Yii::$app->request->isPost) {
            $model->upload();
        }

        return $this->render('upload', [
            'model' => $this->findModel($id),
        ]);
    }*/
    public function actionCreate_pic($id){
        $model = Room::findOne($id);
        //$model = $this->findModel($id);
        //$model = new Photo();
       // $model->album_id = $id;
        $model->scenario = 'pic';
        if (Yii::$app->request->isPost ){
            //echo "cvch";die();
            $model->upload();
            //return $this->redirect(['view', 'id' => $model->id]);
        }else {
            return $this->render('create_pic', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Room model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
//var_dump(Yii::$app->request->post());die();
        if(Yii::$app->request->isPost){
            $data = Yii::$app->request->post();
            $data["Room"]['facility']= json_encode($data["Room"]['facility']);
            //var_dump($data["Room"]);
            if ($model->load($data) && $model->save()) {
                return $this->redirect(['index']);
            }
        }else {
            $model->facility= json_decode($model->facility);
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Room model.
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
     * Finds the Room model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Room the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Room::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionPicdelete($id)
    {
        $model = Photo::findOne($id);
        if ( $model->created_by === Yii::$app->user->id) {
            try {
                //unlink(Yii::getAlias('@web/uploads/user/') . $model->created_by . '/' . $model->store_name);//dirname(__FILE__)
                unlink('uploads/user/'.$model->created_by . '/' . $model->store_name);
            } catch (Exception $e) {
                throw new ServerErrorHttpException('Internal Server Error');
            }
            return $model->delete();
        } else {
            throw new ForbiddenHttpException('You are not allowed to perform this action.');
        }
    }
}
