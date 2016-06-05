<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

            <?php $form = ActiveForm::begin(['id' => 'login-form','options'=>['class'=>'form-vertical login-form']]); ?>

            <h3 class="form-title">登录</h3>

            <div class="alert alert-error hide">

                <button class="close" data-dismiss="alert"></button>

                <span>输入名称或邮箱</span>

            </div>
            <div class="control-group">

            <?= $form->field($model, 'username',[
                'inputOptions'=>['class'=>'m-wrap placeholder-no-fix','placeholder'=> $model->getAttributeLabel('username'),],
                'template' => '<label class="control-label visible-ie8 visible-ie9">Username</label>
				<div class="controls">
				<div class="input-icon left"><i class="icon-user"></i>{input}</div>
				</div>{error}{hint}'
            ])
                ->textInput(['autofocus' => true])
                ->label(false) ?>

            </div>

            <div class="control-group">
                <?= $form->field($model, 'password',[
                    'inputOptions'=>['class'=>'m-wrap placeholder-no-fix','placeholder'=>$model->getAttributeLabel('password')],
                    'template' =>
                        '<label class="control-label visible-ie8 visible-ie9">密码</label>
                            <div class="controls">
                            <div class="input-icon left"><i class="icon-user"></i>{input}</div>
                         </div>{error}{hint}'
                    ])
                    ->passwordInput()
                    ->label(false) ?>
            </div>


<div class="form-actions">
    <label class="checkbox">
            <?= $form->field($model, 'rememberMe')->checkbox() ?>
    </label>
            <div class="form-group">
                <?= Html::submitButton('登录', ['class' => 'btn green pull-right', 'name' => 'login-button']) ?>
            </div>
</div>
<div class="forget-password">


    <p><a href="javascript:;" class="" id="forget-password">忘记密码?找回</a>    </p>

</div>

<div class="create-account">

    <p>

       <a href="javascript:;" id="register-btn" class="">新用户 ？注册</a>

    </p>

</div>
            <?php ActiveForm::end(); ?>




