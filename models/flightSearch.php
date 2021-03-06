<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\flight;

/**
 * flightSearch represents the model behind the search form of `app\models\flight`.
 */
class flightSearch extends flight
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_flight', 'id_train', 'price', 'start_end', 'from', 'to'], 'integer'],
            [['start', 'time_start', 'time_end', 'end'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = flight::find();

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
            'id_flight' => $this->id_flight,
            'id_train' => $this->id_train,
            'price' => $this->price,
            'start' => $this->start,
            'time_start' => $this->time_start,
            'time_end' => $this->time_end,
            'end' => $this->end,
            'start_end' => $this->start_end,
            'from' => $this->from,
            'to' => $this->to,
        ]);

        return $dataProvider;
    }
}
