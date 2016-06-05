<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Userinfo */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Userinfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/media/css/bootstrap-fileupload.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/chosen.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/profile.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
//$this->registerCssFile('@web/media/css/profile.css',[ 'depends'=> 'frontend\assets\HomeAsset']);
$this->registerJsFile('@web/media/js/chosen.jquery.min.js',['depends'=>['frontend\assets\MetronicAsset']]);


?>


    <!--BEGIN TABS-->

    <div class="tabbable tabbable-custom tabbable-full-width">



            <div class="tab-pane row-fluid active sale-summary" id="tab_1_1">

                <ul class="unstyled profile-nav span3">

                    <li><img src="../../media/image/profile-img.png" alt="" /> <!--<a href="#" class="profile-edit">edit</a>--></li>

                    <li>

                        <span class="sale-info">学校 <i class="icon-weibo"></i></span>

                        <span class="sale-num"><?=$model->school ?></span>

                    </li>



                </ul>


                <div class="span9">

                    <div class="row-fluid">

                        <div class="span8 profile-info">

                            <h1><?=$model->name ?></h1>
                            <hr>
                            <span style="font-size: larger">简介：</span>
                            <p><?=$model->intro ?> </p>



                            <!--<ul class="unstyled inline">

                                <li><i class="icon-map-marker"></i> Spain</li>

                                <li><i class="icon-calendar"></i> 18 Jan 1982</li>

                                <li><i class="icon-briefcase"></i> Design</li>

                                <li><i class="icon-star"></i> Top Seller</li>

                                <li><i class="icon-heart"></i> BASE Jumping</li>

                            </ul>-->

                        </div>

                        <!--end span8-->

                        <!--<div class="span4">

                            <div class="portlet sale-summary">

                                <div class="portlet-title">

                                    <div class="caption">Sales Summary</div>

                                    <div class="tools">

                                        <a class="reload" href="javascript:;"></a>

                                    </div>

                                </div>

                                <ul class="unstyled">

                                    <li>

                                        <span class="sale-info">TODAY SOLD <i class="icon-img-up"></i></span>

                                        <span class="sale-num">23</span>

                                    </li>

                                    <li>

                                        <span class="sale-info">WEEKLY SALES <i class="icon-img-down"></i></span>

                                        <span class="sale-num">87</span>

                                    </li>

                                    <li>

                                        <span class="sale-info">TOTAL SOLD</span>

                                        <span class="sale-num">2377</span>

                                    </li>

                                    <li>

                                        <span class="sale-info">EARNS</span>

                                        <span class="sale-num">$37.990</span>

                                    </li>

                                </ul>

                            </div>

                        </div>-->

                        <!--end span4-->

                    </div>

                    <!--end row-fluid-->



                </div>

                <!--end span9-->

            </div>

            <!--end tab-pane-->


    </div>

    <!--END TABS-->


