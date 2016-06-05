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
 * @property string $type
 * @property integer $views
 * @property integer $status
 */
class Document extends \yii\db\ActiveRecord
{
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
            [['title', 'content', 'cate', ], 'required'],
            [['breviary', 'content'], 'string'],
            [['cate', 'views', 'status'], 'integer'],
            [['title', 'type'], 'string', 'max' => 250],
            [['author'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'breviary' => 'Breviary',
            'content' => 'Content',
            'author' => 'Author',
            'cate' => 'Cate',
            'type' => 'Type',
            'views' => 'Views',
            'status' => 'Status',
        ];
    }
}
