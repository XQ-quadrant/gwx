<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Userinfo */
/* @var $form yii\widgets\ActiveForm */


?>
<div class="tab-pane row-fluid profile-account" id="tab_1_3">

    <div class="row-fluid">

        <div class="span12">

            <div class="span3">

                <ul class="ver-inline-menu tabbable margin-bottom-10">

                    <li class="active">

                        <a data-toggle="tab" href="#tab_1-1">

                            <i class="icon-cog"></i>基本信息</a>

                        <span class="after"></span>

                    </li>


                </ul>

            </div>

            <div class="span9">
                <?php $form = ActiveForm::begin(); ?>
                <div class="tab-content">

                    <div id="tab_1-1" class="tab-pane active">

                        <div style="height: auto;" id="accordion1-1" class="accordion collapse">

                            <?= \iisns\webuploader\Cropper::widget() ?>
                            <?= $form->field($model, 'icon')->textInput(['rows' => 6,'class'=>"m-wrap span8"]) ?>
                            <?= $form->field($model, 'icon')->textInput(['rows' => 6,'class'=>"m-wrap span8"]) ?>

                            <?= $form->field($model, 'school')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>

                            <?= $form->field($model, 'intro')->textarea(['rows' => 6,'class'=>"m-wrap span8"]) ?>
                            <div class="space10"></div>

                            <div class="submit-btn">
                                <?= Html::submitButton($model->isNewRecord ? '保存' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success green' : 'btn btn-primary green']) ?>


                            </div>


                        </div>

                    </div>

                </div>
                <?php ActiveForm::end(); ?>
            </div>

            <!--end span9-->

        </div>

    </div>

</div>

