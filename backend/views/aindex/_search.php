<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AindexSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aindex-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cate') ?>

    <?= $form->field($model, 'model_id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'atc_id') ?>

    <?php // echo $form->field($model, 'uid') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'createtime') ?>

    <?php // echo $form->field($model, 'updatetime') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
