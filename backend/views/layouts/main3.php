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
use yii\helpers\Url;
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
            <a href="index.html" class="logo">实验室</a>
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
                    ['label'=>'<i class="icon-screenshot"></i> 个人中心','url'=>['useradmin/customer/index']],
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
        <!--<ul class="top-right">

        <li class="dropdown link">
          <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="img/profileimg.png" alt="img"><b>Jonathan Doe</b><span class="caret"></span></a>
            <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
              <li role="presentation" class="dropdown-header">Profile</li>
              <li><a href="#"><i class="fa falist fa-inbox"></i>Inbox<span class="badge label-danger">4</span></a></li>
              <li><a href="#"><i class="fa falist fa-file-o"></i>Files</a></li>
              <li><a href="#"><i class="fa falist fa-wrench"></i>Settings</a></li>
              <li class="divider"></li>
              <li><a href="#"><i class="fa falist fa-lock"></i> Lockscreen</a></li>
              <li><a href="#"><i class="fa falist fa-power-off"></i> Logout</a></li>
            </ul>
        </li>
        </ul>-->
        <!-- End Top Right -->
        <!-- Start Searchbox -->

        <!-- End Searchbox -->
    </div>
    <!-- END TOP -->



    <!-- START CONTENT -->
    <div class="content" style="margin-left: 0px;">

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
                <div class="right">


                        <?php if(isset($this->params['search'])){
                            echo $this->params['search'];
                        }  ?>

                </div>
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

    </div>

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