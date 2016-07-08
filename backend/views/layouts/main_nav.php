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

                    <a href="<?= Yii::$app->homeUrl?>"><h5 style=" ">西南交通大学</h5>
                    <h3  >信号与信息处理实验室</h3></a>

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
