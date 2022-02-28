<?php

namespace app;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Projekti;

/**
 * ProjektiQuerry represents the model behind the search form of `app\models\Projekti`.
 */
class ProjektiQuerry extends Projekti
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Odgovorna_Osoba_id', 'Klasna_Oznaka_id'], 'integer'],
            [['Naziv_Projekta', 'Podnaziv', 'Boja', 'Slicica'], 'safe'],
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
        $query = Projekti::find();

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
            'Odgovorna_Osoba_id' => $this->Odgovorna_Osoba_id,
            'Klasna_Oznaka_id' => $this->Klasna_Oznaka_id,
        ]);

        $query->andFilterWhere(['like', 'Naziv_Projekta', $this->Naziv_Projekta])
            ->andFilterWhere(['like', 'Podnaziv', $this->Podnaziv])
            ->andFilterWhere(['like', 'Boja', $this->Boja])
            ->andFilterWhere(['like', 'Slicica', $this->Slicica]);

        return $dataProvider;
    }
}
