<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\KodeAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\web\View;
use yii\widgets\Menu;
use yii\helpers\Url;
use mdm\admin\components\MenuHelper;
KodeAsset::register($this);

?>
<?php $this->beginPage() ?>

    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
        <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
    <?php $this->beginBody() ?>
    <!-- Start Page Loading -->
    <!--<div class="loading"><img src="img/loading.gif" alt="loading-img"></div>-->
    <!-- End Page Loading -->
    <!-- START TOP -->

    <div id="top" class="clearfix">

        <!-- Start App Logo -->
        <div class="applogo">
            <a href="<?=Url::home()?>" class="logo">实验室</a>
        </div>
        <!-- End App Logo -->

        <!-- Start Sidebar Show Hide Button -->
        <!--<a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>-->
        <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
        <!-- End Sidebar Show Hide Button -->

        <!-- Start Sidepanel Show-Hide Button -->
        <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a>
        <!-- End Sidepanel Show-Hide Button -->


        <?php
        $menuItemsCenter = [
            ['label' => '概况', 'url' => ['/room/index']],
            ['label' => '研究领域', 'url' => ['/site/about']],
            ['label' => '科研成果', 'url' => ['/site/contact']],
            ['label' => '研究生风采', 'url' => ['/useradmin/loader/create']],
            ['label' => '招生', 'url' => ['/help/index']],
            ['label' => '联系我们', 'url' => ['/site/contact']],
        ];

        echo Nav::widget([
            'options' => ['class' => 'topmenu navbar-nav center'],
            'encodeLabels' => false,
            'items' => $menuItemsCenter,
        ]);

        ?>
        <!-- Start Top Menu -->
        <!--<ul class="topmenu">
          <li><a href="#">概况</a></li>
          <li><a href="#">研究领域</a></li>
          <li><a href="#">科研成果</a></li>
          <li><a href="#">研究生风采</a></li>
          <li><a href="#">招生</a></li>
          <li><a href="#">联系我们</a></li>-->
        <!--<li class="dropdown">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle">学生工作 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Videos</a></li>
            <li><a href="#">Pictures</a></li>
            <li><a href="#">Blog Posts</a></li>
          </ul>
        </li>-->
        <!--</ul>-->
        <!-- End Top Menu -->



        <!-- Start Top Right -->
        <?php
        if (Yii::$app->user->isGuest) {
            $menuItems[] = ['label' => '注册', 'url' => ['/user/register'],'options' => ['class' => 'link '],];
            $menuItems[] = ['label' => '登录', 'url' => ['/user/login'],'options' => ['class' => 'link '],];
        } else {
            $menuItems[] =[
                'label'=>Yii::$app->user->identity->username,
                'items'=>[
                    ['label'=>'<i class="icon-screenshot"></i> 个人中心','url'=>['/useradmin/customer/index']],
                    ['label'=>'<i class="icon-screenshot"></i> 管理台','url'=>['/admin']],
                    ['label' => '注册', 'url' => ['user/registration/register']],
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
                ],
                'options' => ['class' => 'dropdown '],
            ];

        }
        echo Nav::widget([
            'options' => ['class' => 'top-right'],
            'encodeLabels' => false,
            'items' => $menuItems,
        ]);
        ?>

        <!-- End Top Right -->
        <!-- Start Searchbox -->

        <!-- End Searchbox -->
    </div>
    <!-- END TOP -->

    <div class="sidebar clearfix">

        <ul class="sidebar-panel nav">
            <li class="sidetitle">MAIN</li>
            <li><a href="<?= Url::toRoute('/admin')?>"><span class="icon color5"><i class="fa fa-home"></i></span>仪表盘<span class="label label-default"></span></a></li>
            <li><a href="mailbox.html"><span class="icon color6"><i class="fa fa-envelope-o"></i></span>信件消息<span class="label label-default">19</span></a></li>
            <li><a href="#"><span class="icon color7"><i class="fa fa-flask"></i></span>信息公告<span class="caret"></span></a>

            <?=\backend\widgets\category\CategoryWidget::widget() ?>
            </li>

            <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>学生<span class="caret"></span></a>

                <ul>
                    <li><a href="<?= Url::toRoute('news/index')?>"> 新 闻 </a></li>
                    <li><a href="layouts.html">Form Layouts</a></li>
                    <li><a href="text-editors.html">Text Editors</a></li>
                </ul>
            </li>
            <li><a href="calendar.html"><span class="icon color8"><i class="fa fa-calendar-o"></i></span>考勤管理<!--<span class="label label-danger">NEW</span>--></a></li>
            <li><a href="calendar.html"><span class="icon color8"><i class="fa fa-calendar-o"></i></span>工作安排</a></li>

        </ul>

        <ul class="sidebar-panel nav">
            <li class="sidetitle">MORE</li>
            <li><a href="grid.html"><span class="icon color15"><i class="fa fa-columns"></i></span>行业新闻</a></li>
            <li><a href="maps.html"><span class="icon color7"><i class="fa fa-map-marker"></i></span>考试系统</a></li>

        </ul>

        <div class="sidebar-plan">
            Pro Plan<a href="#" class="link">Upgrade</a>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                </div>
            </div>
            <span class="space">42 GB / 100 GB</span>
        </div>

    </div>

    <!-- START CONTENT -->
    <div class="content" >

        <!-- Start Page Header -->
        <?php if(isset($this->params['breadcrumbs'])){

            ?>
            <div class="page-header">
                <!--<h1 class="title">Blank Page</h1>-->

                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>

                <!-- Start Page Header Right Div -->
                <!--<div class="right">
                    <div class="btn-group" role="group" aria-label="...">
                        <a href="index.html" class="btn btn-light">Dashboard</a>
                        <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
                        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
                        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
                    </div>
                </div>-->
                <!-- End Page Header Right Div -->
            </div>
        <?php } ?>
        <!-- End Page Header -->

        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTAINER -->
        <div class="container-default">
            <?= $content ?>




        </div>
        <!-- END CONTAINER -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->


        <!-- Start Footer -->
        <!--<div class="row footer">
          <div class="col-md-6 text-left">
          Copyright © 2015  All rights reserved.
          </div>
          <div class="col-md-6 text-right">
            技术支持由 归锋工作室 提供
          </div>
        </div>-->
        <!-- End Footer -->


    </div>
    <!--<div class="footer-info slideanim slide">
      <div class="col-md-6 col-sm-6 access f1">
        <h3 class="access-h3">Access</h3>
        <p class="access-p">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation, sed do eiusmod ullamco laboris nisi ut enim ad minim aliquip ex ea commodo consequat.</p>
      </div>
      <div class="col-md-4 col-sm-4 f2">
        <h3 class="address">Address</h3>
        <address>
          <ul>
            <li>Parma Via Modena</li>
            <li>40019 Sant'Agata Bolognese</li>
            <li>BO, Italy</li>
            <li>Telephone : +1 (734) 123-4567</li>
            <li>Email : <a class="mail" href="mailto:mail@example.com">info(at)sseet.com</a></li>
          </ul>
        </address>
      </div>
      <div class="col-md-2 col-sm-2 f3" id="qlinks">
        <h3>Links</h3>
        <ul class="footer_list">
          <li><a href="#about" class="scroll">About</a></li>
          <li><a href="#programs" class="scroll">Programs</a></li>
          <li><a href="#services" class="scroll">Services</a></li>
          <li><a href="#edifice" class="scroll">Edifice</a></li>
          <li><a href="#project" class="scroll">Projects</a></li>
        </ul>
      </div>
      <div class="clearfix"></div>
    </div>-->
    <!-- End Content -->
    <footer id="footer">

        <div class="footer2">
            <div class="container">
                <div class="row">

                    <div class="col-md-5 ">
                        <div class="panel-body">
                            <p class="simplenav">
                                <a href="index.html">Home</a> |
                                <a href="about.html">About</a> |
                                <a href="courses.html">Courses</a> |
                                <a href="fees.html">Fees</a> |
                                <a href="portfolio.html">Portfolio</a> |
                                <a href="contact.html">Contact</a>
                            </p>
                        </div>
                    </div>

                    <div class="col-md-4 ">
                        <div class="panel-body">

                            <address >
                                <ul>
                                    <li>Parma Via Modena</li>
                                    <li>40019 Sant'Agata Bolognese</li>

                                    <li>Email : <a class="mail" href="mailto:mail@example.com">info(at)sseet.com</a></li>
                                </ul>
                            </address>

                        </div>
                    </div>
                    <div class="col-md-3 ">
                        <div class="social text-left">

                            <a href="#"><i class="fa fa-weibo"></i></a>

                            <a href="#"><i class="fa fa-github"></i></a>
                        </div>
                        <br>
                        <p class="text-left">
                            技术支持由 归锋工作室 提供
                        </p>
                    </div>
                </div>
                <!-- /row of panels -->
            </div>
        </div>
    </footer>
    <!-- START SIDEPANEL -->
    <div role="tabpanel" class="sidepanel">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">TODAY</a></li>
            <li role="presentation"><a href="#tasks" aria-controls="tasks" role="tab" data-toggle="tab">TASKS</a></li>
            <li role="presentation"><a href="#chat" aria-controls="chat" role="tab" data-toggle="tab">CHAT</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <!-- Start Today -->
            <div role="tabpanel" class="tab-pane active" id="today">

                <div class="sidepanel-m-title">
                    Today
                    <span class="left-icon"><a href="#"><i class="fa fa-refresh"></i></a></span>
                    <span class="right-icon"><a href="#"><i class="fa fa-file-o"></i></a></span>
                </div>

                <div class="gn-title">NEW</div>

                <ul class="list-w-title">
                    <li>
                        <a href="#">
                            <span class="label label-danger">ORDER</span>
                            <span class="date">9 hours ago</span>
                            <h4>New Jacket 2.0</h4>
                            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-success">COMMENT</span>
                            <span class="date">14 hours ago</span>
                            <h4>Bill Jackson</h4>
                            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-info">MEETING</span>
                            <span class="date">at 2:30 PM</span>
                            <h4>Developer Team</h4>
                            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="label label-warning">EVENT</span>
                            <span class="date">3 days left</span>
                            <h4>Birthday Party</h4>
                            Etiam auctor porta augue sit amet facilisis. Sed libero nisi, scelerisque.
                        </a>
                    </li>
                </ul>

            </div>
            <!-- End Today -->

            <!-- Start Tasks -->
            <div role="tabpanel" class="tab-pane" id="tasks">

                <div class="sidepanel-m-title">
                    To-do List
                    <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
                    <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
                </div>

                <div class="gn-title">TODAY</div>

                <ul class="todo-list">
                    <li class="checkbox checkbox-primary">
                        <input id="checkboxside1" type="checkbox"><label for="checkboxside1">Add new products</label>
                    </li>

                    <li class="checkbox checkbox-primary">
                        <input id="checkboxside2" type="checkbox"><label for="checkboxside2"><b>May 12, 6:30 pm</b> Meeting with Team</label>
                    </li>

                    <li class="checkbox checkbox-warning">
                        <input id="checkboxside3" type="checkbox"><label for="checkboxside3">Design Facebook page</label>
                    </li>

                    <li class="checkbox checkbox-info">
                        <input id="checkboxside4" type="checkbox"><label for="checkboxside4">Send Invoice to customers</label>
                    </li>

                    <li class="checkbox checkbox-danger">
                        <input id="checkboxside5" type="checkbox"><label for="checkboxside5">Meeting with developer team</label>
                    </li>
                </ul>

                <div class="gn-title">TOMORROW</div>
                <ul class="todo-list">
                    <li class="checkbox checkbox-warning">
                        <input id="checkboxside6" type="checkbox"><label for="checkboxside6">Redesign our company blog</label>
                    </li>

                    <li class="checkbox checkbox-success">
                        <input id="checkboxside7" type="checkbox"><label for="checkboxside7">Finish client work</label>
                    </li>

                    <li class="checkbox checkbox-info">
                        <input id="checkboxside8" type="checkbox"><label for="checkboxside8">Call Johnny from Developer Team</label>
                    </li>

                </ul>
            </div>
            <!-- End Tasks -->

            <!-- Start Chat -->
            <div role="tabpanel" class="tab-pane" id="chat">

                <div class="sidepanel-m-title">
                    Friend List
                    <span class="left-icon"><a href="#"><i class="fa fa-pencil"></i></a></span>
                    <span class="right-icon"><a href="#"><i class="fa fa-trash"></i></a></span>
                </div>

                <div class="gn-title">ONLINE MEMBERS (3)</div>
                <ul class="group">
                    <li class="member"><a href="#"><img src="img/profileimg.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status online"></span></li>
                    <li class="member"><a href="#"><img src="img/profileimg2.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status busy"></span></li>
                    <li class="member"><a href="#"><img src="img/profileimg3.png" alt="img"><b>Fred Stonefield</b>New York</a><span class="status away"></span></li>
                    <li class="member"><a href="#"><img src="img/profileimg4.png" alt="img"><b>Chris M. Johnson</b>California</a><span class="status online"></span></li>
                </ul>

                <div class="gn-title">OFFLINE MEMBERS (8)</div>
                <ul class="group">
                    <li class="member"><a href="#"><img src="img/profileimg5.png" alt="img"><b>Allice Mingham</b>Los Angeles</a><span class="status offline"></span></li>
                    <li class="member"><a href="#"><img src="img/profileimg6.png" alt="img"><b>James Throwing</b>Las Vegas</a><span class="status offline"></span></li>
                </ul>

                <form class="search">
                    <input type="text" class="form-control" placeholder="Search a Friend...">
                </form>
            </div>
            <!-- End Chat -->

        </div>

    </div>
    <!-- END SIDEPANEL -->



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>