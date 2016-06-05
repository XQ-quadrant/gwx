<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class HomeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        /*'home/css/bootstrap.css',*/
        'css/site.css',
        'home/css/style.css',

        //'home/css/nav.css',
        //'home/FontAwesome/css/font-awesome.min.css',
    ];
    public $js = [
        "home/js/jquery-1.11.1.min.js",
        //"home/js/move-top.js",
        //'statics/js/test.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
