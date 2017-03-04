<?php
namespace common\models\grid;
use yii\grid\Column;
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-10-26
 * Time: 下午4:45
 */
class PicColumn extends Column
{
    public $header = '缩略图';

    public $value = [];

    public $headerOptions = ['class' => 'indent-column'];


    protected function renderDataCellContent($model, $key, $index)
    {
        $html = '';
        $html.= "<a href='#'><img class='colum-pic' src='{$model->savepath}'></a>";
        /*$html.= '<p>'.(isset($model->user->profile)?$model->user->profile->name:null)."</p>";
        $html.= '<p>'.$model->tel."</p>";*/

        return $html;

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