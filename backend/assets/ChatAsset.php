<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-7-27
 * Time: 上午12:08
 */

namespace backend\assets;

use yii\web\AssetBundle;


class ChatAsset extends AssetBundle
{
    public $basePath = '@webroot/chat';
    public $baseUrl = '@web/chat';
    public $css = [
        'css/style.css',
    ];
    public $js = [
        "js/swfobject.js",
        'js/web_socket.js',
        'js/jquery.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
