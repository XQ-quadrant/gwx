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

                    <li class="" id="cc"><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> 身份验证</a></li>

                    <li class=""><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>

                    <li class=""><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> 默认设置</a></li>

                </ul>

            </div>

            <div class="span9">
                <?php $form = ActiveForm::begin(); ?>
                <div class="tab-content">

                    <div id="tab_1-1" class="tab-pane active">

                        <div style="height: auto;" id="accordion1-1" class="accordion collapse">







                            <?= $form->field($model, 'weibo')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>

                            <?= $form->field($model, 'address')->textInput(['class'=>"m-wrap span8"]) ?>

                            <?= $form->field($model, 'intro')->textarea(['rows' => 6,'class'=>"m-wrap span8"]) ?>


                            <?= $form->field($model, 'icon')->textInput(['rows' => 6,'class'=>"m-wrap span8"]) ?>



                            <!-- <?/*= //$form->field($model, 'stu_id')->textInput(['maxlength' => true]) */?>

    <?/*= //$form->field($model, 'landlord_id')->textInput() */?>

   <?/*= //$form->field($model, 'u_status')->textInput() */?> -->

                            <?= $form->field($model, 'qq')->textInput(['class'=>"m-wrap span8"]) ?>
                            <div class="space10"></div>

                            <div class="submit-btn">
                                <a class="btn green" data-toggle="tab" href="#tab_2-2">下一步</a>


                                <a href="#" class="btn">Cancel</a>

                            </div>



                        </div>

                    </div>

                    <div id="tab_2-2" class="tab-pane ">

                        <div style="height: auto;" id="accordion2-2" class="accordion collapse">
                                <?= $form->field($model, 'name')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>

                                <?= $form->field($model, 'tel')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>

                                <?= $form->field($model, 'persen_id')->textInput(['maxlength' => true,'class'=>"m-wrap span8"]) ?>
                                <p>房东必须通过身份证验证 </p>

                                <br />

                                <div class="controls">

                                    <div class="thumbnail" style="width: 291px; height: 170px;">

                                        <img src="media/image/AAAAAA&amp;text=no+image" alt="" />

                                    </div>

                                </div>

                                <div class="space10"></div>

                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <?= $form->field($model, 'person_card')->widget('common\widgets\file_upload\FileUpload',[
                                        'config'=>[]
                                    ]) ?>
                                   <!-- <div class="input-append">

                                        <div class="uneditable-input">

                                            <i class="icon-file fileupload-exists"></i>

                                            <span class="fileupload-preview"></span>

                                        </div>

																		<span class="btn btn-file">

																		<span class="fileupload-new">Select file</span>

																		<span class="fileupload-exists">Change</span>

																		<input type="file" class="default" />

																		</span>

                                        <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>

                                    </div>-->

                                </div>

                                <div class="clearfix"></div>

                                <!--<div class="controls">

                                    <span class="label label-important">NOTE!</span>

                                    <span>You can write some information here..</span>

                                </div>-->

                                <div class="space10"></div>

                                <div class="submit-btn">

                                    <a  class="btn green" data-toggle="tab" href="#tab_3-3">下一步</a>

                                    <a class="btn" data-toggle="tab" href="#tab_1-1">上一步</a>

                                </div>

                            </form>

                        </div>

                    </div>

                    <div id="tab_3-3" class="tab-pane">

                        <div style="height: auto;" id="accordion3-3" class="accordion collapse">

                            <form action="#">

                                <label class="control-label">Current Password</label>

                                <input type="password" class="m-wrap span8" />

                                <label class="control-label">New Password</label>

                                <input type="password" class="m-wrap span8" />

                                <label class="control-label">Re-type New Password</label>

                                <input type="password" class="m-wrap span8" />

                                <div class="submit-btn">

                                    <a href="#" class="btn green">Change Password</a>

                                    <a href="#" class="btn">Cancel</a>

                                </div>

                            </form>

                        </div>

                    </div>

                    <div id="tab_4-4" class="tab-pane">

                        <div style="height: auto;" id="accordion4-4" class="accordion collapse">

                            <form action="#">

                                <div class="profile-settings row-fluid">

                                    <div class="span9">

                                        <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..</p>

                                    </div>

                                    <div class="control-group span3">

                                        <div class="controls">

                                            <label class="radio">

                                                <input type="radio" name="optionsRadios1" value="option1" />

                                                Yes

                                            </label>

                                            <label class="radio">

                                                <input type="radio" name="optionsRadios1" value="option2" checked />

                                                No

                                            </label>

                                        </div>

                                    </div>

                                </div>

                                <!--end profile-settings-->

                                <div class="profile-settings row-fluid">

                                    <div class="span9">

                                        <p>Enim eiusmod high life accusamus terry richardson ad squid wolf moon</p>

                                    </div>

                                    <div class="control-group span3">

                                        <div class="controls">

                                            <label class="checkbox">

                                                <input type="checkbox" value="" /> All

                                            </label>

                                            <label class="checkbox">

                                                <input type="checkbox" value="" /> Friends

                                            </label>

                                        </div>

                                    </div>

                                </div>

                                <!--end profile-settings-->

                                <div class="profile-settings row-fluid">

                                    <div class="span9">

                                        <p>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson</p>

                                    </div>

                                    <div class="control-group span3">

                                        <div class="controls">

                                            <label class="checkbox">

                                                <input type="checkbox" value="" /> Yes

                                            </label>

                                        </div>

                                    </div>

                                </div>

                                <!--end profile-settings-->

                                <div class="profile-settings row-fluid">

                                    <div class="span9">

                                        <p>Cliche reprehenderit enim eiusmod high life accusamus terry</p>

                                    </div>

                                    <div class="control-group span3">

                                        <div class="controls">

                                            <label class="checkbox">

                                                <input type="checkbox" value="" /> Yes

                                            </label>

                                        </div>

                                    </div>

                                </div>

                                <!--end profile-settings-->

                                <div class="profile-settings row-fluid">

                                    <div class="span9">

                                        <p>Oiusmod high life accusamus terry richardson ad squid wolf fwopo</p>

                                    </div>

                                    <div class="control-group span3">

                                        <div class="controls">

                                            <label class="checkbox">

                                                <input type="checkbox" value="" /> Yes

                                            </label>

                                        </div>

                                    </div>

                                </div>

                                <!--end profile-settings-->

                                <div class="space5"></div>

                                <div class="submit-btn">

                                        <?= Html::submitButton($model->isNewRecord ? '保存' : '保存', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

                                    <a href="#" class="btn green">Save Changes</a>

                                    <a href="#" class="btn">Cancel</a>

                                </div>

                            </form>

                        </div>

                    </div>

                </div>
                <?php ActiveForm::end(); ?>
            </div>

            <!--end span9-->

        </div>

    </div>

</div>

