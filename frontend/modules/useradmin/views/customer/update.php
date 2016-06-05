<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Userinfo */

$this->title = '修改信息: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => '个人中心', 'url' => ['index']];
//$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = '修改信息';

$this->registerCssFile('@web/media/css/bootstrap-fileupload.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/chosen.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
$this->registerCssFile('@web/media/css/profile.css',[ 'depends'=> 'frontend\assets\MetronicAsset']);
//$this->registerCssFile('@web/media/css/profile.css',[ 'depends'=> 'frontend\assets\HomeAsset']);
$this->registerJsFile('@web/media/js/chosen.jquery.min.js',['depends'=>['frontend\assets\MetronicAsset']]);

?>
<div class="userinfo-update">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php

    /*if(Yii::$app->user->identity->status != \common\models\User::STATUS_LOADER){

        //echo Yii::$app->user->identity->id;
       echo $this->render('_form_loader', [
            'model' => $model,
        ]);
    }else{
        //echo Yii::$app->user->identity->status;
        $this->title = '修改信息: ' . ' ' . $model->name;*/

        echo $this->render('_form', [
        'model' => $model,
    ]) ;
    //}
    ?>

</div>
