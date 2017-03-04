<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "max".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $content
 * @property integer $views
 * @property integer $number
 * @property string $sex
 * @property string $pic
 * @property string $created_at
 * @property integer $status
 * @property integer $level
 * @property integer $likes
 */
class Max extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'max';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'content'], 'required'],
            [['id', 'user_id', 'views', 'number', 'status', 'level', 'likes'], 'integer'],
            [['content', 'sex', 'pic'], 'string'],
            [['created_at'], 'safe']
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
            'content' => 'Content',
            'views' => 'Views',
            'number' => 'Number',
            'sex' => 'Sex',
            'pic' => 'Pic',
            'created_at' => 'Created At',
            'status' => 'Status',
            'level' => 'Level',
            'likes' => 'Likes',
        ];
    }
}
