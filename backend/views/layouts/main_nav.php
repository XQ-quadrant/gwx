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
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body class="hold-transition skin-pblue-light layout-top-nav">
    <?php $this->beginBody() ?>
    <div class="wrapper" >
        <div class="breadcrumb_banner" style="">
            <div id="breadcrumb_wrapper">
                <div class="container">
                    <img src="/adminlte/dist/img/gray_logo.png"  style="width: 78px;float: left;padding: 0 1em;"/>
                    <a href="<?= Yii::$app->homeUrl?>" style="display: inline-block;">
                        <h5 style="display: flex">西南交通大学</h5>
                    <h3  style="display: flex">信号与信息处理实验室</h3></a>

                    <form class="navbar-form navbar-right" role="search" style="float: right;display: inline-block">
                        <div class="form-group">

                            <input type="text" class="form-control" id="navbar-search-input" placeholder="搜索">
                        </div>
                    </form>
                    <a href="#" style="float: right;    margin:18px 1em 0 0;padding-right: 1em;font-size: 0.7em;border-right: 1px solid #ccc">to English</a>

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
