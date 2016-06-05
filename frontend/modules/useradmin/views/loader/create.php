<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Loader */

$this->title = '成为房东';
$this->params['breadcrumbs'][] = ['label' => '/ 房东 / ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loader-create">

    <h3><?= Html::encode($this->title) ?></h3>

    <?= $this->render('test', [
        'model' => $model,
    ]) ?>

</div>
