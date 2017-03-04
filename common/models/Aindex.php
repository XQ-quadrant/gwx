<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "aindex".
 *
 * @property integer $id
 * @property integer $cate
 * @property integer $model_id
 * @property string $title
 * @property integer $atc_id
 * @property integer $uid
 * @property integer $status
 * @property string $createtime
 * @property string $updatetime
 *
 * @property Cate $cate0
 */
class Aindex extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aindex';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cate', 'model_id', 'atc_id'], 'required'],
            [['cate', 'model_id', 'atc_id', 'uid', 'status'], 'integer'],
            [['createtime', 'updatetime'], 'safe'],
            [['title'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cate' => 'Cate',
            'model_id' => 'Model ID',
            'title' => 'Title',
            'atc_id' => 'Atc ID',
            'uid' => 'Uid',
            'status' => 'Status',
            'createtime' => 'Createtime',
            'updatetime' => 'Updatetime',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCate0()
    {
        return $this->hasOne(Cate::className(), ['id' => 'cate']);
    }
}
