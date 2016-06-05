<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "userinfo".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $persen_id
 * @property string $email
 * @property string $weibo
 * @property integer $address
 * @property string $intro
 * @property string $tel
 * @property string $icon
 * @property string $signture
 * @property string $stu_id
 * @property integer $landlord_id
 * @property integer $u_status
 * @property integer $qq
 */
class Userinfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'userinfo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['name', 'persen_id', 'email', 'weibo', 'address', 'intro', 'tel', 'icon', 'signture', 'stu_id', 'landlord_id', 'u_status', 'qq'], 'required'],
            [['address', 'landlord_id', 'u_status', 'qq'], 'integer'],
            [['intro', 'icon'], 'string'],
            [['name', 'email'], 'string', 'max' => 50],
            [['persen_id', 'tel', 'stu_id'], 'string', 'max' => 20],
            [['weibo', 'school'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => '名字',
            'persen_id' => '身份证号',
            'email' => '邮箱',
            'weibo' => '微博',
            'address' => '地址',
            'intro' => '简介',
            'tel' => '电话',
            'icon' => '头像',
            'school' => '学校',
            'stu_id' => '学号',
            'person_card' => '身份证照片',
            //'landlord_id' => 'Landlord ID',
            //'u_status' => 'U Status',
            'qq' => 'QQ',
        ];
    }
}
