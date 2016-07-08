<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
namespace backend\widgets\catalog;

use common\models\Cate;
use common\models\Document;
use yii\base\Widget;
use yii\db\ActiveRecord;

class CatalogWidget extends Widget
{
    public $css = ['warper'=>'box-widget','title'=>'with-border','body'=>'box-profile'];
    public $model ;
    public $activeRecord ;
    public $pre_cate = 1 ;
    public $where ;
    public $liNum = 10;
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
            $this->model = new Cate();
            $this->activeRecord = $this->model
                ->find()
                ->where(['status'=>Cate::STATUS_AOLLOW ,'pre_cate'=>$this->pre_cate])
                ->orderBy(['level' => SORT_DESC])
                ->limit($this->liNum)
                ->all();
        }else{

            $this->model = new $this->model();
            $this->activeRecord = $this->model
                ->find()
                ->where($this->where)
                ->orderBy(['level' => SORT_DESC])->limit($this->liNum)->all();
        }

    }


    public function run(){
        //$room =
            return $this->render('index',[
                'model'=>$this->model,
                'ac'=>$this->activeRecord,
                'css'=>$this->css,
                'title'=>$this->title,
                'url'=>$this->url,
            ]);

    }
    protected function findByCate($cate){
        return Document::find()
            ->select(['title','id'])
            ->where(['cate'=>$cate])
            ->all();
    }
}