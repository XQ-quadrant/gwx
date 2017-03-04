<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\search\PicSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pic-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'url') ?>

    <?= $form->field($model, 'savepath') ?>

    <?= $form->field($model, 'savename') ?>

    <?php // echo $form->field($model, 'title') ?>
    <?php  echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'createtime') ?>

    <?php // echo $form->field($model, 'size') ?>

    <?php // echo $form->field($model, 'type') ?>

    <?php // echo $form->field($model, 'ext') ?>

    <?php // echo $form->field($model, 'status') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
