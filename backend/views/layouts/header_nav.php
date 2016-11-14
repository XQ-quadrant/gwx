<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use backend\widgets\category\CategoryWidget;
/* @var $this \yii\web\View */
/* @var $content string */

?>

<header class="main-header">


    <nav class="navbar navbar-static-top site-index" role="navigation">
        <div class="container" style="padding-right: 15px;padding-left: 15px;">
        <div class="navbar-header">

            <a href="<?=Url::home()?>" class="navbar-brand" >国际教育学院</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
            </button>
        </div>

        <div class="collapse navbar-collapse pull-left" id="navbar-collapse" style="margin-left: -17px;">
        <?php
        /*if(Yii::$app->user->isGuest) {
            $menuItemsCenter = [
                ['label' => '登录', 'url' => ['/site/login']],
                ['label' => '注册', 'url' => ['/site/registe']],

            ];
        }else{*/


        $menu = new CategoryWidget(['precate_name'=>'document']);
        $menuItemsCenter = $menu->getCate();


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
                <form class="navbar-form navbar-right" role="search" style="float: right;display: inline-block">
                    <div class="form-group">

                        <input type="text" class="form-control" id="navbar-search-input" placeholder="搜索">
                    </div>
                </form>
                <?php if(Yii::$app->user->isGuest) { ?>

                   <!-- <li class="">
                        <a href="/user/login" >
                            登录
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="/user/register" >
                            注册
                        </a>
                    </li>-->
                <?php }else{

                    ?>

                <!-- Tasks: style can be found in dropdown.less -->

                <!-- User Account: style can be found in dropdown.less -->


                <?php } ?>
                <!-- User Account: style can be found in dropdown.less -->

            </ul>
        </div>
            </div>
    </nav>

</header>
