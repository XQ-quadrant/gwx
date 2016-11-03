<?php
use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this \yii\web\View */
/* @var $content string */


if (Yii::$app->controller->action->id === 'login') { 
/**
 * Do not use this code in your template. Remove it. 
 * Instead, use the code  $this->layout = '//main-login'; in your controller.
 */
    echo $this->render(
        'main-login',
        ['content' => $content]
    );
} else {

    if (class_exists('backend\assets\AppAsset')) {
        backend\assets\AppAsset::register($this);
    } else {
        app\assets\AppAsset::register($this);
    }

    //dmstr\web\AdminLteAsset::register($this);
    backend\assets\AdminLteAsset::register($this);

    $directoryAsset = Yii::$app->assetManager->getPublishedUrl('@app/web/adminlte/dist');
    ?>
    <?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta name="renderer" content="webkit">
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-pblue-light layout-top-nav">
    <?php $this->beginBody() ?>
    <div class="wrapper" >
        <div class="breadcrumb_banner" style="">
            <div id="">
                <div class="container">
                    <div class="row" style="    margin-bottom: 1em;">

                        <a class="col-md-6 normal" href="<?= Yii::$app->homeUrl?>" style="display: inline-block;">
                            <img src="/images/top.gif"  style="width: 100%;float: left;padding: 0 1em;"/>

                        </a>
                        <div class="col-md-6 normal">
                            <div class="row">
                                <div class="col-md-4 pull-right normal">
                                    <!--<form class="navbar-form navbar-right" role="search" style="float: right;display: inline-block">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="navbar-search-input" placeholder="搜索">
                                        </div>
                                    </form>-->
                                    <a class="btn btn-block  btn-flat navbar-right" style="color: #fff; margin:0.6em 0.45em 0 0;float: right;display: inline-block;background-color: rgba(255, 255, 255, 0);">在线申请 Apply Now
                                    </a>
</div><div class="col-md-3 pull-right normal">
                                    <a href="#" style="
                                color: #9cdaea;
                                float: right;
                                margin:0.9em 0.45em 0 0;
                                padding-right: 1em;
                                font-size: 1.2em;
                                border-right: 1px solid #ccc"> English</a>
                                </div>

                            </div>
                            <!--<div class="row">
                                <div class="col-md-1 pull-right"></div>
                                <div class="col-md-5 pull-right">
                                <a class="btn btn-block btn-social btn-twitter">
                                     在线申请（Apply Now）
                                </a>
                                </div>


                            </div>-->


                        </div>
                    </div>


                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <?= $this->render(
            'header_nav.php',
            ['directoryAsset' => $directoryAsset]
        ) ?>


        <?= $this->render(
            'content.php',
            ['content' => $content, 'directoryAsset' => $directoryAsset]
        ) ?>


    </div>

    <?php $this->endBody() ?>
    </body>
    </html>
    <?php $this->endPage() ?>
<?php } ?>
