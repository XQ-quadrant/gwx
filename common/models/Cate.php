<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cate".
 *
 * @property integer $id
 * @property string $cindex
 * @property string $name
 * @property string $create_time
 * @property string $model
 * @property string $view_index
 * @property integer $pre_cate
 * @property integer $level
 * @property integer $status
 * @property string $uri
 * @property string $icon
 *
 * @property Aindex[] $aindices
 */
class Cate extends \yii\db\ActiveRecord
{

    const STATUS_AOLLOW = 1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cate';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cindex', 'name'], 'required'],
            [['create_time'], 'safe'],
            [['model', 'view_index', 'uri'], 'string'],
            [['pre_cate', 'level', 'status'], 'integer'],
            [['cindex', 'name', 'icon'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cindex' => 'Cindex',
            'name' => 'Name',
            'create_time' => 'Create Time',
            'model' => 'Model',
            'view_index' => 'View Index',
            'pre_cate' => 'Pre Cate',
            'level' => 'Level',
            'status' => 'Status',
            'uri' => 'Uri',
            'icon' => 'Icon',
        ];
    }

    public static $STATUS_DELETE = 0;
    public static $STATUS_AOLLOW = 1;
    public static $STATUS_CANCLE = 2;

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAindices()
    {
        return $this->hasMany(Aindex::className(), ['cate' => 'id']);
    }
    public static function getCateName($id)
    {
        return self::findOne(['id'=>$id]);
    }
}
