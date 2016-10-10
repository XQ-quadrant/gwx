<?php
/**
 * @link http://www.iisns.com/
 * @copyright Copyright (c) 2015 iiSNS
 * @license http://www.iisns.com/license/
 */

namespace iisns\webuploader;

use yii\web\AssetBundle;

/**
 * @author Shiyang <dr@shiyang.me>
 */
class MultiImageAsset extends AssetBundle
{
	//public $sourcePath = '@vendor/iisns/yii2-webuploader/assets';

	public $css = [
	  	'webuploader.css',
		'multi.css',
	];

	public $js = [
		'dist/webuploader.min.js',
		'multi.upload.js',
	];

	public $depends = [
		'yii\web\JqueryAsset'
	];
	public function init()
	{
		$this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
	}
}
