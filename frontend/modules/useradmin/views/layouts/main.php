<?php

/* @var $this \yii\web\View */
/* @var $content string */

use frontend\assets\MetronicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\web\View;
use yii\helpers\Url;
MetronicAsset::register($this);
$this->registerJs("jQuery(document).ready(function() {

		   App.init();

		});",View::POS_END);
//$this->registerJs(" var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();",View::POS_END);
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
<body class="page-header-fixed">
<?php $this->beginBody() ?>
<!-- BEGIN HEADER -->

<div class="header navbar navbar-inverse navbar-fixed-top">

    <!-- BEGIN TOP NAVIGATION BAR -->

    <div class="navbar-inner">

        <div class="container-fluid">

            <!-- BEGIN LOGO -->

            <a class="brand" href="<?= Url::to('@web/') ?>">

                <img src="/gbii/frontend/web/logo2_w280.png" alt="logo" style=""/>

            </a>

            <!-- END LOGO -->
            <div class="navbar hor-menu hidden-phone hidden-tablet" >

                <div class="navbar-inner" style="background-color: rgba(220, 232, 229, 0.22) !important;">

                    <ul class="nav" style="color: #0B6B7D">


                        <li class="">

                            <a href="<?= Url::to('@web/room/index') ?>">

                                租房

                                <span class="selected"></span>

                            </a>

                        </li>

                        <li>

                            <a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;">

                                关于

                                <span class="arrow" ></span>

                            </a>

                            <ul class="dropdown-menu">

                                <li><a href="<?= Url::to('@web/site/about') ?>">关于我们</a></li>

                                <li><a href="<?= Url::to('@web/site/contact') ?>">联系我们</a></li>

                            </ul>

                            <b class="caret-out"></b>

                        </li>

                        <li>

                            <a href="<?= Url::to('@web/help/index') ?>">帮助</a>

                        </li>


                    </ul>

                </div>

            </div>
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->

            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">

                <img src="media/image/menu-toggler.png" alt="" />

            </a>

            <!-- END RESPONSIVE MENU TOGGLER -->

            <!-- BEGIN TOP NAVIGATION MENU -->

            <ul class="nav pull-right">



                <!-- BEGIN INBOX DROPDOWN -->

                <li class="dropdown" id="header_inbox_bar">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <i class="icon-envelope"></i>

                        <span class="badge">1</span>

                    </a>

                    <!--<ul class="dropdown-menu extended inbox">

                        <li>

                            <p>You have 1 new messages</p>

                        </li>


                        <li>

                            <a href="inbox.html?a=view">

                                <span class="photo"><img src="media/image/avatar1.jpg" alt="" /></span>

								<span class="subject">

								<span class="from">Bob Nilson</span>

								<span class="time">2 hrs</span>

								</span>

								<span class="message">

								Vivamus sed nibh auctor nibh congue nibh. auctor nibh

								auctor nibh...

								</span>

                            </a>

                        </li>

                        <li class="external">

                            <a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>

                        </li>

                    </ul>-->

                </li>

                <!-- END INBOX DROPDOWN -->



                <!-- BEGIN USER LOGIN DROPDOWN -->

                <li class="dropdown user">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <img alt="" src="media/image/avatar1_small.jpg" />

                        <span class="username" user-id="<?= Yii::$app->user->identity->id ?>"><?= Yii::$app->user->identity->username ?></span>

                        <i class="icon-angle-down"></i>

                    </a>

                    <ul class="dropdown-menu">

                        <li><a href="extra_profile.html"><i class="icon-user"></i> 个人中心</a></li>

                        <li><a href="page_calendar.html"><i class="icon-calendar"></i> 房东主页</a></li>


                        <li class="divider"></li>
                        <li>
                                <?php echo '<li><a><i class="icon-signout"></i>'
                                    . Html::beginForm(['/site/logout'], 'post',['style'=>'display:inline'])
                                    . Html::input(
                                        'submit',
                                        '','退出 ',
                                        ['class' => '','style'=>'border:none;background:none;cursor:pointer;']
                                    )
                                    . Html::endForm()
                                    .'</a></li>';

                                ?>
                                </a></li>
<!--                        <li><a href="<?php /*Url::to(['site/logout']) */?>" data-method="post"><i class="icon-key"></i> 退出</a></li>
-->
                    </ul>

                </li>

                <!-- END USER LOGIN DROPDOWN -->

            </ul>

            <!-- END TOP NAVIGATION MENU -->

        </div>

    </div>

    <!-- END TOP NAVIGATION BAR -->

</div>

<!-- END HEADER -->

<!-- BEGIN CONTAINER -->

<div class="page-container row-fluid">

    <!-- BEGIN SIDEBAR -->

    <div class="page-sidebar nav-collapse collapse">

        <!-- BEGIN SIDEBAR MENU -->

        <ul class="page-sidebar-menu">

            <li>

                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

                <div class="sidebar-toggler hidden-phone"></div>

                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->

            </li>

            <li>

                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->

                <form class="sidebar-search">

                    <div class="input-box">

                        <a href="javascript:;" class="remove"></a>

                        <input type="text" placeholder="查询..." />

                        <input type="button" class="submit" value=" " />

                    </div>

                </form>

                <!-- END RESPONSIVE QUICK SEARCH FORM -->

            </li>

            <li class="start ">

                <a href="<?= Url::to('@web/room/index') ?>">

                    <i class="icon-search"></i>

                    <span class="title">搜索房屋</span>

                </a>

            </li>

            <li >

                <a href="javascript:;">

                    <i class=" icon-user"></i>

                    <span class="title">我的主页</span>

                    <span class="selected"></span>

                    <span class="arrow open"></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="<?= Url::to('@web/useradmin/customer/index') ?>">

                            个人中心</a>

                    </li>
                    <li >

                        <a href="<?= Url::to('@web/useradmin/customer/update') ?>">

                            修改信息</a>

                    </li>


                    <li >

                        <a href="layout_sidebar_closed.html">

                            设置</a>

                    </li>





                </ul>

            </li>

            <li class="">

                <a href="javascript:;">

                    <i class="icon-home"></i>

                    <span class="title">我的住宿</span>

                    <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="ui_general.html">

                            当前住宿</a>

                    </li>

                    <li >

                        <a href="ui_buttons.html">

                            预订</a>

                    </li>

                    <li >

                        <a href="ui_modals.html">

                            住房帮助</a>

                    </li>


                </ul>

            </li>

            <li class="">

                <a href="javascript:;">

                    <i class="icon-bar-chart"></i>

                    <span class="title">房东平台</span>

                    <span class="arrow "></span>

                </a>

                <ul class="sub-menu">

                    <li >

                        <a href="<?= Url::to('@web/useradmin/business/index') ?>">

                            我的房源</a>

                    </li>
                    <li >

                        <a href="<?= Url::to(['/useradmin/loader/view','id'=>Yii::$app->user->identity->id]) ?>" target=_blank>

                            房东主页</a>

                    </li>

                    <li >

                        <a href="form_samples.html">

                            客户</a>

                    </li>

                    <li >

                        <a href="form_component.html">

                            日程计划</a>

                    </li>

                    <li >

                        <a href="<?= Url::to('@web/useradmin/loader/index') ?>">

                            设置</a>

                    </li>


                </ul>

            </li>


        </ul>

        <!-- END SIDEBAR MENU -->

    </div>

    <!-- END SIDEBAR -->

    <!-- BEGIN PAGE -->

    <div class="page-content">

        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <div id="portlet-config" class="modal hide">

            <div class="modal-header">

                <button data-dismiss="modal" class="close" type="button"></button>

                <h3>portlet Settings</h3>

            </div>

            <div class="modal-body">

                <p>Here will be a configuration form</p>

            </div>

        </div>

        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

        <!-- BEGIN PAGE CONTAINER-->

        <div class="container-fluid">

            <!-- BEGIN PAGE HEADER-->

            <div class="row-fluid">

                <div class="span12">



                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->

                    <h3 class="page-title">

                        <small></small>

                    </h3>
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                   <!-- <ul class="breadcrumb">

                        <li>

                            <i class="icon-home"></i>

                            <a href="index.html">Home</a>

                            <i class="icon-angle-right"></i>

                        </li>

                        <li>

                            <a href="#">Layouts</a>

                            <i class="icon-angle-right"></i>

                        </li>

                        <li><a href="#">Blank Page</a></li>

                    </ul>-->

                    <!-- END PAGE TITLE & BREADCRUMB-->

                </div>

            </div>

            <!-- END PAGE HEADER-->

            <!-- BEGIN PAGE CONTENT-->

            <div class="row-fluid">

                <div class="span12">
                    <?= $content ?>



                </div>

            </div>

            <!-- END PAGE CONTENT-->

        </div>

        <!-- END PAGE CONTAINER-->

    </div>

    <!-- END PAGE -->

</div>

<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->

<div class="footer">

    <div class="footer-inner">

        2013 &copy; Metronic by keenthemes.

    </div>

    <div class="footer-tools">

			<span class="go-top">

			<i class="icon-angle-up"></i>

			</span>

    </div>

</div>

<!-- END FOOTER -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
