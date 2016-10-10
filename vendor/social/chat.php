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

    $ws = new ws('127.0.0.1',7272);
        $ws->send();
        //$this->trigger('connect');

    }
}