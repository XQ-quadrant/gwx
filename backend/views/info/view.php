<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Document */

$this->title = $model->title;
//$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-view container">
<div class="row">
   <!-- <div class="col-md-3">
    </div>-->
    <div class="col-md-9">
        <div class="panel panel-default ">
            <div class="panel-body ">

                <div class="col-md-12 padding-l-0">
                    <h3 class="title"><?= $model->title ?></h3>
                    <div class="author clearfix author-right">
                        <!--<img src="img/profileimg4.png" alt="img">-->
                        <span class="name"><?= ($model->author!='')?Yii::t('common','Author').'： '.$model->author: ''?></span>
                        <span class="from"><?php echo Yii::t('common','Date'); ?>： <?= Yii::$app->formatter->asDate($model->create_at) ?></span>
                    </div>
                    <hr>
                    <?= htmlspecialchars_decode($model->content) ?>

                </div>

            </div>
            <div class="panel-footer"></div>

        </div>
    </div>
    <div class="col-md-3">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title"></h3>

                <div class="box-tools">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
            <div  class="box-body no-padding">
                    <?=\backend\widgets\catalog\CatalogWidget::widget(['pre_cate'=>$pre_cate])?>
            </div>
            <!-- /.box-body -->
        </div>
        </div>

</div>




</div>
