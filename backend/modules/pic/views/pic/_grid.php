<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-11-5
 * Time: 上午11:47
 */
use yii\helpers\Html;
use yii\grid\GridView;
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],

        [
            'class' => common\models\grid\PicColumn::className(),
        ],
        'content:ntext',
        'url:ntext',
        //'savepath',
        //'savename:ntext',
        // 'category',
        'createtime',
        // 'size',
        // 'type',
        // 'ext',
        'status',

        ['class' => 'yii\grid\ActionColumn'],
    ],
]); ?>