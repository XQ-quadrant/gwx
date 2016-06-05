<?php

use yii\helpers\Html;
use yii\web\View;
use yii\data\Pagination;
use backend\widgets\common\LinkPages;
use common\widgets\ueditor\UEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Room */

$this->title = '修改房屋信息: ' . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => '房东', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改';
$this->registerCssFile('@web/media/css/select2_metro.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/chosen.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerJsFile('@web/media/js/jquery.validate.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/additional-methods.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/select2.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/chosen.jquery.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/form-validation.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJs("
        jQuery(document).ready(function() {

		   // initiate layout and plugins

		   App.init();

		   FormValidation.init();

		});",View::POS_END);
?>
<div class="portlet box green">

    <div class="portlet-title">

        <div class="caption"><i class="icon-reorder"></i><?= $this->title?></div>

        <div class="tools">

            <a href="javascript:;" class="collapse"></a>

            <a href="#portlet-config" data-toggle="modal" class="config"></a>

            <a href="javascript:;" class="reload"></a>

            <a href="javascript:;" class="remove"></a>

        </div>

    </div>

    <div class="portlet-body form">

        <!-- BEGIN FORM-->

        <h3></h3>
        <?= $this->render('_form_update', [
            'model' => $model,
        ]) ?>

        <!-- END FORM-->

    </div>

</div>
