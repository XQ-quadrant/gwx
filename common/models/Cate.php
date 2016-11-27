<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;

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
class Cate extends  ActiveRecord
{

    const STATUS_AOLLOW = 1;
    //const STATUS_pic = 3;
    const TYPE_list = 1;    //文章列表 ， 默认文章列表链接
    const TYPE_precate = 2; //上级菜单， 没有链接
    const TYPE_link = 3;    //自定义链接
    const TYPE_document = 4;    //文章
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
            [['status', 'name'], 'required'],
            [['create_time'], 'safe'],
            [['model', 'view_index', 'uri'], 'string'],
            [['pre_cate', 'level', 'status','type'], 'integer'],
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
            'cindex' => Yii::t('model', 'Cindex'),
            'name' => Yii::t('model','Name'),
            'create_time' => Yii::t('model','Create Time'),
            'model' => Yii::t('model','Model'),
            'view_index' => Yii::t('model','View Index'),
            'pre_cate' => Yii::t('model','Pre Cate'),
            'level' => Yii::t('model','Level'),
            'status' => Yii::t('model','Status'),
            'uri' => Yii::t('model','Uri'),
            'icon' => Yii::t('model','Icon'),
            'type' => Yii::t('model','Type'),
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
