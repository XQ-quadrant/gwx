<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Aindex;

/**
 * AindexSearch represents the model behind the search form about `common\models\Aindex`.
 */
class AindexSearch extends Aindex
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'cate', 'model_id', 'atc_id', 'uid', 'status'], 'integer'],
            [['title', 'createtime', 'updatetime'], 'safe'],
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
        $query = Aindex::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'cate' => $this->cate,
            'model_id' => $this->model_id,
            'atc_id' => $this->atc_id,
            'uid' => $this->uid,
            'status' => $this->status,
            'createtime' => $this->createtime,
            'updatetime' => $this->updatetime,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}
