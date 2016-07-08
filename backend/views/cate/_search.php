<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\CateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cate-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'cindex') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'create_time') ?>

    <?= $form->field($model, 'model') ?>

    <?php // echo $form->field($model, 'view_index') ?>

    <?php // echo $form->field($model, 'pre_cate') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'uri') ?>

    <?php // echo $form->field($model, 'icon') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
