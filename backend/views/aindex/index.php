<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\AindexSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Aindices';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="aindex-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Aindex', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cate',
            'model_id',
            'title',
            'atc_id',
            // 'uid',
            // 'status',
            // 'createtime',
            // 'updatetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
