<?php

namespace backend\modules\frontend\controllers;
use common\models\Document;
class InfoController extends \yii\web\Controller
{
    /*public function actionIndex()
    {
        $searchModel = new DocumentSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
        //return $this->render('index');
    }*/

    public function actionIndex($id=42,$precate=18)
    {
        $cate= \Yii::$app->getRequest()->get('cate');
        //$this->layout = 'main_nav.php';
        //echo $cate;die();
        $model = $this->findModel($id);
        return $this->render('view', [
            'model' => $model,
            'pre_cate' => $model->cate,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Document::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }

    protected function findByCate($cate){
        return Document::find()
            ->select(['title','id'])
            ->where(['cate'=>$cate])
            ->all();
    }

}
