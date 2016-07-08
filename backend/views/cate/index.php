<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cates';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cate-index" >

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cate', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'cindex',
            'name',
            //'create_time',
            //'model:ntext',
            // 'view_index:ntext',
             'pre_cate',
            // 'level',
            // 'status',
            // 'uri:ntext',
            // 'icon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
