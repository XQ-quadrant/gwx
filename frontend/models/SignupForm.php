<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $repassword;
    public $verifyCode;
    //public $status;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['username', 'filter', 'filter' => 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => '该用户名已存在'],
            ['username', 'string', 'min' => 2, 'max' => 16],
            ['username', 'match','pattern'=>'/^[(\x{4E00}-\x{9FA5})a-zA-Z]+[(\x{4E00}-\x{9FA5})a-zA-Z_\d]*$/u','message'=>'用户名由字母，汉字，数字，下划线组成，且不能以数字和下划线开头。'],

            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => '该邮箱已注册'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
            [['password','repassword'], 'required'],
            [['password','repassword'], 'string', 'min' => 6],
            ['repassword', 'compare', 'compareAttribute' => 'password','message'=>'两次输入的密码不一致！'],
            ['verifyCode', 'captcha'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'username' => '用户名',
            'password'=> '密码',
            'email' => '邮箱',
            'repassword' => '确认密码',
            'verifyCode' => '验证码'
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }

        $user = new User();
        $user->username = $this->username;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        //$user->setStatus(User::STATUS_VERIFY);
       //var_dump($user->getErrors());die();
        return $user->save() ? $user : null;

        ///var_dump($user->save());die();
        //return $user;
    }

    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_VERIFY,
            'email' => $this->email,
        ]);

        if (!$user) {
            return false;
        }

        /*if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
            $user->generatePasswordResetToken();
        }*/

        $user->verify_str = "";
        if (!$user->save()) {
            return false;
        }
        return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'],
                ['user' => $user]
            )
            // ->setFrom([\Yii::$app->params['supportEmail'] => ' robot'])
            ->setFrom(['quadrantone@163.com' => '宿宿网'])
            ->setTo($this->email)
            ->setSubject(' 重置密码 宿宿网' )
            ->send();
       /* return Yii::$app
            ->mailer
            ->compose(
                ['html' => 'signupVerify-html', 'text' => 'signupVerify-text'],
                ['user' => $user]
            )
             ->setFrom([\Yii::$app->params['supportEmail'] => ' robot'])
            ->setFrom(['quadrantone@163.com' => '宿宿网'])
            ->setTo($this->email)
            ->setSubject(' 邮箱验证信息' )
            ->send();*/
    }

    /*public function verify()
    {

    }*/
}
