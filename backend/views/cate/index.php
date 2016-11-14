<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\CateSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cates';
$this->params['breadcrumbs'][] = $this->title;
/*$this->registerCssFile('@web/adminlte/plugins/jstree/style.min.css',['depends'=>['yii\bootstrap\BootstrapAsset']]);

$this->registerJsFile('@web/adminlte/plugins/jstree/jstree.min.js',['depends'=>['yii\web\JqueryAsset']]);
$this->registerJsFile('@web/adminlte/plugins/jstree/treedomian.js',['depends'=>['yii\web\JqueryAsset']]);*/
$this->registerCssFile('@web/adminlte/plugins/treeview/bootstrap-treeview.css',['depends'=>['yii\bootstrap\BootstrapAsset']]);

$this->registerJsFile('@web/adminlte/plugins/treeview/bootstrap-treeview.js',['depends'=>['yii\web\JqueryAsset']]);
$this->registerJsFile('@web/adminlte/plugins/treeview/treeview-demo.js',['depends'=>['yii\web\JqueryAsset']]);

?>
<div class="cate-index">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">栏目分类</h3>

                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body no-padding">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="/cate/index?pre_cate=1"><i class="fa fa-inbox"></i> 顶部栏目
                                <!--<span class="label label-primary pull-right">3</span>-->
                            </a></li>
                        <li><a href="/cate/index?pre_cate=3">
                                <i class="fa fa-envelope-o"></i> 底部栏目</a></li>
                        <li><a href="/cate/index?pre_cate=2">
                                <i class="fa fa-file-text-o"></i> 图片栏目</a></li>
                    </ul>
                </div>
                <!-- /.box-body -->
            </div>
            <div class="box float-e-margins">
                <div class="box-header">
                    <h3 class="box-title">栏目 <small></small></h3>
                    <div class="box-tools">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                class="fa fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="box-body ">
                    <div id="jstree1">


                    </div>

                    <div id="treeview12" class="test"></div>
                                <!--<div id="treeview10" class="test"></div>-->


                </div>
            </div>
        </div>

        <div class="col-md-9">

            <p>
                <?= Html::a('添加子栏目', ['create','pre_cate'=>isset($_GET['pre_cate'])?$_GET['pre_cate']:1], ['class' => 'btn btn-success']) ?>
            </p>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],

                    //'id',
                    //'cindex',
                    'name',
                    //'create_time',
                    //'model:ntext',
                    // 'view_index:ntext',
                    'pre_cate',
                    'level',
                    'status',
                     'uri:ntext',
                    // 'icon',

                    ['class' => 'yii\grid\ActionColumn',
                        'template' => '
                            <td >'
                            .'<button class="btn  btn-sm btn-xs">{view}</button></td>'
                            .'<td ><button class="btn btn-sm btn-info btn-xs">{update}</button></td>'
                            .'<td ><button class="btn btn-sm btn-danger btn-xs">{delete}</button>'
                        .'</td>',

                    ],
                ],
            ]); ?>
        </div>
    </div>


</div>
