<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "lecture".
 *
 * @property integer $id
 * @property string $time
 * @property string $address
 * @property string $subject
 * @property string $content
 * @property string $lecturer
 * @property string $lecturer_info
 * @property string $hint
 * @property string $poster
 * @property string $icon
 */
class Lecture extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lecture';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['time', 'address', 'subject', 'lecturer'], 'required'],
            [['time'], 'safe'],
            [['content', 'lecturer_info', 'hint', 'poster', 'icon'], 'string'],
            [['address', 'subject', 'lecturer'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'time' => Yii::t('app', 'Time'),
            'address' => Yii::t('app', 'Address'),
            'subject' => Yii::t('app', 'Subject'),
            'content' => Yii::t('app', 'Content'),
            'lecturer' => Yii::t('app', 'Lecturer'),
            'lecturer_info' => Yii::t('app', 'Lecturer Info'),
            'hint' => Yii::t('app', 'Hint'),
            'poster' => Yii::t('app', 'Poster'),
            'icon' => Yii::t('app', 'Icon'),
        ];
    }
}
