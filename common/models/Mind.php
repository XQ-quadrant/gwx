<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "mind".
 *
 * @property integer $id
 * @property string $username
 * @property string $content
 * @property integer $user_id
 * @property string $create_at
 * @property string $img
 * @property integer $status
 * @property integer $likes
 */
class Mind extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'mind';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content', 'user_id', 'img'], 'required'],
            [['content', 'img'], 'string'],
            [['user_id', 'status', 'likes'], 'integer'],
            [['create_at'], 'safe'],
            [['username'], 'string', 'max' => 250],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('mind', 'ID'),
            'username' => Yii::t('mind', 'Username'),
            'content' => Yii::t('mind', 'Content'),
            'user_id' => Yii::t('mind', 'User ID'),
            'create_at' => Yii::t('mind', 'Create At'),
            'img' => Yii::t('mind', 'Img'),
            'status' => Yii::t('mind', 'Status'),
            'likes' => Yii::t('mind', 'Likes'),
        ];
    }
}
