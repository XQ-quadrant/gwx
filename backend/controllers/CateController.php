<?php

namespace backend\controllers;

use Yii;
use common\models\Cate;
use common\models\CateSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CateController implements the CRUD actions for Cate model.
 */
class CateController extends Controller
{
   // public $layout = 'layout.php';
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

    /**
     * Lists all Cate models.
     * @return mixed
     */
    public function actionIndex($pre_cate =1)
    {
        $searchModel = new CateSearch(['pre_cate'=>$pre_cate]);
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);


        /* jstree版 生产树
         * function catetree($pre_cate = 0){
            $cates = Cate::findAll(['pre_cate'=>$pre_cate]);
            $html = '';
            if(!empty($cates)){
                $html = '<ul >';
                foreach($cates as $v2){
                    $html.= '<li class="jstree-open">'.$v2->name;
                    $html.= catetree($v2->id);
                    $html.= '</li>';
                }
                $html.=  '</ul>';
            }
            return $html;
        }*/



        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionTree($pre_cate){

        function catetree($pre_cate = 1){
            $cate = new Cate();
            $cates = $cate->find()->where(['pre_cate'=>$pre_cate,'status'=>1])->orderBy(['level'=>SORT_ASC])->all();
            // $cates = Cate::findAll(['pre_cate'=>$pre_cate,'status'=>1]);
            $html = [];
            if(!empty($cates)){
                foreach($cates as $v2){

                    $next['text']= $v2->name;
                    $next['href'] = 'update?id='.$v2->id;

                    /*$next['tags'] = ['<a href="/site">cc</a>'];*/
                    $node = catetree($v2->id);
                    if(!empty($node)){
                        $next['nodes'] = $node;
                    }
                   // $node= [];
                    $html[] = $next;
                    unset($next);
                }

            }
            return $html;
        }

        $catetree = json_encode(catetree($pre_cate));
        //var_dump($catetree);die();
        return $this->renderAjax('tree',['catetree'=>$catetree]);
    }

    /**
     * Displays a single Cate model.
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
     * Creates a new Cate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($pre_cate = null)
    {
        $model = new Cate(['pre_cate'=>$pre_cate]);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
           /* if($model->type==Cate::TYPE_document){

            }else{*/
                return $this->redirect(['view', 'id' => $model->id]);
            //}

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Cate model.
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
     * Deletes an existing Cate model.
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
     * Finds the Cate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cate::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }



}
