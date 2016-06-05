<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-5-19
 * Time: 上午6:45
 */

use yii\widgets\ActiveForm;
use common\widgets\file_upload\FileUpload;   //引入扩展
use yii\helpers\Html
//echo FileUpload::widget('common\widgets\file_upload\FileUpload',['config'=>['value'=>'ccc']]) ;
?>
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