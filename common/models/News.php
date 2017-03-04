<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
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
 * @property integer $level
 */
class News extends \yii\db\ActiveRecord
{
    public  $STATUS_AOLLOW =1;
    const STATUS_AOLLOW =1;
    public static $STATUS_DELETE =0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'cate', 'type', 'views', 'status'], 'required'],
            [['breviary', 'content'], 'string'],
            [['cate', 'views', 'status', 'level'], 'integer'],
            [['title', 'type'], 'string', 'max' => 250],
            [['author'], 'string', 'max' => 100],
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
            'level' => 'Level',
        ];
    }
}
