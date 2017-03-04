<?php

namespace common\models;

use common\components\Uploader;
use Yii;
use yii\db\Query;
use yii\data\Pagination;

/**
 * This is the model class for table "room".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $pic
 * @property double $price
 * @property string $address
 * @property string $content
 * @property string $connect
 * @property string $atrribute
 * @property string $tag
 * @property double $area
 * @property string $facility
 * @property string $rules
 * @property string $site
 * @property integer $userlimit
 * @property string $starttime
 * @property integer $status
 * @property string $createtime
 * @property string $updatetime
 */
class Room extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'price', 'address', 'connect', 'area'], 'required'],
            [['user_id', 'userlimit', 'status'], 'integer'],
            [['pic', 'content', 'tag', 'facility', 'rules', 'site'], 'string'],
            [['price', 'area'], 'number'],
            [['starttime', 'createtime', 'updatetime'], 'safe'],
            [['title', 'connect'], 'string', 'max' => 100],
            [['address'], 'string', 'max' => 150],
            [['atrribute'], 'string', 'max' => 250]
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
            'title' => '标题',
            'pic' => '封面图片',
            'price' => '价格',
            'address' => '地址',
            'content' => '详细描述',
            'connect' => '联系方式',
            'atrribute' => '类型',
            'tag' => '标签',
            'area' => '面积',
            'facility' => '设施',
            'rules' => '规则',
            'site' => '坐标',
            'pay' => '支付方式',
            'userlimit' => '可住人数',
            'starttime' => '起始时间',
            'status' => '状态',
            'createtime' => '创建时间',
            'updatetime' => 'Updatetime',
        ];
    }
    public function scenarios()
    {
        $scenarios = parent::scenarios();
        $scenarios['pic'] = [];
        //$scenarios['register'] = ['username', 'email', 'password'];
        return $scenarios;
    }

    public function upload()
    {
        $config = [
            'savePath' => Yii::getAlias('@webroot/uploads/user/'), //存储文件夹
            'maxSize' => 2048 ,//允许的文件最大尺寸，单位KB
            'allowFiles' => ['.gif' , '.png' , '.jpg' , '.jpeg' , '.bmp'],  //允许的文件格式
        ];
        $up = new Uploader("file", $config, 'album'.$this->id);
        $info = $up->getFileInfo();

        //存入数据库
        Yii::$app->db->createCommand()->insert('photo', [
            'name' => $this->title,
            'path' => Yii::getAlias('@web/uploads/user/') . $this->user_id . '/' . $info['name'], //存储路径
            'store_name' => $info['name'], //保存的名称
            'album_id' => $this->id,
            'created_at' => time(),
            'created_by' => Yii::$app->user->id,
        ])->execute();
    }

    public function getPhotos()
    {
        $query = new Query;
        $query = $query->select('id, name, path')
            ->from('photo')
            ->where('album_id=:id', [':id' => $this->id]);
        $photos = $query->all();
        //$photos = Yii::$app->tools->Pagination($query);
        //$photos = $query->//Yii::$app->tools->Pagination($query);
        //echo $this->id;
        //var_dump($photos);die();
        //$query = Article::find()->where(['status' => 1]);
        $countQuery = clone $query;
        //$pages = new Pagination(['totalCount' => $countQuery->count()]);
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
        //return $photos;
        return [
            'photos' => $photos,
            'pages' => $pages
        ];
    }

}
