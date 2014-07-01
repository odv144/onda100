<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sorteo;

/**
 * SorteoSearch represents the model behind the search form about `app\models\Sorteo`.
 */
class SorteoSearch extends Sorteo
{
    public function rules()
    {
        return [
            [['id', 'canPremios'], 'integer'],
            [['iniSorteo', 'finSorteo'], 'safe'],
            [['realizado'], 'boolean'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Sorteo::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'iniSorteo' => $this->iniSorteo,
            'finSorteo' => $this->finSorteo,
            'realizado' => $this->realizado,
            'canPremios' => $this->canPremios,
            
        ]);

        return $dataProvider;
    }
}
