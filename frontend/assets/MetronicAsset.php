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
class MetronicAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
       "media/css/bootstrap.min.css",

	"media/css/bootstrap-responsive.min.css",

	"media/css/font-awesome.min.css" ,

	"media/css/style-metro.css" ,

	"media/css/style.css" ,

	"media/css/style-responsive.css" ,

	"media/css/default.css",

	"media/css/uniform.default.css" ,
	"media/css/site.css" ,


    ];
    public $js = [
        "media/js/jquery-1.10.1.min.js",

	"media/js/jquery-migrate-1.2.1.min.js",



	"media/js/jquery-ui-1.10.1.custom.min.js",

	"media/js/bootstrap.min.js",



	"media/js/jquery.slimscroll.min.js",

	"media/js/jquery.blockui.min.js",

	"media/js/jquery.cookie.min.js",

	"media/js/jquery.uniform.min.js" ,


	"media/js/app.js",

    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
