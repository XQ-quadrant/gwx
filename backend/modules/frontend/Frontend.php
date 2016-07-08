<?php

namespace backend\modules\frontend;

/**
 * frontend module definition class
 */
class Frontend extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'backend\modules\frontend\controllers';
    public $layout = '@app/views/layouts/main_nav.php';
    //public $viewPath = '@app/views';
    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
