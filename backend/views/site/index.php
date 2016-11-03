<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = '国际教育学院';
$this->params['index'] = true;//$this->title;
$this->params['breadcrumbs'] = null;//$this->title;
$this->blocks['content-header'] = '';
//$this->registerCssFile('@web/css/pluging.css',['depends'=>['backend\assets\KodeAsset']]);

//$this->registerJsFile('@web/js/jquery.cslider.js',['depends'=>['backend\assets\KodeAsset']]);
$this->registerCss('.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12  .wbox{
    position: relative;
    min-height: 1px;
    padding-right: 8px;
    padding-left: 8px;
    margin-top:2px;
}
.normal{
position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
');

?>

<!-- Start Presentation -->
<div class="container" style="padding-left: 0px;padding-right: 0px">
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px">
            <div class="box  box-solid" style="box-shadow: none;background: none">

                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2" class="active"></li>
                        </ol>
                        <div class="carousel-inner slider-items">
                            <?php foreach($pic as $k=>$v){
                                if($k==0){
                                    ?>
                                    <div class="item active">
                                        <img src="<?= $v->savepath?>" alt="<?= $v->content?>">
                                    </div>
                                <?php   }else{ ?>
                                    <div class="item">
                                        <img src="<?= $v->savepath?>" alt="<?= $v->content?>">
                                    </div>
                                <?php }
                            }?>

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

        </div>

    </div>
<hr style="    border-top:1px solid #D9E0E6;margin-top: 0px;margin-bottom: 10px;">
    <div class="row">
        <div class="col-md-4" style="    height: 320px;">
            <?= backend\widgets\box\BoxWidget::widget(['cate' => 32, 'title' => '通知公告', 'liNum' => 7,
                'url' => Url::toRoute(['document/list', 'cate' => 32]),
                'css'=>['warper'=>'box-widget index-box','title'=>'with-border','body'=>'box-profile','icon'=>'fa fa-bullhorn box-icon']]) ?>

            <!-- /.nav-tabs-custom -->
        </div>
        <div class="col-md-5 wbox">
            <?= backend\widgets\box\BoxWidget::widget([
                'type'=>'pic','cate' => 14, 'pic' => true, 'title' => '新闻中心',
                'url' => Url::toRoute(['document/list', 'cate' => 14]),
                'css'=>['warper'=>'box-widget index-box','title'=>'with-border','body'=>'box-profile','icon'=>'fa fa-calendar-o box-icon'],
            ]) ?>

            <!-- /.nav-tabs-custom -->
        </div>
        <div class="col-md-3 wbox">
            <?= backend\widgets\box\BoxWidget::widget(['type'=>'products-list','cate' => 31, 'pic' => true, 'title' => '专题', 'url' => Url::toRoute(['document/list', 'cate' => 31])]) ?>

            <!-- About Me Box -->

            <!-- /.box -->
        </div>
        <!-- /.col -->



    </div>
    <div class="row">

        <div class="col-lg-3">
            <img class="img-responsive " src="/images/guanggao_x1.jpg" alt="Photo">

        </div><div class="col-lg-3">
            <img class="img-responsive " src="/images/guanggao_x2.jpg" alt="Photo">

        </div><div class="col-lg-3">
            <img class="img-responsive " src="/images/guanggao_x3.jpg" alt="Photo">

        </div><div class="col-lg-3">
            <img class="img-responsive " src="/images/guanggao_x4.jpg" alt="Photo">

        </div>
        </div><div class="row">
        <div class="col-md-12">
            <div class="box" style="background-image: url('/adminlte/dist/img/bg_header2.png');background-size:100%;" >
                <div class="box-header" style="padding: 3px 15px 0px">
                    <h3 class="box-title">相关链接</h3>
                </div>

                <div class="box-body no-padding">
                    <table class="table table-condensed">
                        <tbody>
                        <tr>
                            <td></td>
                            <td><a>交大官网</a></td>
                            <td><a>外语学院</a></td>
                            <td><a>工程管理学院	</a></td>
                            <td><a>外语学院		</a></td>

                        </tr>
                        <tr>
                            <td></td>
                            <td><a>交大官网</a></td>
                            <td><a>外语学院</a></td>
                            <td><a>工程管理学院	</a></td>
                            <td><a>外语学院		</a></td>

                        </tr>

                        </tbody></table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>

    </div>
</div>

<!-- End Presentation -->

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTAINER -->

<!-- END CONTAINER -->