<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Divisionexploration;

/**
 * DivisionexplorationSearch represents the model behind the search form of `app\models\Divisionexploration`.
 */
class DivisionexplorationSearch extends Divisionexploration
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_puits', 'le_groupe_Exploitant', 'bloc', 'zone', 'phase'], 'integer'],
            [['nom_puits', 'nom_reservoir', 'bassin', 'date_debut', 'date_fin'], 'safe'],
            [['latitude', 'longitude'], 'number'],
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
        $query = Divisionexploration::find();

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
            'id_puits' => $this->id_puits,
            'le_groupe_Exploitant' => $this->le_groupe_Exploitant,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'bloc' => $this->bloc,
            'zone' => $this->zone,
            'phase' => $this->phase,
            'date_debut' => $this->date_debut,
            'date_fin' => $this->date_fin,
        ]);

        $query->andFilterWhere(['like', 'nom_puits', $this->nom_puits])
            ->andFilterWhere(['like', 'nom_reservoir', $this->nom_reservoir])
            ->andFilterWhere(['like', 'bassin', $this->bassin]);

        return $dataProvider;
    }
}
