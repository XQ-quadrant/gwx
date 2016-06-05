<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Room */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pic')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'connect')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'atrribute')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tag')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'area')->textInput() ?>

    <?= $form->field($model, 'facility')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'rules')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'site')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'userlimit')->textInput() ?>

    <?= $form->field($model, 'starttime')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'createtime')->textInput() ?>

    <?= $form->field($model, 'updatetime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
