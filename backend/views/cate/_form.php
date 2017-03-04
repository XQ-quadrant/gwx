<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Cate;
/* @var $this yii\web\View */
/* @var $model common\models\Cate */
/* @var $form yii\widgets\ActiveForm */

$this->registerJsFile('@web/js/category/cate_set.js',['depends'=>['yii\web\JqueryAsset'],])

?>

<div class="cate-form">

    <?php $form = ActiveForm::begin(); ?>
<input id="model_id" type="hidden" value="<?= $model->id?>">
    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'cindex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pre_cate')->dropDownList($list) ?>

    <?= $form->field($model, 'level')->textInput() ?>

    <?= $form->field($model, 'status')->dropDownList([1=>'发布',2=>'隐藏']) ?>
    <?= $form->field($model, 'type')->dropDownList(
        Cate::typeLabels()
    ) ?>

    <?= $form->field($model, 'uri')->textarea(['rows' => 1]) ?>

    <?= $form->field($model, 'icon')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('common','Create') : Yii::t('common','Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
