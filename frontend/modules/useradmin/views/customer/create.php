<?php

use yii\helpers\Html;
use yii\web\View;

/* @var $this yii\web\View */
/* @var $model common\models\Userinfo */
$this->registerJsFile('@web/gb/js/lable.js',null,View::POS_END);

$this->title = '成为房东';
$this->params['breadcrumbs'][] = ['label' => '房东', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userinfo-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('_form_loader', [
        'model' => $model,
    ]) ?>

</div>
