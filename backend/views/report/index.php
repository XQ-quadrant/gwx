<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\Pagination;

/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', '我的报告');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Reports'), 'url' => ['list-all']];
$this->params['breadcrumbs'][] = $this->title;

$data = $dataProvider->getModels();
$count = $dataProvider->getCount();
$pages = new Pagination([ 'totalCount' =>$count, 'pageSize' => 18]);
?>
<div class="report-index row">
    <div class="col-lg-12 col-sm-12">
    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('common', 'Create Report'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'time',

            'subject:ntext',
            //'content:ntext',
            // 'lecturer',
            // 'lecturer_info:ntext',
            // 'hint:ntext',
            // 'poster:ntext',
            // 'icon:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
