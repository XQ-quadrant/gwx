<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use frontend\assets\MetronicAsset;

MetronicAsset::register($this);
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
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::t('common','Yii China'),//'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItemsCenter = [
        ['label' => '租房', 'url' => ['/site/index']],
        ['label' => '关于', 'url' => ['/site/about']],
        ['label' => '联系我们', 'url' => ['/site/contact']],
        ['label' => '拼组', 'url' => ['/site/contact']],
        ['label' => '帮助', 'url' => ['/site/contact']],
        ['label' => '帮助', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => '登录', 'url' => ['/site/login']];
    } else {
        $menuItems[] =[
            'label'=>Yii::$app->user->identity->username,
            'items'=>[
                ['label'=>'<i class="icon-screenshot"></i> 个人中心','url'=>'/site/logout','linkOptions'=>['data-method'=>'post']],
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
            ]
        ];
        /* '<li><a class="avatar dropdown-toggle" data-toggle="dropdown">cc</a>'.
            '<ul class="dropdown-menu">
            <li>ahha</li>
            <li>ahha</li>'
            .'<li>'


            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                '退出 (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            .'</li></ul>'
            . '</li>';*/
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav center'],
        'encodeLabels' => false,
        'items' => $menuItemsCenter,
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
