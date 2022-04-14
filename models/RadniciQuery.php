<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Radnici;

/**
 * RadniciQuery represents the model behind the search form of `app\models\Radnici`.
 */
class RadniciQuery extends Radnici
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'projekti_id', 'zadaci_id'], 'integer'],
            [['ime'], 'safe'],
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
        $query = Radnici::find();

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
            'projekti_id' => $this->projekti_id,
            'zadaci_id' => $this->zadaci_id,
        ]);

        $query->andFilterWhere(['like', 'ime', $this->ime]);

        return $dataProvider;
    }
}
