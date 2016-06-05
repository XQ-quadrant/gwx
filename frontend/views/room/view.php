<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\web\View;
/* @var $this yii\web\View */
/* @var $model common\models\Room */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => '租房', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
//$this->registerJsFile('@web/hdp/unitegallery/js/jquery-11.0.min.js',['depends'=>['frontend\assets\HomeAsset']],View::POS_HEAD);

$this->registerCssFile('@web/hdp/unitegallery/css/unite-gallery.css',[ 'depends'=> 'frontend\assets\HomeAsset']);
$this->registerCssFile('@web/hdp/unitegallery/themes/default/ug-theme-default.css',[ 'depends'=> 'frontend\assets\HomeAsset']);
$this->registerCssFile('@web/home/css/roomdetail.css',[ 'depends'=> 'frontend\assets\HomeAsset']);
$this->registerCss("#gallery {margin: 0 auto;}");
$this->registerJsFile('@web/hdp/unitegallery/js/unitegallery.min.js',['depends'=>['frontend\assets\HomeAsset']]);
$this->registerJsFile('@web/hdp/unitegallery/themes/default/ug-theme-default.js',['depends'=>['frontend\assets\HomeAsset']]);
$this->registerJsFile('@web/gb/js/collect.js');
$this->registerJs("$(document).ready(function() {
                jQuery(\"#gallery\").unitegallery({
                     theme_enable_text_panel: false
                    });
				$().UItoTop({ easingType: 'easeOutQuart' });
				var cc = collect();

		});",View::POS_END);

//$this->params['banner']['pic'] = $model->pic;
$this->params['banner_pic'] = $model->pic;
?>
<div class="room-view">

    <h1></h1>

    <div class="bolg-posts">
        <div class="container">
            <div class="single">

                <div class="top-single">

                    <div class="grid-single">
                        <div class="" style="float: left">
                        <?= Breadcrumbs::widget([
                            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                        ]) ?>
                        <?= Alert::widget() ?>
                            </div>
                        <div class="single-one" style="background-color: rgba(17, 204, 172, 0.75);">

                            <span style="font-size: 1.3em;color: #FFFFFF"><i class="fa fa-jpy"> </i><strong><?= Html::encode($model->price) ?></strong> 元/月</span>
                        </div>

                        <div class="clearfix"> </div>
                    </div>

                    <div class='row' style="padding:0px 0px;">
                        <div class='col-md-7 '>
                            <div id="gallery" style="display:none;">
                                <!--<volist name="pic" id="vo" offset="0">-->
                                <?php foreach ($model->photos['photos'] as $photo): ?>
                                    <img alt="Preview Image 1"
                                         src="<?= $photo['path']?>"
                                         data-image="<?= $photo['path']?>"
                                         data-description="Preview Image 1 Description">
                                <!--</volist>-->
                                <?php endforeach ?>
                            </div>
                        </div>
                        <div class="col-md-5"  style="border: 1px solid #d7d7d7;padding: 5px 25px">

                            <div class="row">
                                <div class="address">
                                    <div class='invoice-title'>基本信息</div>
                                    <div class="address-left">
                                        <p><strong> 类 型 ：</strong></p>
                                        <p><strong> 户 型 ：</strong><?= Html::encode($model->atrribute) ?></p>
                                        <p><strong> 面 积 ：</strong><?= Html::encode($model->area) ?>平方米</p>
                                        <p><strong> 楼 层 ：</strong>3楼</p>
                                    </div>
                                    <div class="address-left">

                                        <p><strong> 床 位  ：</strong><?= Html::encode($model->userlimit) ?>人</p>
                                        <p><strong> 卫生间 ：</strong>独卫</p>
                                        <p><strong> 厨房  ：</strong>有</p>

                                    </div>

                                    <div class="clearfix"> </div>
                                    <p><strong> 地 址 ：</strong><?= Html::encode($model->address) ?></p>
                                </div>
                            </div>

                            <div class="row" >
                                <div class='col-sm-6 seller'>
                                    <div class='invoice-title'>家居设施</div>
                                    <!--<i class='fa fa-arrow-right'></i>-->
                                    <address>
                                        <?php $fd = json_decode($model->facility);
                                        for ($i =0 ;$i<count($fd);$i+=2){

                                            ?>

                                            <span class="entypo-basket">&nbsp;<?=$fd[$i]?></span>
                                            <br>

                                        <?php } ?>
                                    </address>
                                </div>
                                <div class='col-sm-6 buyer'>
                                    <div class='invoice-title'>&nbsp;</div>
                                    <address>
                                    <?php for ($i =1 ;$i<count($fd);$i+=2){ ?>
                                        <span class="entypo-briefcase">&nbsp;<?=$fd[$i]?></span>
                                        <br>
                                    <?php } ?>
                                    </address>
                                </div>
                            </div>

                        </div>

                        <div class="col-md-8">

                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-5 pull-right">
                            <ul class="list_3">
                                <li><a href="#">
                                        <span>房东：</span>
                                        <span class="username" style="font-size: 1.6em"><img class="cricle" alt="" src="/Sdorms/Public/main/img/avatars/avatar3.jpg"> <?=$roomUser->username ?></span>
                                    </a></li>
                                <li>
                                    <span class="dt-sc-button_left small" style="font-size: 1.3em;">
                                        <p style="float: left;font-size: 0.7em"><i class="fa fa-phone"></i>订房电话：</p>
                                        <?= Html::encode($model->connect) ?></span></li>
                                <li><span style="font-size: 1em;color: #464b4c"><p style="float: left;font-size: 0.9em">收费模式：</p><?= Html::encode($model->pay) ?></span></li>
                                <li>
                                    <p class="dt-sc-button-o small collect" >收 藏</p>
                                    <a class="dt-sc-button-o small collect"  target="_blank"><i class="fa fa-heart"></i>  收 藏</a>
                                    <a class="dt-sc-button-o small" href="#" target="_blank"><i class="fa fa-share"></i>  分 享</a>
                                    <a class="dt-sc-button-o small" href="#" target="_blank"><i class="fa fa-exclamation-circle"></i>  推 荐</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-7 pull-right">
                            <!-- BOX -->
                            <div class="box" style="margin-top: 5%;">
                                <div class="box-title">
                                    <!--<h4>详细描述</h4>-->
                                    <div class='invoice-title'>详细描述</div>

                                </div>
                                <div class="box-body font-400">
                                    <?= htmlspecialchars_decode($model->content) ?>
                                </div>
                            </div>


                            <!-- /BOX -->
                            <hr>


                        </div>

                        <div class="col-md-7">
                            <ul class="list-inline">
                                <li>
                                    <a href="#">
                                        <span class="entypo-network"></span>&nbsp;2
                                        Days 发布</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="entypo-chat"></span>&nbsp;2 评价</a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="entypo-share"></span>&nbsp;14
                                        人推荐</a>
                                </li>
                            </ul>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</div>





