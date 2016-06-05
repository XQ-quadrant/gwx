<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\AuthItemModel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-item-model-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList(['1'=>'角色','2'=>'权限']) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>



    <div class="form-group">
        <?= Html::submitButton('保存', ['class' =>  'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
