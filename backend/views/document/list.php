<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-6-17
 * Time: 下午2:10
 */

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Documents';
$this->params['breadcrumbs'][] = $this->title;
$this->params['cate'] = Yii::$app->request->get('DocumentSearch')['cate'];
//$this->registerCssFile('')
$this->params['search'] = $this->render('_searchSimple', ['model' => $searchModel]);

?>
<div class="document-index">



    <div class="row list-index" >
        <div class="col-lg-9" >
            <?=backend\widgets\panel\PanelWidget::widget(['cate'=>14,'pic'=>true,'title'=>'实验室动态'])?>
        </div>
        <div class="col-lg-3" >

            <?=backend\widgets\panel\PanelWidget::widget(['cate'=>14,'title'=>'实验室动态'])?>
        </div>
    </div>


</div>
