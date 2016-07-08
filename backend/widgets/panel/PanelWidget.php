<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
namespace backend\widgets\panel;

use common\models\Document;
use yii\base\Widget;
use yii\db\ActiveRecord;

class PanelWidget extends Widget
{
    public $css = 'panel panel-widget panel-index';
    public $model ;
    public $activeRecord ;
    public $cate ;
    public $where ;
    public static $liNum =7;
    public $pic;
    public $title;
    public $url;

    /**
     * 初始化
     * @see \yii\base\Object::init()
     */
    public function init(){
        parent::init();

        if ($this->model === null) {
            $this->model = new Document();
            $this->activeRecord = $this->model
                ->find()
                ->where(['status'=>Document::STATUS_AOLLOW ,'cate'=>$this->cate])
                ->orderBy(['level' => SORT_DESC])
                ->limit(self::$liNum)
                ->all();

            //echo 'hehhe';die();
            //$this->activeRecord = Cate::find()->where(['status'=>Cate::$STATUS_AOLLOW])->orderBy(['level' => SORT_DESC])->all();//new Room();//'Hello World';
        }else{
            //$this->model = new ActiveRecord();
            $this->model = new $this->model();
            $this->activeRecord = $this->model
                ->find()
                ->where($this->where)
                ->orderBy(['level' => SORT_DESC])->limit(self::$liNum)->all();
        }

    }


    public function run(){
        //$room =
        if(!isset($this->pic)){
            return $this->render('index',['model'=>$this->model,'ac'=>$this->activeRecord,'css'=>$this->css,'title'=>$this->title]);

        }else{
            return $this->render('panelPic',[
                'model'=>$this->model,
                'ac'=>$this->activeRecord,
                'css'=>$this->css,
                'title'=>$this->title,
                'url'=>$this->url,
            ]);

        }
    }
}