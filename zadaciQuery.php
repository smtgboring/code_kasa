<?php

namespace app;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\zadaci;

/**
 * zadaciQuery represents the model behind the search form of `app\models\zadaci`.
 */
class zadaciQuery extends zadaci
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_zadatak', 'dodijeli_zadatak_id', 'projekat_id', 'status_id', 'prioritet_id', 'tura_id'], 'integer'],
            [['ime_zadatak', 'opis_zadatak', 'Firma', 'Kontakt', 'posrednik', 'datum', 'rok', 'datumDPO'], 'safe'],
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
        $query = zadaci::find();

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
            'id_zadatak' => $this->id_zadatak,
            'dodijeli_zadatak_id' => $this->dodijeli_zadatak_id,
            'projekat_id' => $this->projekat_id,
            'datum' => $this->datum,
            'rok' => $this->rok,
            'datumDPO' => $this->datumDPO,
            'status_id' => $this->status_id,
            'prioritet_id' => $this->prioritet_id,
            'tura_id' => $this->tura_id,
        ]);

        $query->andFilterWhere(['like', 'ime_zadatak', $this->ime_zadatak])
            ->andFilterWhere(['like', 'opis_zadatak', $this->opis_zadatak])
            ->andFilterWhere(['like', 'Firma', $this->Firma])
            ->andFilterWhere(['like', 'Kontakt', $this->Kontakt])
            ->andFilterWhere(['like', 'posrednik', $this->posrednik]);

        return $dataProvider;
    }
}
