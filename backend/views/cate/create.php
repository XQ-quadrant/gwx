<?php

use yii\helpers\Html;
use common\models\Cate;

/* @var $this yii\web\View */
/* @var $model common\models\Cate */

$this->title = 'Create Cate';
$this->params['breadcrumbs'][] = ['label' => 'Cates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$cur_cate = Yii::$app->request->get('pre_cate');
$cate =  new Cate();
$cates = $cate->find()->where(['or',"pre_cate=$cur_cate","id=$cur_cate",],['status'=>Cate::$STATUS_AOLLOW])->all(); // 当前栏目和自己下一级栏目，
/*var_dump($c);die();
$cates = Cate::findAll([['or',"pre_cate=$cur_cate","id=$cur_cate"]]);*/
$list =[];
foreach($cates as $v){
    $list[$v->id]=$v->name;
}
$list[0]= '基础';
?>
<div class="cate-create">
    <div class="box box-widget">
        <div class="box-header with-border">
            <div class="box-title">
                <h3><?= Html::encode($this->title) ?></h3>
            </div>
            <div class="box-tools">
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-offset-1 col-md-6">
                    <?= $this->render('_form', [
                        'model' => $model,
                        'list' => $list,
                    ]) ?>
                </div>
            </div>

        </div>
    </div>
</div>
