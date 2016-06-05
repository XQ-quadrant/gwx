<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Max */

$this->title = 'Create Max';
$this->params['breadcrumbs'][] = ['label' => 'Maxes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="max-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
