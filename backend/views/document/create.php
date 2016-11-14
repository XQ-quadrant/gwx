<?php

use yii\helpers\Html;
use common\models\Cate;

/* @var $this yii\web\View */
/* @var $model common\models\Document */
$cate = Cate::findOne(['id'=>Yii::$app->request->get('cate')])? Cate::findOne(['id'=>Yii::$app->request->get('cate')]): Cate::findOne($model->getAttribute('cate'));

$this->title = 'Create Document';
$this->params['breadcrumbs'][] = ['label' => $cate->name,
    'url' => ['index','DocumentSearch[cate]'=>Yii::$app->request->get('cate')]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'cate' => $cate
    ]) ?>

</div>
