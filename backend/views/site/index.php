<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = '实验室';
$this->params['index'] = true;//$this->title;
$this->params['breadcrumbs'] = null;//$this->title;
$this->blocks['content-header'] = '';
//$this->registerCssFile('@web/css/pluging.css',['depends'=>['backend\assets\KodeAsset']]);

//$this->registerJsFile('@web/js/jquery.cslider.js',['depends'=>['backend\assets\KodeAsset']]);
$this->registerCss('.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-right: 8px;
    padding-left: 8px;
    margin-top:2px;
}');

?>

<!-- Start Presentation -->
<div class="container" style="padding-left: 0px;padding-right: 0px">
    <div class="row">
        <div class="col-md-7">
            <div class="box  box-solid" style="box-shadow: none;background: none">

                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="    padding: 5px;
    border: 1px solid #B8CEE4;">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="item">
                                <img src=" <?= Yii::getAlias('@web/') ?>images/bg_header.jpg" alt="First slide">

                                <div class="carousel-caption">
                                    老牛逼了
                                </div>
                            </div>
                            <div class="item">
                                <img src="<?= Yii::getAlias('@web/adminlte/dist/') ?>img/03.jpg" alt="Second slide">

                                <div class="carousel-caption">
                                    Second Slide
                                </div>
                            </div>
                            <div class="item active">
                                <img src="<?= Yii::getAlias('@web/') ?>images/bg_header.jpg" alt="Third slide">

                                <div class="carousel-caption">
                                    Third Slide
                                </div>
                            </div>
                        </div>
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="fa fa-angle-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="fa fa-angle-right"></span>
                        </a>
                    </div>

                </div>

            </div>
            <!--<section class="content-header">
                <h1>
                    Icons
                    <small>a set of beautiful icons</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="#">UI</a></li>
                    <li class="active">Icons</li>
                </ol>
            </section>-->

        </div>
        <div class="col-md-5">
            <?= backend\widgets\box\BoxWidget::widget(['cate' => 29, 'title' => '通知公告', 'liNum' => 7,]) ?>

            <!-- /.nav-tabs-custom -->
        </div>
    </div>
<hr style="    border-top:1px solid #D9E0E6;margin-top: 0px;margin-bottom: 10px;">
    <div class="row">
        <div class="col-md-7">
            <?= backend\widgets\box\BoxWidget::widget(['cate' => 14, 'pic' => true, 'title' => '实验室动态', 'url' => Url::toRoute(['document/list', 'cate' => 5])]) ?>

            <!-- /.nav-tabs-custom -->
        </div>
        <div class="col-md-5">
            <div class="box box-primary box-widget">
                <div class="box-header with-border">
                    <h3 class="box-title">Recently Added Products</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="products-list product-list-in-box">
                        <li class="item">
                            <div class="product-img">
                                <img src="<?= Yii::getAlias('@web/adminlte/') ?>dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Samsung TV
                                    <span class="label label-warning pull-right">$1800</span></a>
                        <span class="product-description">
                          Samsung 32" 1080p 60Hz LED Smart HDTV.
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="<?= Yii::getAlias('@web/adminlte/') ?>dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Bicycle
                                    <span class="label label-info pull-right">$700</span></a>
                        <span class="product-description">
                          26" Mongoose Dolomite Men's 7-speed, Navy Blue.
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="<?= Yii::getAlias('@web/adminlte/') ?>dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">Xbox One <span class="label label-danger pull-right">$350</span></a>
                        <span class="product-description">
                          Xbox One Console Bundle with Halo Master Chief Collection.
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                        <li class="item">
                            <div class="product-img">
                                <img src="<?= Yii::getAlias('@web/adminlte/') ?>dist/img/default-50x50.gif" alt="Product Image">
                            </div>
                            <div class="product-info">
                                <a href="javascript:void(0)" class="product-title">PlayStation 4
                                    <span class="label label-success pull-right">$399</span></a>
                        <span class="product-description">
                          PlayStation 4 500GB Console (PS4)
                        </span>
                            </div>
                        </li>
                        <!-- /.item -->
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                    <a href="javascript:void(0)" class="uppercase"> 更 多 </a>
                </div>
                <!-- /.box-footer -->
            </div>
            <!-- About Me Box -->

            <!-- /.box -->
        </div>
        <!-- /.col -->


        <div class="col-lg-2">
            <div class="small-box bg-pblue">
                <div class="inner">
                    <h4>开放课题</h4>

                    <p>申请</p>
                </div>
                <div class="icon">
                    <i class="fa fa-edit"></i>
                </div>
                <a href="#" class="small-box-footer">
                    查 看 <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-2">
            <div class="small-box bg-pblue">
                <div class="inner">
                    <h4>文件资料</h4>

                    <p>下载</p>
                </div>
                <div class="icon">
                    <i class="fa fa-download"></i>
                </div>
                <a href="#" class="small-box-footer">
                    查 看 <i class="fa fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-2">
        <div class="info-box bg-aqua">
            <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">专利</span>
                <span class="info-box-number">41</span>

                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                  <span class="progress-description">
                    70% Increase in 30 Days
                  </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        </div>
    </div>
</div>

<!-- End Presentation -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->

<!-- END CONTAINER -->