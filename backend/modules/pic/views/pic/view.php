<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Pic */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Pics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pic-view">

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
            'content:ntext',
            'url:ntext',
            'savepath',
            'savename:ntext',
            'title',
            'createtime',
            'size',
            'type',
            'ext',
            'status',
            'category',
        ],
    ]) ?>

</div>
