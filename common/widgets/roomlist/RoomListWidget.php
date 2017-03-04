<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
namespace common\widgets\roomlist;

use common\models\Room;
use yii\base\Widget;
class RoomListWidget extends Widget
{
    public $msg = '';
    public $model ;
    public $id ;

    /**
     * 初始化
     * @see \yii\base\Object::init()
     */
    public function init(){
        parent::init();

        if ($this->model === null) {
            $this->model = Room::find()->where(['user_id'=>$this->id])->all();//new Room();//'Hello World';
        }
    }


    public function run(){
        //$room =
        return $this->render('index',['model'=>$this->model]);
    }
}