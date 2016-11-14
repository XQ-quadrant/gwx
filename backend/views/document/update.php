<?php

use yii\helpers\Html;
use common\models\Cate;
/* @var $this yii\web\View */
/* @var $model common\models\Document */

$cate = Cate::findOne(['id'=>Yii::$app->request->get('cate')])? Cate::findOne(['id'=>Yii::$app->request->get('cate')]): Cate::findOne($model->getAttribute('cate'));

$this->title = '编辑 ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => $cate->name,
    'url' => ['index','DocumentSearch[cate]'=>$cate->id]];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '编辑';
?>
<div class="document-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cate'=>$cate
    ]) ?>

</div>
