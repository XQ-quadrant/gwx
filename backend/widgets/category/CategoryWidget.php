<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午7:11
 */
namespace backend\widgets\category;

use common\models\Cate;
use common\models\Room;
use yii\base\Widget;

/**
 * Class CategoryWidget 左侧菜单的下级菜单
 * @package backend\widgets\category
 */
class CategoryWidget extends Widget
{
    public $msg = '';
    public $model ;
    public $precate = 0 ;
    public $precate_name ;
    public $id ;
    public $cate = 1 ;
    //public $css = '' ;

    /**
     * 初始化
     * @see \yii\base\Object::init()
     */
    public function init(){

        parent::init();



    }


    public function run(){
        $items=[];
        //['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],];
        foreach($this->model as $k=>$v){
            $items[] = [
                'label' =>$v['name'],
                //'icon' => $v['icon'],

                'url' =>["/$this->precate_name/index?DocumentSearch%5Bcate%5D=".$v['id']]
            ];
        }
        //var_dump($items);die();
        return $items;
        //$room =
        //return $this->render('index',['model'=>$this->model,'css'=>$this->css]);
    }
    public function getDocumentCate()
    {
        if ($this->model === null) {
            $this->model = Cate::find()
                ->select(['icon','id','name'])
                ->where(['pre_cate'=>$this->precate,'status'=>Cate::$STATUS_AOLLOW])
                ->orderBy(['level' => SORT_DESC])
                //->asArray()
                ->all();//new Room();//'Hello World';
        }

        $items=[];
        foreach($this->model as $k=>$v){
            $items[] = [
                'label' =>$v['name'],
                'icon' => 'fa',

                'url' =>["/$this->precate_name/index?DocumentSearch%5Bcate%5D=".$v['id']]
            ];
        }
        return $items;
    }

    public function getCate(){
        $this->model = Cate::find()
            ->select(['uri','id','name'])
            ->where(['pre_cate'=>1,'status'=>Cate::$STATUS_AOLLOW,])
            ->andWhere(['>=', 'level', 0])
            ->orderBy(['level' => SORT_ASC])
            //->asArray()
            ->all();//new Room();//'Hello World';
        $items=[];

        $sonCate = new Cate();
        foreach($this->model as $k=>$v){
            $item =  [
                'label' =>$v['name'] ,
                //'icon' => $v['icon'],

                'url' =>$v['uri'],
                /*'items' => [
                    ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                  ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
              ],*/

            ];

            $sonCate = Cate::findAll(['pre_cate'=>$v->id]);
            if(isset($sonCate)){
                $sonitems = [];
                foreach($sonCate as $k2=>$v2){
                    $sonitems[] = [
                        'label' =>$v2['name'] ,
                        //'icon' => $v['icon'],

                        'url' =>$v2['uri'],
                    ];
                }
                $item['items'] = $sonitems;

            }

            if('/'.\Yii::$app->requestedRoute==$v['uri']){
                $item['active'] = true;
            }

            $items[] = $item;
        }
        return $items;
    }

}