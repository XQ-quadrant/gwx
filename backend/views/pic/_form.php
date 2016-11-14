<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Pic */
/* @var $form yii\widgets\ActiveForm */
$cate = new \common\models\Cate();
$cates = $cate->find()
    ->select(['id','name'])
    ->where(['status'=>\common\models\Cate::STATUS_pic])->asArray()->all();
$list = [];
foreach($cates as $k=>$v){
    $list[$v['id']] = $v['name'];
}
?>

<div class="pic-form">

    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'savepath')->widget('common\widgets\file_upload\FileUpload',[
        'config'=>[]
    ]) ?>
    <?= $form->field($model, 'content')->textarea(['rows' => 2]) ?>
    <?= $form->field($model, 'category')->dropDownList($list) ?>
    <?= $form->field($model, 'url')->textarea(['rows' => 1]) ?>
    <?= $form->field($model, 'status')->dropDownList(['1'=>'发布','独栋'=>'隐藏',]) ?>
    <?php

    ?>

<div class="row">
    <div class="form-group  col-md-5">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('model/pic','Create') : Yii::t('model/pic','Update'), ['class' => $model->isNewRecord ? 'btn btn-success btn-block' : 'btn btn-primary btn-block']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>

</div>
