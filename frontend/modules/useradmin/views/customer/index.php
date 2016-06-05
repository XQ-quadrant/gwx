<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userinfos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userinfo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Userinfo', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'persen_id',
            'email:email',
            'weibo',
            // 'address',
            // 'intro:ntext',
            // 'tel',
            // 'icon:ntext',
            // 'signture',
            // 'stu_id',
            // 'landlord_id',
            // 'u_status',
            // 'qq',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
