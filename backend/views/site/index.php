<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */

$this->title = Yii::t('common','School of International Education');
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
    /*margin-top:2px;*/
}
.normal{
position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
');

?>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>

    </ol>
    <div class="carousel-inner slider-items">
        <?php foreach($pic as $k=>$v){
            if($k==0){
                ?>
                <div class="item active">
                    <a href="<?= $v->url?>">
                        <img src="<?= $v->savepath?>" alt="<?= $v->content?>">
                    </a>
                </div>
            <?php   }else{ ?>
                <div class="item">
                    <a href="<?= $v->url?>">
                        <img src="<?= $v->savepath?>" alt="<?= $v->content?>">
                    </a>
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

<!-- Start Presentation -->
<div class="container" style="padding-left: 0px;padding-right: 0px">
    <div class="row">
        <div class="col-md-12" style="margin-top: 0px">
            <div class="box  box-solid" style="box-shadow: none;background: none">

                <!-- /.box-header -->
                <div class="box-body no-padding">

                </div>

            </div>

        </div>

    </div>
<hr style="    border-top:1px solid #D9E0E6;margin-top: 0px;margin-bottom: 10px;">
    <div class="row">
        <div class="col-md-4" style="">
            <?= backend\widgets\box\BoxWidget::widget(['cate' => 32, 'title' => Yii::t('common','Notices'), 'liNum' => 7,
                'url' => Url::toRoute(['document/list', 'cate' => 32]),
                'css'=>['warper'=>'box-widget index-box blue-border','title'=>'index-box-title','header'=>'with-border index-box-header','icon'=>'index-box-icon bicon-laba','body'=>'box-profile',]]) ?>

            <!-- /.nav-tabs-custom -->
        </div>
        <div class="col-md-5 wbox">
            <?= backend\widgets\box\BoxWidget::widget([
                'type'=>'pic','cate' => 14, 'pic' => true, 'title' => Yii::t('common','News'),
                'url' => Url::toRoute(['document/list', 'cate' => 14]),
                'css'=>['warper'=>'box-widget index-box ','header'=>'with-border index-box-header','title'=>'index-box-title','icon'=>'index-box-icon bicon-news','body'=>'box-profile blue-border',],
            ]) ?>

            <!-- /.nav-tabs-custom -->
        </div>
        <div class="col-md-3 wbox">
            <?= backend\widgets\box\BoxWidget::widget(['type'=>'products-list','cate' => 31, 'pic' => true,
                'title' => '专题',
                'url' => Url::toRoute(['document/list', 'cate' => 31]),
                'css'=>['warper'=>'box-widget index-box','header'=>'with-border index-box-header bgimg-title3','title'=>'index-box-title','body'=>'box-profile blue-border','icon'=>'index-box-icon bicon-news'],
            ]) ?>

            <!-- About Me Box -->

            <!-- /.box -->
        </div>
        <!-- /.col -->



    </div>
    <div class="row">

<?php foreach($pic_bottom as $v) { ?>
        <div class="col-lg-3">
            <a href="<?= $v->url ?>">
            <img class="img-responsive bottom-img" src="<?= $v->savepath ?>" alt="Photo"></a>
        </div>
<?php } ?>
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box" style="background-image: url('/adminlte/dist/img/bg_header2.png');background-size:100%;" >
                <div class="box-header" >
                    <h3 class="box-title">相关链接</h3>
                </div>

                <div class="box-body no-padding index-link">
                    <div class="row normal">

                                <?php for($i=0; $i<count($link_bottom); $i++){ ?>
                        <div class="col-sm-3 normal">
                            <address>

                                <a href="http://www.swjtu.edu.cn/"><?= $link_bottom[$i]->name?></a><br>

                            </address>
                        </div>
                                <?php } ?>

                        <!--
                        <div class="col-sm-4 normal">

                            <address>
                                <a href="http://www.yanghua.net/">扬华素质网</a><br>
                                <a href="http://sfl.swjtu.edu.cn/">外语学院</a>
                            </address>
                        </div>

                        <div class="col-sm-4 normal">
                            <address>
                            <a href="http://civil.swjtu.edu.cn/civil/index.html">土木工程学院</a><br>
                            <a href="http://civil.swjtu.edu.cn/civil/index.html">土木工程学院</a><br>
                                </address>
                        </div>
                         -->
                    </div>

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