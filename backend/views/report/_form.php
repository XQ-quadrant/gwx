<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
//use yii\web\View;
use yii\web\View;
use kartik\datetime\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Report */
/* @var $form yii\widgets\ActiveForm */
//$this->registerCssFile('@web/adminlte/plugins/bootstrap-datetimepicker/css/datetimepicker-custom.css');
//$this->registerJsFile('@web/media/js/jquery-1.10.1.min.js',['depends'=>['yii\bootstrap\BootstrapAsset']],View::POS_END);
//$this->registerJsFile('@web/adminlte/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js',['depends'=>['yii\bootstrap\BootstrapAsset']],View::POS_END);
//$this->registerJsFile('@web/adminlte/dist/js/pickers-init.js',['depends'=>['yii\bootstrap\BootstrapAsset']],View::POS_READY);
$template = '{label}<div class="col-sm-10">{input}{error}{hint}</div>';
$label = ['class' => "col-sm-2 text-c control-label form-label"];
?>

<div class="report-form  row">

    <div class="col-lg-8 ">
        <div class="box box-info">
        <div class="box-header with-border">
            <h4 class="">发起报告</h4>
        </div>
        <?php $form = ActiveForm::begin(['options' => ['class' => 'form-horizontal']]); ?>
        <div class="box-body">

            <?= $form->field($model, 'subject', ['template' => $template])->textInput(['maxlength' => true,])->label(null, ['class' => 'col-sm-2 control-label']) ?>

            <?= $form->field($model, 'content', ['template' => $template])->textarea(['rows' => 6])->label(null, ['class' => 'col-sm-2 control-label']) ?>

            <?= $form->field($model, 'start_at', ['template' => $template])->widget(DateTimePicker::classname(), [
                'options' => ['placeholder' => ''],
                'pluginOptions' => [
                    'autoclose' => true
                ]
            ])->label(null, ['class' => 'col-sm-2 control-label']);
            ?>


            <?= $form->field($model, 'pic',['template' => $template])->widget('common\widgets\file_upload\FileUpload',[
                'config'=>[]
            ])->label(null, ['class' => 'col-sm-2 control-label']) ?>

            <div class="form-group">
            </div>
        </div>
            <div class="box-footer">

                <?= Html::submitButton($model->isNewRecord ? Yii::t('common', 'Create') : Yii::t('common', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success pull-right' : 'btn btn-primary pull-right']) ?>


            </div>
        <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
