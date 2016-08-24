<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Report */

$this->title = Yii::t('common', 'Create Report');
$this->params['breadcrumbs'][] = ['label' => Yii::t('common', 'Reports'), 'url' => ['list-all']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="report-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
