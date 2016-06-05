<?php
//namespace frontend\modules\useradmin\views\business ;
use yii\web\View;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\ActiveField;
use yii\captcha\Captcha;
use common\widgets\ueditor\UEditor;
//use common\widgets\webuploader\MultiImage;
//use iisns\webuploader\MultiImage;
/* @var $this yii\web\View */
/* @var $model common\models\Room */
/* @var $form yii\widgets\ActiveForm */
/*$this->registerCssFile('@web/media/css/select2_metro.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/chosen.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerJsFile('@web/media/js/chosen.jquery.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/select2.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/jquery.tagsinput.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/jquery.multi-select.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/form-components.js',['depends'=>['frontend\assets\MetronicAsset']]);*/

/*$this->registerJs("
        jQuery(document).ready(function() {

		   // initiate layout and plugins

		   App.init();

		   FormValidation.init();

		});",View::POS_END);

*/?>

<div class="room-form form-horizontal">

    <?php $form = ActiveForm::begin(); /*$form->options['id']='form-horizontal'; *//* var_dump($form->options);die();*/ ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'class'=>"span6 "])->label(null,['class'=>'control-label room-label'])
    /* ->widget(Captcha::className(), [
     'template' => '<div class="controls">{input}</div>',])*/ ?>

    <?= $form->field($model, 'price')->input('number')->label(null,['class'=>'control-label room-label']) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true,'class'=>"span6 "])->label(null,['class'=>'control-label room-label']) ?>

    <?= $form->field($model, 'connect')->textInput(['maxlength' => true,'class'=>"span3 "])->label(null,['class'=>'control-label room-label']) ?>

    <?= $form->field($model, 'atrribute')->dropDownList(['单间/套一'=>'单间/套一','独栋'=>'独栋','套二'=>'套二','套三'=>'套三','套四'=>'套四','套五'=>'套五'],['class'=>"select2-container span3"])->label(null,['class'=>'control-label room-label']) ?>

    <?= $form->field($model, 'area')->input('number')->label(null,['class'=>'control-label room-label']) ?>

    <?= $form->field($model, 'facility')->checkBoxList(
        ['空调'=>'空调','热水'=>'热水','网络'=>'网络','衣柜'=>'衣柜','电梯'=>'电梯','向阳'=>'向阳'])->label(null,['class'=>'control-label room-label']) ?>
    <br>
    <?= $form->field($model, 'userlimit')->input('number')->label(null,['class'=>'control-label room-label']) ?>
    <?= $form->field($model, 'pay')->dropDownList(['面议'=>'面议','押一付一'=>'押一付一','押一付二'=>'押一付二','押一付三'=>'押一付三'],['class'=>"select2-container span3"])->label(null,['class'=>'control-label room-label']) ?>

    <?= $form->field($model, 'content')->label(null,['class'=>'control-label room-label'])->widget(UEditor::className(),['class'=>'controls ','id'=>'content','name'=>'content','class'=>'controls' ])  ?>

    <label class="control-label room-label" for="room-pic">封面图</label>

    <div style="display: inline-block">
    <div class="form-group field-room-facility fileupload fileupload-new" data-provides="fileupload" style="">
    <?= $form->field($model, 'pic')->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[ //"imagePathFormat"=> \yii\helpers\Url::to('@web')."/image/{yyyy}{mm}{dd}/{time}{rand:6}"
            //图片上传的一些配置，不写调用默认配置
            //'domain_url' => 'http://www.yii-china.com',
        ]
    ])->label(false) ?>
    </div>
    </div>
    <!--<div class="form-actions">

        <button type="submit" class="btn green">Validate</button>

        <button type="button" class="btn">Cancel</button>

    </div>-->
    <div class="form-actions">
        <?= Html::submitButton($model->isNewRecord ? '创建' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success green' : 'btn btn-primary green']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
