<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "collect".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $room_id
 * @property string $created_at
 * @property integer $status
 */
class Collect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'room_id', 'status'], 'required'],
            [['user_id', 'room_id', 'status'], 'integer'],
            [['created_at'], 'safe']
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
            'room_id' => 'Room ID',
            'created_at' => 'Created At',
            'status' => 'Status',
        ];
    }

    public function addCollect(){
        $this->user_id= \Yii::$app->user->identity->id;
        if($this->save()){

        }

    }

}
