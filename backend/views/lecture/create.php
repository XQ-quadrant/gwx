<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Lecture */

$this->title = Yii::t('app', 'Create Lecture');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lectures'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lecture-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
