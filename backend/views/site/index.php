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
    border: 1px solid #dbe3eb;">
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner slider-items">
                            <div class="item">
                                <img src="/adminlte/dist/img/library.jpg" alt="First slide">
                                <div class="carousel-caption">
                                    灰雀教务系统
                                </div>

                            </div>
                            <div class="item">
                                <img src="/adminlte/dist/img/turmp.jpg" alt="Second slide">

                                <div class="carousel-caption">
                                    Second Slide
                                </div>
                            </div>
                            <div class="item active">
                                <img src="/adminlte/dist/img/computer.jpg" alt="Third slide">

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
        <div class="col-md-5" style="    height: 320px;">
            <?= backend\widgets\box\BoxWidget::widget(['cate' => 32, 'title' => '通知公告', 'liNum' => 7,
                'url' => Url::toRoute(['document/list', 'cate' => 32]),
                'css'=>['warper'=>'box-widget index-box','title'=>'with-border','body'=>'box-profile']]) ?>

            <!-- /.nav-tabs-custom -->
        </div>
    </div>
<hr style="    border-top:1px solid #D9E0E6;margin-top: 0px;margin-bottom: 10px;">
    <div class="row">
        <div class="col-md-7">
            <?= backend\widgets\box\BoxWidget::widget(['type'=>'pic','cate' => 14, 'pic' => true, 'title' => '实验室动态', 'url' => Url::toRoute(['document/list', 'cate' => 14])]) ?>

            <!-- /.nav-tabs-custom -->
        </div>
        <div class="col-md-5">
            <?= backend\widgets\box\BoxWidget::widget(['type'=>'products-list','cate' => 31, 'pic' => true, 'title' => '学术活动', 'url' => Url::toRoute(['document/list', 'cate' => 31])]) ?>

            <!-- About Me Box -->

            <!-- /.box -->
        </div>
        <!-- /.col -->



    </div>
    <div class="row">
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
        <div class="col-lg-8" style="height: 100px;overflow: hidden">
            <img class="img-responsive " src="/adminlte/dist/img/bg_header2.png" alt="Photo">
        </div>
    </div>
</div>

<!-- End Presentation -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->

<!-- END CONTAINER -->