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
    <div class="wrapper">
        <div class="breadcrumb_banner" style="">
            <div id="">
                <div class="container">
                    <div class="row">
                        <a class="col-md-7 normal" href="<?= Yii::$app->homeUrl ?>" style="display: inline-block;">
                            <img src="/images/top.jpg" style="    width: 100%;float: left;padding: 0 1em;"/>
                        </a>
                        <div class="col-md-5 normal">
                            <div class="row" style="margin-top: 1em;">
                                <div class="col-md-2 pull-right normal" style="padding-left: 0;    padding-right: 0;    margin-right: 11px;">
                                    <a href="<?= Yii::t('common','http://iso.swjtu.edu.cn/index.php?l=en')?>" class="btn btn-block  btn-flat  index-top-tip2" ><!--Apply Now!--><?= Yii::t('common', 'Apply Now') ?></a>
                                </div>
                                <div class="col-md-3 pull-right normal" style="padding-right: 0;border-right: 1px solid #ccc;">
                                    <a href="<?= Yii::t('common', 'http://www.sdorms.com/') ?>" class="btn btn-block  btn-flat  index-top-tip"><?= Yii::t('common', '中文') ?></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pull-right">
                                    <form class="navbar-form navbar-right" role="search" style="float: right;display: inline-block;margin-right: -10px;    margin-top: 20px;">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="navbar-search-input" placeholder="<?= Yii::t('common', 'search')?>" style="width: 151px;    height: 27px;    background-color: rgba(119, 249, 255, 0.33);color:#fff">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--<div class="row">
                                <div class="col-md-1 pull-right normal" style="padding-left: 0"></div>
                                <div class="col-md-5  pull-right normal" style="padding-right: 0">
                                    <form class="navbar-form navbar-right" role="search" style="float: right;display: inline-block;margin-right: -10px;">
                                        <div class="form-group">

                                            <input type="text" class="form-control" id="navbar-search-input" placeholder="搜索" style="width: auto;    height: 27px;    background-color: rgba(119, 249, 255, 0.33);color:#fff">
                                        </div>
                                    </form>
                                </div>
                            </div>-->
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
