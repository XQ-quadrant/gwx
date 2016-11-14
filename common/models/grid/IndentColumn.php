<?php
namespace common\models\grid;
use yii\grid\Column;
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-10-26
 * Time: 下午4:45
 */
class IndentColumn extends Column
{
    public $header = '#';

    public $value = [];

    public $headerOptions = ['class' => 'indent-column'];


    protected function renderDataCellContent($model, $key, $index)
    {
        $html = '';
        $html.= "<a href='/book/{$model->book_id}' target='_blank' '>".$model->bookname."</a>";
        $html.= '<p>'.(isset($model->user->profile)?$model->user->profile->name:null)."</p>";
        $html.= '<p>'.$model->tel."</p>";
        //$html.= '<p>'.$model->user->profile->name."</p>";
        /*foreach($this->value as $k =>$v){
            $html.= '<p>'.$model->$v."</p>";
        }*/
        return $html;
       // return '<p>'.$model->user->profile->name."</p><p>".$model->user->tel."</p>";
        /*$pagination = $this->grid->dataProvider->getPagination();

        if ($pagination !== false) {
            return $pagination->getOffset() + $index + 1;
        } else {
            return $index + 1;
        }*/
    }

    /*public function renderDataCell($model, $key, $index)
    {
        if ($this->contentOptions instanceof Closure) {
            $options = call_user_func($this->contentOptions, $model, $key, $index, $this);
        } else {
            $options = $this->contentOptions;
        }
        return Html::tag('td', $this->renderDataCellContent($model, $key, $index), $options);
    }*/

}