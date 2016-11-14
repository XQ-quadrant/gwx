<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Cate */

$this->title = 'Update Cate: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Cates', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';

//$cur_cate = Yii::$app->request->get('pre_cate');
$cates = \common\models\Cate::findAll(['status'=>1]);
$list =[];
foreach($cates as $v){
    $list[$v->id]=$v->name;
}

?>
<div class="cate-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'list' => $list,
    ]) ?>

</div>
