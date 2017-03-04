<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-7-27
 * Time: 下午3:45
 */

namespace backend\modules\rest\controllers;
use yii\rest\ActiveController;

class UserController extends ActiveController
{
    public $modelClass = 'dektrium\user\models\User';
    public $serializer = [
        'class' => 'yii\rest\Serializer',
        'collectionEnvelope' => 'items',
    ];

}