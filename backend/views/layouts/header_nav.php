<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use backend\widgets\category\CategoryWidget;
/* @var $this \yii\web\View */
/* @var $content string */

?>

<header class="main-header">


    <nav class="navbar navbar-static-top" role="navigation">
        <div class="container" style="padding-right: 15px;padding-left: 15px;">
        <div class="navbar-header">

            <a href="<?=Url::home()?>" class="navbar-brand" >信号与信息处理实验室</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <?php
        /*if(Yii::$app->user->isGuest) {
            $menuItemsCenter = [
                ['label' => '登录', 'url' => ['/site/login']],
                ['label' => '注册', 'url' => ['/site/registe']],

            ];
        }else{*/


        $menu = new CategoryWidget(['precate_name'=>'document']);
        $menuItemsCenter = $menu->getCate();
        //var_dump($menuItemsCenter);die();
           /* $menuItemsCenter = [
                ['label' => '首页','url' => ['/site/index']],
                ['label' => '概况', 'url' => ['/frontend/info']],
                //['label' => '研究领域', 'url' => ['/site/about']],
                ['label' => '科研成果', 'url' => ['/achievement']],
                ['label' => '研究生风采', 'url' => ['/useradmin/loader/create']],
                ['label' => '招生', 'url' => ['/help/index']],
                ['label' => '联系我们', 'url' => ['/site/contact']],
            ];
        var_dump($menuItemsCenter);die();*/
        //}

        echo Nav::widget([
            'options' => ['class' => 'nav navbar-nav'],
            'encodeLabels' => false,
            'items' => $menuItemsCenter,
        ]);

        ?>
            </div>
        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">

                <!-- Messages: style can be found in dropdown.less-->
                <?php if(Yii::$app->user->isGuest) { ?>
                    <li class="">
                        <a href="/user/login" >
                            登录
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="/user/register" >
                            注册
                        </a>
                    </li>
                <?php }else{ ?>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning">10</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header">You have 10 notifications</li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-warning text-yellow"></i> Very long description here that may
                                        not fit into the page and may cause design problems
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-users text-red"></i> 5 new members joined
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user text-red"></i> You changed your username
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="footer"><a href="#">View all</a></li>
                    </ul>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->

                <!-- User Account: style can be found in dropdown.less -->

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= Yii::$app->user->identity->profile->gravatar_email ?>" class="user-image" alt="User Image"/>
                        <span class="hidden-xs"><?= Yii::$app->user->identity->username ?></span>
                    </a>
                    <ul class="dropdown-menu">

                        <!-- User image -->


                        <li >
                            <div class="box box-widget ">
                                <!-- Add the bg color to the header using any of the bg-* classes -->

                                <div class="box-footer no-padding">
                                    <ul class="nav nav-stacked">
                                        <li><a href="/user/<?= Yii::$app->user->identity->id ?>">主页 <span class="pull-right badge bg-blue">31</span></a></li>
                                        <li><a href="/rest/chat">私信 <span class="pull-right badge bg-aqua">5</span></a></li>
                                        <li><a href="#">好友 <span class="pull-right badge bg-aqua">5</span></a></li>
                                        <li><?= Html::a(
                                                '退出',
                                                ['/site/logout'],
                                                ['data-method' => 'post', ]
                                            ) ?></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <!-- Menu Body -->

                        <!-- Menu Footer-->

                    </ul>
                </li>
                <?php } ?>
                <!-- User Account: style can be found in dropdown.less -->

            </ul>
        </div>
            </div>
    </nav>

</header>
