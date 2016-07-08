<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property integer $id
 * @property string $title
 * @property string $breviary
 * @property string $content
 * @property string $author
 * @property integer $cate
 * @property string $view
 * @property integer $status
 * @property integer $level
 * @property string $create_at
 * @property string $pic
 * @property integer $create_by
 */
class Document extends \yii\db\ActiveRecord
{
    const STATUS_AOLLOW=1;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'cate'], 'required'],
            [['breviary', 'content', 'pic'], 'string'],
            [['cate', 'status', 'level', 'create_by'], 'integer'],
            [['create_at'], 'safe'],
            [['title', 'view'], 'string', 'max' => 250],
            [['author'], 'string', 'max' => 100],
            [['level'], 'default', 'value'=>10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => '标题',
            'breviary' => '概要',
            'content' => '内容',
            'author' => '作者',
            'cate' => '栏目',
            'status' => '状态',
            'level' => '优先级',
            'create_at' => '创建日期',
            'pic' => '封面图',
            'create_by' => '创建者',
        ];
    }
}
