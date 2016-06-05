<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel common\models\LoaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Loaders';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/media/css/bootstrap-fileupload.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/chosen.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/profile.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
//$this->registerCssFile('@web/media/css/profile.css',[ 'depends'=> 'frontend\assets\HomeAsset']);
$this->registerJsFile('@web/media/js/chosen.jquery.min.js',['depends'=>['frontend\assets\MetronicAsset']]);

?>
<div class="tabbable tabbable-custom tabbable-full-width">

    <ul class="nav nav-tabs">

        <!--<li ><a href="#tab_1_1" data-toggle="tab">Overview</a></li>-->

        <li class="active"><a href="#tab_1_2" data-toggle="tab">基本信息</a></li>

        <!--<li><a href="#tab_1_3" data-toggle="tab">Account</a></li>

        <li><a href="#tab_1_4" data-toggle="tab">Projects</a></li>

        <li><a href="#tab_1_6" data-toggle="tab">Help</a></li>-->

    </ul>

    <div class="tab-content">



        <!--end tab-pane-->

        <div class="tab-pane profile-classic row-fluid active" id="tab_1_2">

            <div class="span2"><img src="../../media/image/profile-img.png" alt="" /> </div>

            <ul class="unstyled span10">

                <li><span>真实姓名:</span><?= $model->name ?></li>

                <li><span>电话:</span> <?= $model->tel ?></li>

                <li><span>微博:</span> <a href="<?= $model->weibo ?>"><?= $model->weibo ?></a></li>

                <li><span>介绍:</span><?= $model->weibo ?></li>

            </ul>

            <div class="space10"></div>

            <div class="submit-btn">
                <?= Html::a('修改', ['update', 'id' => $model->id], ['class' => 'btn btn-primary green']) ?>

            </div>

        </div>


    </div>

</div>
