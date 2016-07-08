<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\DocumentSearch */
/* @var $form yii\widgets\ActiveForm */
?>
<!--<form class="searchform">

    <input type="text" class="searchbox" id="searchbox" placeholder="搜索">
    <span class="searchbutton"><i class="fa fa-search"></i></span>
</form>-->

<div class="document-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options'=>['class'=>'searchform']
    ]); ?>

    <?php echo $form->field($model, 'title',[
        //'inputOptions'=>['class'=>'form-control','placeholder'=> $model->getAttributeLabel('title'),],
        'template' => '{input}<span class="searchbutton"><i class="fa fa-search"></i></span>',//$template
        'options'=>['class'=>'']
    ])->label(false) ?>



    <?php ActiveForm::end(); ?>

</div>
