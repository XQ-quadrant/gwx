<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Cate */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cate-view">

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
            'cindex',
            'name',
            'create_time',
            'model:ntext',
            'view_index:ntext',
            'pre_cate',
            'level',
            'status',
            'uri:ntext',
            'icon',
        ],
    ]) ?>

</div>
