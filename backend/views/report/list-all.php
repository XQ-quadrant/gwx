<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\Pagination;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $searchModel common\models\search\ReportSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('common', 'Reports');
$this->params['breadcrumbs'][] = $this->title;

$count = $dataProvider->getCount();
$totalCount = $dataProvider->getTotalCount();
$pages = new Pagination([ 'totalCount' =>$totalCount, 'pageSize' => 5]);
$data = $dataProvider->getModels();

?>
<div class="report-index">
    <div class="row">
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    </div>
<div class="row">
    <div class="col-md-4 col-xs-12 pull-right" >
        <div class="box">
            <!-- <div class="box-header">
                 <h3 class="box-title">Application Buttons</h3>
             </div>-->
            <div class="box-body">
               <!-- <h3 class="box-title col-lg-3" style="display: inline;"> 学术交流 </h3>-->
                <?= Html::a(Yii::t('app', '<i class="fa fa-edit"></i> 发布'), ['create'], ['class' => 'btn btn-app']) ?>
                <!--<a class="btn btn-app">
                    <i class="fa fa-edit"></i> 发布
                </a>-->
                <?= Html::a(Yii::t('app', '<i class="fa fa-edit"></i> 我的报告'), ['index'], ['class' => 'btn btn-app']) ?>

                <a class="btn btn-app">
                    <span class="badge bg-red">531</span>
                    <i class="fa fa-heart-o"></i> 已报名
                </a>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <?php foreach ( $data as $list):?>
    <div class="col-md-8 col-xs-12 pull-left">
        <div class="box box-widget border-box">
            <div class="box-header with-border">
                <div class="user-block">
                    <span class="report-title"><a href="/report/<?=$list['id']?>" ><?=$list['subject']?></a></span>

                    <div style="float: left">
                        <img class="img-circle" src="/adminlte/dist/img/user1-128x128.jpg" alt="User Image">
                        <span class=" report-span" >报告人：<?=$list['username']?></span>
                        <span class=" report-span" >报告时间： <?= Yii::$app->formatter->format($list['start_at'],['datetime','php: Y年m月d日  ah:i'])?></span>

                    </div>
                </div>
                <!-- /.user-block -->
                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="参与">
                        <i class="fa  fa-eye">报名</i></button>
                </div>
                <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <!-- post text -->
                <div class="report-content">
                    <p><?=$list['content']?>
                    </p>
                </div>
                <!-- Social sharing buttons -->
                <!--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>-->
                <?= Html::button(Yii::t('app', '<i class="fa fa-thumbs-o-up"></i> 赞 '), ['class' => 'btn btn-default btn-xs','type'=>"button"]) ?>

                <!--<button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>-->
                <span class="pull-right text-muted">发布时间：<?= Yii::$app->formatter->format($list['create_at'],'date')?></span>
            </div>
            <!-- /.box-body -->
            <div class="box-footer box-comments" style="display: none">
                <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                      <span class="username">
                        Maria Gonzales
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                    </div>
                    <!-- /.comment-text -->
                </div>
                <!-- /.box-comment -->
                <div class="box-comment">
                    <!-- User image -->
                    <img class="img-circle img-sm" src="../dist/img/user5-128x128.jpg" alt="User Image">

                    <div class="comment-text">
                      <span class="username">
                        Nora Havisham
                        <span class="text-muted pull-right">8:03 PM Today</span>
                      </span><!-- /.username -->
                        The point of using Lorem Ipsum is that it has a more-or-less
                        normal distribution of letters, as opposed to using
                        'Content here, content here', making it look like readable English.
                    </div>
                    <!-- /.comment-text -->
                </div>
                <!-- /.box-comment -->
            </div>
            <!-- /.box-footer -->
            <div class="box-footer" style="display: none">
                <form action="#" method="post">
                    <img class="img-responsive img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                    <!-- .img-push is used to add margin to elements next to floating images -->
                    <div class="img-push">
                        <input class="form-control input-sm" placeholder="Press enter to post comment" type="text">
                    </div>
                </form>
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <?php endforeach; ?>

</div>
    <?= LinkPager::widget([
        'pagination' => $pages,
    ]);?>
</div>
