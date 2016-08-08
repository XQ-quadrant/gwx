<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-8-7
 * Time: 下午9:56
 */
namespace vendor\social;
use yii\base\Component;

class chat extends  Component{
    public function login(){
        $this->trigger('connect');

    }
}