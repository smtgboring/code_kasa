<?php

namespace app;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Partneri;

/**
 * PartneriQuery represents the model behind the search form of `app\models\Partneri`.
 */
class PartneriQuery extends Partneri
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_partneri', 'Tel', 'Fax', 'Mob', 'pos_br'], 'integer'],
            [['Ime', 'Email', 'Vrsta', 'Napravio', 'CreatedAt', 'Web', 'Adresa', 'Adresa2', 'Grad', 'Drzava', 'JIB', 'PDV', 'Datum_rodjenja', 'Broj_LK', 'Mjesto_izdavanja_lk'], 'safe'],
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
        $query = Partneri::find();

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
            'id_partneri' => $this->id_partneri,
            'Tel' => $this->Tel,
            'Fax' => $this->Fax,
            'Mob' => $this->Mob,
            'CreatedAt' => $this->CreatedAt,
            'pos_br' => $this->pos_br,
            'Datum_rodjenja' => $this->Datum_rodjenja,
        ]);

        $query->andFilterWhere(['like', 'Ime', $this->Ime])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Vrsta', $this->Vrsta])
            ->andFilterWhere(['like', 'Napravio', $this->Napravio])
            ->andFilterWhere(['like', 'Web', $this->Web])
            ->andFilterWhere(['like', 'Adresa', $this->Adresa])
            ->andFilterWhere(['like', 'Adresa2', $this->Adresa2])
            ->andFilterWhere(['like', 'Grad', $this->Grad])
            ->andFilterWhere(['like', 'Drzava', $this->Drzava])
            ->andFilterWhere(['like', 'JIB', $this->JIB])
            ->andFilterWhere(['like', 'PDV', $this->PDV])
            ->andFilterWhere(['like', 'Broj_LK', $this->Broj_LK])
            ->andFilterWhere(['like', 'Mjesto_izdavanja_lk', $this->Mjesto_izdavanja_lk]);

        return $dataProvider;
    }
}
