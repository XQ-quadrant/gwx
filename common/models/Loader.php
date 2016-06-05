<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "loader".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $person_id
 * @property string $person_card
 * @property string $weibo
 * @property string $name
 * @property string $infro
 * @property string $tel
 * @property string $create_at
 */
class Loader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loader';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['id', 'user_id', 'person_id', 'person_card', 'name', 'infro', 'tel'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['person_card', 'weibo', 'infro'], 'string'],
            [['create_at'], 'safe'],
            [['person_id'], 'string', 'max' => 50],
            [['name', 'tel'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'person_id' => '身份证号',
            'person_card' => '身份证照片',
            'weibo' => '微博',
            'name' => '真实姓名',
            'infro' => '简介',
            'tel' => '电话',
            'create_at' => 'Create At',
        ];
    }
}
