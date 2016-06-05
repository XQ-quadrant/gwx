<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Room */

$this->title = '新增房屋';
$this->params['breadcrumbs'][] = ['label' => '房东', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="room-create">



    <?= $this->render('_formpic', [
        'model' => $model,
    ]) ?>

</div>
