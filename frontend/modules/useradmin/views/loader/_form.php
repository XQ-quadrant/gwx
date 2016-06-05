<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Loader */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="tab-pane row-fluid profile-account" id="tab_1_3">

    <div class="row-fluid">

        <div class="span12">

            <div class="span3">

                <ul class="ver-inline-menu tabbable margin-bottom-10">

                    <li class="active">

                        <a data-toggle="tab" href="#tab_1-1">

                            <i class="icon-cog"></i>认证信息</a>

                        <span class="after"></span>

                    </li>

                <!--    <li class="" id="cc"><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> 身份验证</a></li>

                    <li class=""><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>

                    <li class=""><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> 默认设置</a></li>-->

                </ul>

            </div>

            <div class="span9">
                <?php $form = ActiveForm::begin(); ?>
                <div class="tab-content">

                    <div id="tab_1-1" class="tab-pane active">

                        <div style="height: auto;" id="accordion1-1" class="accordion collapse">


                            <?= $form->field($model, 'weibo')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>


                            <?= $form->field($model, 'infro')->textarea(['rows' => 6,'class'=>"m-wrap span8"]) ?>




                            <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>

                            <?= $form->field($model, 'tel')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>

                            <?= $form->field($model, 'person_id')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>
                            <p>房东必须通过身份证验证 </p>

                            <br />

                            <div class="controls">

                                <div class="space10"></div>

                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <?= $form->field($model, 'person_card')->widget('common\widgets\file_upload\FileUpload',[
                                        'config'=>[]
                                    ]) ?>

                                </div>


                            <div class="space10"></div>

                            <div class="submit-btn">
                                <?= Html::submitButton($model->isNewRecord ? '保存' : '保存', ['class' => $model->isNewRecord ? 'btn green' : 'btn greens']) ?>

                               <!-- <a class="btn green" data-toggle="tab" href="#tab_2-2">下一步</a>


                                <a href="#" class="btn">Cancel</a>-->

                            </div>


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

