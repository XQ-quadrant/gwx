<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Cate;

/**
 * CateSearch represents the model behind the search form about `common\models\Cate`.
 */
class CateSearch extends Cate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'pre_cate', 'level', 'status'], 'integer'],
            [['cindex', 'name', 'create_time', 'model', 'view_index', 'uri', 'icon'], 'safe'],
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
        $query = Cate::find();

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
            'create_time' => $this->create_time,
            'pre_cate' => $this->pre_cate,
            'level' => $this->level,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'cindex', $this->cindex])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'model', $this->model])
            ->andFilterWhere(['like', 'view_index', $this->view_index])
            ->andFilterWhere(['like', 'uri', $this->uri])
            ->andFilterWhere(['like', 'icon', $this->icon]);

        return $dataProvider;
    }
}
