<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Cate;
use common\widgets\ueditor\Ueditor;

/* @var $this yii\web\View */
/* @var $model common\models\Document */
/* @var $form yii\widgets\ActiveForm */
//$cate=Yii::$app->request->get('cate');

$template = '{label}<div class="col-sm-10">{input}</div>{error}{hint}';
$label = ['class'=>"col-sm-2 text-c control-label form-label"];
?>



    <?php $form = ActiveForm::begin(['options'=>['class'=>'form-horizontal']]); ?>


<label  class="col-sm-2 text-c control-label form-label" style="padding-right: 13px !important;font-size: 1.1em">栏目</label>
    <div class="  radio radio-info radio-inline" style="margin-bottom: 10px">
        <input type="radio" id="inlineRadio1" value="option1" name="" checked="" disabled>
        <label for="inlineRadio1"> <?=$cate->name?> </label>
    </div>

   <?= $form->field($model, 'title',[
        //'inputOptions'=>['class'=>'form-control','placeholder'=> $model->getAttributeLabel('title'),],
        'template' => $template
    ])
        ->textInput(['maxlength' => true,'class'=>'form-control md-input '])
        ->label(null,['class'=>"col-sm-2 text-c control-label form-label"]) ?>


<?= $form->field($model, 'cate')->hiddenInput(['value'=>$cate['id']])->label(false) ?>


    <?= $form->field($model, 'breviary',['template' => $template])->textarea(['rows' => 3,'class'=>'form-control md-input '])->label(null,$label) ?>

    <?= $form->field($model, 'content',['template' => '{label}<div class="col-sm-8">{input}</div>{error}{hint}'])
        ->label(null,$label)->widget(Ueditor::className(),['class'=>'col-md-8 ','id'=>'content','name'=>'content', ])  ?>

    <?= $form->field($model, 'author',['template' => $template])->textInput(['maxlength' => true,'class'=>'form-control sm-input '])->label(null,$label) ?>


    <?= $form->field($model, 'level',['template' => $template])->input('number',['class'=>'form-control sm-input '])->label(null,$label) ?>

<div class="fileupload fileupload-new" data-provides="fileupload">
    <?= $form->field($model, 'pic',['template' => $template])->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[]
    ])->label(null,$label) ?>
    <!-- <div class="input-append">

         <div class="uneditable-input">

             <i class="icon-file fileupload-exists"></i>

             <span class="fileupload-preview"></span>

         </div>

                                         <span class="btn btn-file">

                                         <span class="fileupload-new">Select file</span>

                                         <span class="fileupload-exists">Change</span>

                                         <input type="file" class="default" />

                                         </span>

         <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>

     </div>-->

</div>
    <?= $form->field($model, 'create_by',['template' => $template])->textInput()->label(null,$label) ?>

    <div class="form-group ">
        <div class="col-sm-2"></div>
        <?= Html::submitButton($model->isNewRecord ? '发布' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success  col-sm-2 ' : 'btn btn-primary  col-sm-2 ']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
