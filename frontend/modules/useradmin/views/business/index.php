<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\View;
use yii\data\Pagination;
use backend\widgets\common\LinkPages;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = '出租房管理台';
$this->params['breadcrumbs'][] = ' / 房东';
$this->params['breadcrumbs'][] = ' / '.$this->title;
//$this->registerCssFile('@web/media/css/select2_metro.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
//$this->registerCssFile('@web/media/css/DT_bootstrap.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
//$this->registerJsFile('@web/media/js/select2.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
//$this->registerJsFile('@web/media/js/jquery.dataTables.min.js',['depends'=>['frontend\assets\MetronicAsset']]);
//$this->registerJsFile('@web/media/js/DT_bootstrap.js',['depends'=>['frontend\assets\MetronicAsset']]);
//$this->registerJsFile('@web/media/js/table-advanced.js',['depends'=>['frontend\assets\MetronicAsset']]);
$this->registerJs("
        jQuery(document).ready(function() {

		   //App.init();

		  // TableAdvanced.init();

		});",View::POS_END);

$data = $dataProvider->getModels();
$count = $dataProvider->getCount();
$pages = new Pagination([ 'totalCount' =>$count, 'pageSize' => 18]);
?>
<div class="portlet box green">

    <div class="portlet-title">

        <div class="caption"><i class="icon-home"></i>房源列表</div>

        <div class="tools">

            <a href="javascript:;" class="reload"></a>

            <a href="javascript:;" class="remove"></a>

        </div>

    </div>

    <div class="portlet-body">
        <div class="clearfix">

            <div class="btn-group">
                <?= Html::a('添加新房屋', ['business/create'], ['class' => 'btn btn-success blue']) ?>
                <!--<button id="sample_editable_1_new" class="btn green">

                    Add New <i class="icon-plus"></i>

                </button>-->

            </div>

           <!-- <div class="btn-group pull-right">

                <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>

                </button>

                <ul class="dropdown-menu pull-right">

                    <li><a href="#">Print</a></li>

                    <li><a href="#">Save as PDF</a></li>

                    <li><a href="#">Export to Excel</a></li>

                </ul>

            </div>-->

        </div>
        <table class="table table-striped table-bordered table-hover table-full-width" id="sample_1">

            <thead>

            <tr>

                <th><a href="<?= \yii\helpers\Url::current(['sort'=>(Yii::$app->request->get('sort')=='status')?'-status':'status'])?>">状态</a></th>



                <th class="hidden-480"><a href="<?= \yii\helpers\Url::current(['sort'=>'title'])?>">标题</a></th>

                <th class="hidden-480"><a href="<?= \yii\helpers\Url::current(['sort'=>(Yii::$app->request->get('sort')=='price')?'-price':'price'])?>">价格</a></th>

                <th class="hidden-480"><a href="<?= \yii\helpers\Url::current(['sort'=>(Yii::$app->request->get('sort')=='createtime')?'-createtime':'createtime'])?>">起始时间</a></th>
                <th class="hidden-480"></th>


            </tr>

            </thead>

            <tbody>



            <?php foreach ( $data as $list):?>
            <tr >

                <td><?= ($list[ 'status']==1)?'出售中':'已租' ?></td>

                <td><a href="<?=Url::to('@web/room/view?id='.$list[ 'id']) ?>"><?= Html::encode($list[ 'title']) ?></a><p>地址：<?= Html::encode($list[ 'address']) ?></p></td>

                <td class="hidden-480"><?= Html::encode($list[ 'price']) ?></td>

                <td class="hidden-480"><?=Html:: encode((strtotime($list['createtime'])>0)?date('Y-m-d',strtotime($list['createtime'])):'未设置') ?></td>


                <td class="hidden-480"> <?= Html::a('修改', ['update', 'id' => $list['id']], ['class' => 'btn btn-primary']) ?>
                  <?= Html::a('删除', ['delete', 'id' => $list['id']], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => '确定要删除这条商品吗？',
                            'method' => 'post',
                        ],
                    ]) ?></td>

               <!-- <td class="hidden-480" style="display: none">A</td>
                <td class="hidden-480" style="display: none">A</td>
                <td class="hidden-480" style="display: none">A</td>-->

            </tr>
            <?php endforeach; ?>

           <!-- <tr >

                <td>Presto</td>

                <td>Nintendo DS browser</td>

                <td class="hidden-480">Nintendo DS</td>

                <td class="hidden-480">8.5</td>

                <td class="hidden-480">C/A<sup>1</sup></td>

            </tr>-->

            </tbody>
        </table>

    </div>

</div>

