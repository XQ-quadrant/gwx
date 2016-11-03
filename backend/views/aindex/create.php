<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Aindex */

$this->title = 'Create Aindex';
$this->params['breadcrumbs'][] = ['label' => 'Aindices', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aindex-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
