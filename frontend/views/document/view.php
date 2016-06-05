<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Document */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Documents', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="document-posts">
    <div class="container">
        <div class="single">
            <div class="top-single">

                <?= $model->content?>



            </div>
        </div>
    </div>
</div>


