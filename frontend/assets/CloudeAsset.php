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
class CloudeeAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        //'home/css/style.css',
        "cloude/css/cloud-admin.css",
	    "cloude/css/themes/default.css",
	    "cloude/css/responsive.css",
	    "cloude/js/bootstrap-daterangepicker/daterangepicker-bs3.css",
        //'home/css/nav.css',
        //'home/FontAwesome/css/font-awesome.min.css',
    ];
    public $js = [
        //"home/js/move-top.js",
        //'statics/js/test.js',script src="js/jquery/jquery-2.0.3.min.js",

	//"js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js",

	//"bootstrap-dist/js/bootstrap.min.js",

	"cloude/js/bootstrap-daterangepicker/moment.min.js",

	"cloude/js/bootstrap-daterangepicker/daterangepicker.min.js",

	"cloude/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js",
    "cloude/js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js",
	"cloude/js/jQuery-Cookie/jquery.cookie.min.js",
	"cloude/js/script.js",
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
