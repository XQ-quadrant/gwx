<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-6-17
 * Time: 下午2:10
 */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\Pagination;
use yii\widgets\LinkPager;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel common\models\DocumentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = \common\models\Cate::getCateName($cate)['name'];
$this->params['breadcrumbs'][] = $this->title;
$this->params['cate'] = Yii::$app->request->get('DocumentSearch')['cate'];
//$this->registerCssFile('')
$this->params['search'] = $this->render('_searchSimple', ['model' => $searchModel]);

$count = $dataProvider->getCount();
$totalCount = $dataProvider->getTotalCount();
$pages = new Pagination([ 'totalCount' =>$totalCount, 'pageSize' => 15]);
$data = $dataProvider->getModels();
?>
<div class="document-index">

    <div class="row list-index" >
        <div class="col-lg-9" >
            <div class="box box-widget">
                <div class="box-header with-border">
                    <h4 class="box-title"><?= $this->title ?></h4>
                    <div class="box-tools pull-right">

                    </div>
                </div>
                <div class="box-body box-profile">
                    <?php foreach ( $data as $list):?>
                        <div class="attachment-block clearfix">

                            <img class="attachment-img" src="<?=$list->pic?>" alt="Attachment Image">

                            <div class="attachment-pushed">
                                <h4 class="attachment-heading" style="font-size: 15px"><a href="<?=Url::to(['/'.$list->tableName().'/view/','id'=>$list->id])?>"><?=$list->title?></a></h4>

                                <div class="attachment-text">
                                    <?=$list->breviary?>
                                </div>
                                <!-- /.attachment-text -->
                            </div>
                            <!-- /.attachment-pushed -->

                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="box-footer text-center">
                    <?= LinkPager::widget([
                        'pagination' => $pages,
                    ]);?>
                </div>
                <!-- /.box-body -->
            </div>
        </div>

        <div class="col-lg-3" >
            <?=backend\widgets\panel\PanelWidget::widget(['cate'=>14,'title'=>'实验室动态'])?>
        </div>
    </div>

</div>
