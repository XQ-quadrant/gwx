<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Room;

/**
 * RoomSearch represents the model behind the search form about `common\models\Room`.
 */
class RoomSearch extends Room
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'userlimit', 'status'], 'integer'],
            [['title', 'pic', 'address', 'content', 'connect', 'atrribute', 'tag', 'facility', 'rules', 'site', 'starttime', 'createtime', 'updatetime'], 'safe'],
            [[ 'area'], 'number'],
            [[ 'price'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Room::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

       // $this->sort();

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            //'price' => $this->price,
            'area' => $this->area,
            'userlimit' => $this->userlimit,
            'starttime' => $this->starttime,
            'status' => $this->status,
            'atrribute' => $this->atrribute,
            'createtime' => $this->createtime,
            'updatetime' => $this->updatetime,
        ]);


        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'pic', $this->pic])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'connect', $this->connect])
           // ->andFilterWhere(['like', 'atrribute', $this->atrribute])
            ->andFilterWhere(['like', 'tag', $this->tag])
            ->andFilterWhere(['like', 'facility', $this->facility])
            ->andFilterWhere(['like', 'rules', $this->rules])
            ->andFilterWhere(['like', 'site', $this->site]);
            //->andFilterWhere(['between', 'price', $this->price_max, $this->price_min]);
            //->andFilterWhere(['eq', 'price', $this->price_min]);
        if(!empty($this->price)){
            $price = explode('-',$this->price,2);
            $price_max = (int)$price[1];
            $price_min = (int)$price[0];
            //echo $this->price_min;die();
            $query->andFilterWhere(['>=', 'price', $price_min])
            ->andFilterWhere(['<=', 'price', $price_max]);
        }

        return $dataProvider;
    }


}
