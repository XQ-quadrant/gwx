<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pic".
 *
 * @property integer $id
 * @property string $content
 * @property string $url
 * @property string $savepath
 * @property string $savename
 * @property string $title
 * @property string $createtime
 * @property integer $size
 * @property string $type
 * @property string $ext
 * @property integer $status
 */
class Pic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'savepath','status'], 'required'],
            [['content', 'url', 'savename'], 'string'],
            [[ 'size', 'status','category'], 'integer'],
            [['createtime'], 'safe'],
            [['savepath', 'title'], 'string', 'max' => 250],
            [['type', 'ext'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('model/pic','ID'),
            'content' => Yii::t('model/pic','Content'),
            'url' => Yii::t('model/pic','Url'),
            'savepath' => Yii::t('model/pic','Savepath'),
            'savename' => Yii::t('model/pic','Savename'),
            'createtime' => Yii::t('model/pic','Createtime'),
            'size' => Yii::t('model/pic','Size'),
            'type' => 'Type',
            'ext' => 'Ext',
            'status' => Yii::t('model/pic','Status'),
            'level' => Yii::t('model/pic','Level'),
            'category' => Yii::t('model/pic','Category'),
        ];
    }
}
