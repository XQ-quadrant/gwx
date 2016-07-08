<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\ueditor\UEditor;

/* @var $this yii\web\View */
/* @var $model common\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'breviary')->textarea(['rows' => 6]) ?>
<div style="margin-top: 50px"></div>
    <?= $form->field($model, 'content')->textarea(['rows' => 6])->widget(UEditor::className(),['class'=>'controls ','id'=>'content','name'=>'content','class'=>'controls' ])  ?>
</div>
    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cate')->textInput() ?>

    <?= $form->field($model, 'type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'views')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
