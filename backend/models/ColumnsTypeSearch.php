<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ColumnsType;

/**
 * ColumnsTypeSearch represents the model behind the search form about `app\models\ColumnsType`.
 */
class ColumnsTypeSearch extends ColumnsType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['columns_type_id'], 'integer'],
            [['columns_type_name', 'columns_type_des'], 'safe'],
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
        $query = ColumnsType::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'columns_type_id' => $this->columns_type_id,
        ]);

        $query->andFilterWhere(['like', 'columns_type_name', $this->columns_type_name])
            ->andFilterWhere(['like', 'columns_type_des', $this->columns_type_des]);

        return $dataProvider;
    }
}
