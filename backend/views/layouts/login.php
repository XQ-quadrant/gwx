<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\MetronicAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use yii\web\View;
use yii\helpers\Url;
MetronicAsset::register($this);
$this->registerCssFile('@web/media/css/login.css',['depends'=>['backend\assets\MetronicAsset']]);
$this->registerJsFile('@web/media/js/login.js',['depends'=>['backend\assets\MetronicAsset']]);
$this->registerJs("jQuery(document).ready(function() {

		   App.init();
           Login.init();
		});",View::POS_END);

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
<body class="login">
<?php $this->beginBody() ?>
<!-- BEGIN LOGO -->

<div class="logo">

    <img src="media/image/logo-big.png" alt="" />

</div>

<!-- END LOGO -->

<!-- BEGIN LOGIN -->

<div class="content">

    <?= $content ?>

</div>

<!-- END LOGIN -->

<!-- BEGIN COPYRIGHT -->

<div class="copyright">

    2013 &copy; Metronic. Admin Dashboard Template.

</div>

<!-- END COPYRIGHT -->

<!-- END FOOTER -->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
