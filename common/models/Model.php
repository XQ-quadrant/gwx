<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "model".
 *
 * @property integer $id
 * @property string $name
 * @property string $identity
 * @property string $link
 * @property string $list_extra
 * @property string $view_detail
 * @property string $view_edit
 * @property string $view_add
 * @property string $view_other
 * @property string $rules
 * @property integer $status
 * @property string $createtime
 * @property string $updatetime
 */
class Model extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'model';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'identity', 'list_extra', 'rules'], 'required'],
            [['link', 'list_extra', 'view_detail', 'view_edit', 'view_other', 'rules'], 'string'],
            [['status'], 'integer'],
            [['createtime', 'updatetime'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['identity', 'view_add'], 'string', 'max' => 250],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'identity' => 'Identity',
            'link' => 'Link',
            'list_extra' => 'List Extra',
            'view_detail' => 'View Detail',
            'view_edit' => 'View Edit',
            'view_add' => 'View Add',
            'view_other' => 'View Other',
            'rules' => 'Rules',
            'status' => 'Status',
            'createtime' => 'Createtime',
            'updatetime' => 'Updatetime',
        ];
    }
}
