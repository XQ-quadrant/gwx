<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Document */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => $cate->name, 'url' => ['document/list','cate'=>$cate->id]];
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
                        <span class="name" style="margin-right: 1em;"><?= $model->author ?> </span>
                        <span class="from"><?= Yii::$app->formatter->asDate($model->create_at) ?></span>
                    </div>
                    <hr>
                    <?= htmlspecialchars_decode($model->content) ?>


                </div>

            </div>
            <div class="panel-footer"></div>

        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default ">



            <div class="panel-body ">
                <h5>相关</h5>
               <!-- <dl>
                    <dt>Donec lobortis justo at aliquet</dt>
                    <dd>Stra</dd>
                    <dt>Tempus imperdiet elit</dt>
                    <dd> sodales id. Donec lobortis justo at aliquet luctus. Praesent interdum massa sed ex efficitur, vitae dignissim ante pharetra</dd>
                </dl>-->


            </div>

        </div>
    </div>

</div>




</div>
