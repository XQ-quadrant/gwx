<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Max;

/**
 * MaxSearch represents the model behind the search form about `common\models\Max`.
 */
class MaxSearch extends Max
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'views', 'number', 'status', 'level', 'likes'], 'integer'],
            [['content', 'sex', 'pic', 'created_at'], 'safe'],
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
        $query = Max::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' => $this->user_id,
            'views' => $this->views,
            'number' => $this->number,
            'created_at' => $this->created_at,
            'status' => $this->status,
            'level' => $this->level,
            'likes' => $this->likes,
        ]);

        $query->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'pic', $this->pic]);

        return $dataProvider;
    }
}
