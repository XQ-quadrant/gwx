<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Cate;
/* @var $this yii\web\View */
/* @var $searchModel common\models\DocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$cate =Cate::findOne(['id'=> Yii::$app->request->get('DocumentSearch')['cate']]);

$this->title = $cate->name;

$this->params['breadcrumbs'][] = $this->params['cate'] = $cate->name;//Yii::$app->request->get('DocumentSearch')['cate'];
$this->params['search'] = $this->render('_search', ['model' => $searchModel]);
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-index">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h2 class="box-title"><?= Html::encode($this->title) ?></h2>


                    <div class="box-tools pull-right">
                        <div class="has-feedback">
                            <input type="text" class="form-control input-sm" placeholder="Search Mail">
                            <span class="glyphicon glyphicon-search form-control-feedback"></span>
                        </div>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                    <div class="mailbox-controls">
                        <!-- Check all button -->

                        <a type="button" class="btn btn-success" href="<?= \yii\helpers\Url::to(['create','cate'=>$this->params['cate']]) ?>"><i class="fa  fa-edit"></i>
                        新增文章
                        </a>
                        <div class="btn-group">
                            <button type="button" class="btn btn-default "><i class="fa fa-trash-o"></i></button>
                            <button type="button" class="btn btn-default "><i class="fa fa-reply"></i></button>
                            <button type="button" class="btn btn-default "><i class="fa fa-share"></i></button>
                        </div>
                        <!-- /.btn-group -->
                        <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                        <!--<div class="pull-right">
                            1-50/200
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                            </div>

                        </div>-->
                        <!-- /.pull-right -->
                    </div>

                    <?= GridView::widget([
                        'dataProvider' => $dataProvider,
                        'filterModel' => $searchModel,
                        'columns' => [
                            ['class' => 'yii\grid\SerialColumn'],

                            //'id',
                            [
                                "label" => "标题",
                                "attribute"=>'title',
                                "format" => "raw",
                                "value" => function ($model) {
                                    return '<a href="/document/'.$model->id.'">'.$model->title.'</a>';
                                }],
                            //'breviary:ntext',
                            //'content:ntext',
                            'author',
                            // 'cate',
                            // 'type',
                            //'views',
                            // 'status',
                            'level',
                            'create_at',
                            //'pic:ntext',
                            //'create_by',
                            [
                                //"label" => "操作",
                                "format" => "raw",
                                "attribute"=>'status',

                                "value" => function ($model) {
                                    $status = $model->showStatus();
                                    return '<div class="input-group-btn">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">'.$status['name'].'
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">

                    <li><a href="/document/status?id='.$model->id.'&status=1">aollow</a></li>
                    <li><a href="/document/status?id='.$model->id.'&status=0">deny</a></li>
                  </ul>
               ';
                                    //return '<a href="/indent/deal?id='.$model->id.'" class="btn btn-xs btn-'.$status['label'].' btn-flat">'.$status['name'].'</span>';
                                    //return $model->status;
                                }
                            ],

                            ['class' => 'yii\grid\ActionColumn'],
                        ],
                    ]); ?>
                </div>
                <!-- /.box-body -->

            </div>
            <!-- /. box -->
        </div>
    </div>

</div>
