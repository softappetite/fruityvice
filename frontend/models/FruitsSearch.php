<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Fruits;

/**
 * FruitsSearch represents the model behind the search form of `common\models\Fruits`.
 */
class FruitsSearch extends Fruits
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fruit_id'], 'integer'],
            [['name', 'family', 'order', 'genus'], 'safe'],
            [['nut_calories', 'nut_fat', 'nut_sugar', 'nut_carbohydrates', 'nut_protein'], 'number'],
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
        $query = Fruits::find();

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
		
		if(isset($params['added_fav']))
			$query->andFilterWhere(['added_fav'=>1]);

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'fruit_id' => $this->fruit_id,
            'nut_calories' => $this->nut_calories,
            'nut_fat' => $this->nut_fat,
            'nut_sugar' => $this->nut_sugar,
            'nut_carbohydrates' => $this->nut_carbohydrates,
            'nut_protein' => $this->nut_protein,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'family', $this->family])
            ->andFilterWhere(['like', 'order', $this->order])
            ->andFilterWhere(['like', 'genus', $this->genus]);

        return $dataProvider;
    }
}
