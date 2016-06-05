<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Max */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Maxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="max-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'user_id',
            'content:ntext',
            'views',
            'number',
            'sex',
            'pic:ntext',
            'created_at',
            'status',
            'level',
            'likes',
        ],
    ]) ?>

</div>
