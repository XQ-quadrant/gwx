<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\search\PicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pics';
$this->params['breadcrumbs'][] = $this->title;
$a = Yii::$app->request->get('category');
$category = isset($a)?$a:39;
?>
<div class="pic-index">
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <?php foreach($cates as $cate){ ?>
                        <li class="<?= ($cate->id == $category)?'active':null ?>"><a href="/pic/index?category=<?= $cate->id?>" ><?= $cate->name?></a></li>
                    <?php } ?>

                    <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

                        <p>
                            <?= Html::a('Create Pic', ['create','category'=>Yii::$app->request->get('category')], ['class' => 'btn btn-success']) ?>
                        </p>
                        <?= $this->render('_grid', [
                        'searchModel' => $searchModel,
                        'dataProvider' => $dataProvider,
                        ]); ?>

                    </div>
                    <!-- /.tab-pane -->

                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>



</div>
