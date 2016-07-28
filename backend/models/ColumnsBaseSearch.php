<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ColumnsBase;

/**
 * ColumnsBaseSearch represents the model behind the search form about `app\models\ColumnsBase`.
 */
class ColumnsBaseSearch extends ColumnsBase
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['columns_id', 'parent_id', 'columns_type_id', 'columns_show', 'columns_sequence', 'columns_upload_config'], 'integer'],
            [['columns_name', 'columns_app', 'columns_urlname', 'columns_subname', 'columns_image', 'columns_tpl', 'columns_keywords', 'columns_description'], 'safe'],
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
        $query = ColumnsBase::find();

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
            'columns_id' => $this->columns_id,
            'parent_id' => $this->parent_id,
            'columns_type_id' => $this->columns_type_id,
            'columns_show' => $this->columns_show,
            'columns_sequence' => $this->columns_sequence,
            'columns_upload_config' => $this->columns_upload_config,
        ]);

        $query->andFilterWhere(['like', 'columns_name', $this->columns_name])
            ->andFilterWhere(['like', 'columns_app', $this->columns_app])
            ->andFilterWhere(['like', 'columns_urlname', $this->columns_urlname])
            ->andFilterWhere(['like', 'columns_subname', $this->columns_subname])
            ->andFilterWhere(['like', 'columns_image', $this->columns_image])
            ->andFilterWhere(['like', 'columns_tpl', $this->columns_tpl])
            ->andFilterWhere(['like', 'columns_keywords', $this->columns_keywords])
            ->andFilterWhere(['like', 'columns_description', $this->columns_description]);

        return $dataProvider;
    }
}
