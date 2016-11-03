<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Cate */

$this->title = 'Create Cate';
$this->params['breadcrumbs'][] = ['label' => 'Cates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cate-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
