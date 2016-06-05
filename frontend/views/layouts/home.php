<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\web\View;
use yii\helpers\Url;
use frontend\assets\HomeAsset;

HomeAsset::register($this);
$this->registerJs("addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } ",View::POS_HEAD);

//$this->registerCssFile('@web/media/css/login.css',['depends'=>['backend\assets\MetronicAsset']]);
//$this->registerJsFile('@web/media/js/jquery.easydropdown.js',['depends'=>['frontend\assets\HomeAsset']],View::POS_HEAD);
$this->registerJsFile('@web/home/js/move-top.js',['depends'=>['frontend\assets\HomeAsset']],View::POS_HEAD);
$this->registerJsFile('@web/home/js/easing.js',['depends'=>['frontend\assets\HomeAsset']],View::POS_HEAD);

$this->registerJs("
jQuery(document).ready(function($) {
				$(\".scroll\").click(function(event){
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});

",View::POS_HEAD);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body >
<?php $this->beginBody() ?>
<?php
NavBar::begin([
    'brandLabel' => '<img src="/gbii/frontend/web/logo2_s_w280.png" alt="logo" style="height: 37px;margin: -8px 0px"/>',//Yii::t('common','宿宿'),//'My Company',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'home_navbar-inverse navbar-inverse navbar-fixed-top ',
    ],
]);
$menuItemsCenter = [
    ['label' => '租房', 'url' => ['/room/index']],
    ['label' => '关于', 'url' => ['/site/about']],
    ['label' => '联系我们', 'url' => ['/site/contact']],
    ['label' => '成为房东', 'url' => ['/useradmin/loader/create']],
    ['label' => '帮助', 'url' => ['/help/index']],
];
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
} else {
    $menuItems[] =[
        'label'=>Yii::$app->user->identity->username,
        'items'=>[
            ['label'=>'<i class="icon-screenshot"></i> 个人中心','url'=>['useradmin/customer/index']],
            /*                ['label'=>'<i class="icon-signout"></i> 退出','url'=>'/site/logout','linkOptions'=>['data-method'=>'post']],*/
            ['label'=>'<li><a><i class="icon-signout"></i>'
                . Html::beginForm(['/site/logout'], 'post',['style'=>'display:inline'])
                . Html::input(
                    'submit',
                    '','退出 ',
                    ['class' => '','style'=>'border:none;background:none;cursor:pointer;']
                )
                . Html::endForm()
                .'</a></li>']
        ]
    ];

}
echo Nav::widget([
    'options' => ['class' => 'navbar-nav center'],
    'encodeLabels' => false,
    'items' => $menuItemsCenter,
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav navbar-right'],
    'encodeLabels' => false,
    'items' => $menuItems,
]);
NavBar::end();
?>
<?php if(isset($this->params['banner'])){ if($this->params['banner']=='index'){ ?>

<div class="banner">
    <div class="banner-search" >
        <h3 style="text-align: center;color: rgba(11, 107, 125, 0.85);padding-bottom: 10px">寻找你想要的</h3>
        <div class="banner-bottom">
            <form role="form" action="<?= Url::to('@web/room/index') ?>" method="get">
                <div class="bnr-one">
                    <div class="bnr-left">
                        <p>地段</p>
                    </div>
                    <div class="bnr-right">
                        <input class="date hasDatepicker" id="datepicker" name="RoomSearch[address]" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!--<div class="bnr-one">
                    <div class="bnr-left">
                        <p>面积</p>
                    </div>
                    <div class="bnr-right">
                        <input class="date hasDatepicker" id="datepicker1" name="RoomSearch[area]" type="number" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
                    </div>
                    <div class="clearfix"></div>
                </div>-->
                <div class="bnr-one">
                    <div class="bnr-left">
                        <p>价格</p>
                    </div>
                    <div class="bnr-right">
                        <select name="RoomSearch[price]" >
                            <option value="">价格</option>
                            <option value="200-300">200-300</option>
                            <option value="300-500">300-500</option>
                            <option value="500-700">500-700</option>
                            <option value="700-1000">700-1000</option>
                            <option value="1000-1500">1000-1500</option>
                            <option value=">1500-10000">1500-</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="bnr-one">
                    <div class="bnr-left">
                        <p>户型</p>
                    </div>
                    <div class="bnr-right">
                        <select name="RoomSearch[atrribute]" >
                            <option value=""></option>
                            <option value="套一">套一/单间</option>
                            <option value="套二">套二</option>
                            <option value="套三">套三</option>
                            <option value="套四">套四</option>
                            <option value="套五">套五</option>
                        </select>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="bnr-btn">

                    <input type="submit" value=" 搜 索 ">

                </div>
            </form>
        </div>
    </div>
</div>

<?php }elseif($this->params['banner']=='search'){ ?>
<div style="background: url(<?= Url::to('@web/home/images/8.jpg') ?>) no-repeat 0px 0px;background-size: cover;padding-top: 40px">
    <div class="container "  >

        <form class="search-form domain-search search-block" role="form" action="<?= Url::to('@web/room/index') ?>" method="get">
            <div class="row "  >
                <div class="col-md-12">
                    <div class="three-fifth domain_row column first">
                        <input type="text" class="text" placeholder="周边小区、街区" name="RoomSearch[address]" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = '周边小区、街区';}">
                    </div>
                    <div class="one-fifth column">
											<span class="selection-box"><select class="domains valid" name="RoomSearch[price]" >
                                                    <option value="">价格</option>
                                                    <option value="200-300">200-300</option>
                                                    <option value="300-500">300-500</option>
                                                    <option value="500-700">500-700</option>
                                                    <option value="700-1000">700-1000</option>
                                                    <option value="1000-1500">1000-1500</option>
                                                    <option value=">1500-100000">1500-</option>
                                                </select></span>
                    </div>
                    <div class="one-fifth column">
											<span class="selection-box"><select class="domains valid" name="RoomSearch[atrribute]">
                                                    <option value="">户型 </option>
                                                    <option value="套一">套一/单间</option>
                                                    <option value="套二">套二</option>
                                                    <option value="套三">套三</option>
                                                    <option value="套四">套四</option>
                                                    <option value="套五">套五</option>
                                                </select></span>
                    </div>
                    <div class="one-fifth column">
											<span class="selection-box"><select class="domains valid" name="">
                                                    <option>月租</option>
                                                    <option>日租</option>
                                                    <option>周租</option>
                                                </select></span>
                    </div>
                </div>
            </div>
            <div class="row"  >
                <div class="col-md-12">
                    <div class="one-fifth column">
                        <label class="checkbox">
                            <input name="" value="独卫"  type="checkbox">
                            <i> </i>独卫</label>
                    </div>
                    <div class="one-fifth column">
                        <label class="checkbox">
                            <input name="" value="网络"  type="checkbox">
                            <i> </i> 网络</label>
                    </div>
                    <div class="one-fifth column">
                        <label class="checkbox">
                            <input  name="" value="空调"  type="checkbox">
                            <i> </i> 空调</label>
                    </div>
                    <div class="one-fifth column">
                        <label class="checkbox">
                            <input  name="" value="热水"  type="checkbox">
                            <i> </i> 热水</label>
                    </div>
                    <div class="one-fifth column" style="float: right;margin-right:  1.5%;">
                        <input type="submit" value=" 搜 索 ">
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </form>

    </div>
    </div>
<?php
}}else{?>
<div style="background: url(<?php echo isset($this->params['banner_pic'] )?$this->params['banner_pic'] : Url::to('@web/home/images/8.jpg'); ?>) no-repeat 0px -150px;background-size: cover;">
    <div id="breadcrumb_wrapper">
        <div class="container">

            <h6>&nbsp</h6>
            <h3><?= Html::encode($this->title) ?></h3>

            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php
} ?>
<!--<div class="clearfix" style="margin-top: 50px"></div>-->
<!-- Header Ends Here -->
<div class="container">

    <?= $content ?>
</div>

<!-- /#Testimonials -->
<!-- #Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="title">宿宿</span>

                <p>成都归锋科技有限公司
                    <!--<span class="tweetTime">1 Hour Ago</span></p>-->
                <p>蜀ICP备15024594号<!--<span class="tweetTime">10 Minutes Ago</span>--></p>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-4">
                <ul class="footerMenu">
                    <li class="title"><a href="#">问题反馈</a></li>
                    <li><a href="#">微信</a></li>
                    <li><a href="#">微博</a></li>
                    <li><a href="#">用户讨论群：79457823</a></li>

                </ul>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-4">
                <ul class="footerMenu">
                    <!-- <li class="title">Services</li>-->
                    <li><a href="/Sdorms/index.php/Home/Article/detail/mid/2/id/391">关于</a></li>
                    <li><a href="#">加入我们</a></li>
                    <li><a href="/Sdorms/index.php/Home/Article/detail/mid/2/id/393">房东协议</a></li>
                    <li><a href="#">隐私条款</a></li>

                </ul>
            </div>
            <div class="col-md-2 col-xs-6 col-sm-4">
                <ul class="footerAddress">
                    <li class="title">联系我们</li>
                    <li><strong>客服电话:</strong></li>
                    <li>18482187430</li>
                    <li>18482187430</li>
                    <li><strong>QQ： </strong>584486049</li>

                </ul>
            </div>
        </div>
        <hr>
    </div>

</footer>
<!-- /#Footer -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
