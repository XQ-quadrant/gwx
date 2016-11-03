<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Lecture */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lecture-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'time')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subject')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lecturer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lecturer_info')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hint')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'poster')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'icon')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
