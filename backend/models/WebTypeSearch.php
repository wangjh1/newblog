<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WebType;

/**
 * WebTypeSearch represents the model behind the search form about `backend\models\WebType`.
 */
class WebTypeSearch extends WebType
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'parent_id', 'page_size', 'contents', 'sort_num'], 'integer'],
            [['category_id', 'name', 'url_alias', 'redirect_url', 'thumb', 'description', 'list_view', 'list_layout', 'detail_view', 'detail_layout', 'seo_title', 'seo_keywords', 'seo_description'], 'safe'],
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
        $query = WebType::find();

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
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'page_size' => $this->page_size,
            'contents' => $this->contents,
            'sort_num' => $this->sort_num,
        ]);

        $query->andFilterWhere(['like', 'category_id', $this->category_id])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'url_alias', $this->url_alias])
            ->andFilterWhere(['like', 'redirect_url', $this->redirect_url])
            ->andFilterWhere(['like', 'thumb', $this->thumb])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'list_view', $this->list_view])
            ->andFilterWhere(['like', 'list_layout', $this->list_layout])
            ->andFilterWhere(['like', 'detail_view', $this->detail_view])
            ->andFilterWhere(['like', 'detail_layout', $this->detail_layout])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_keywords', $this->seo_keywords])
            ->andFilterWhere(['like', 'seo_description', $this->seo_description]);

        return $dataProvider;
    }
}
