<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\News;

/**
 * NewsSearch represents the model behind the search form about `app\models\News`.
 */
class NewsSearch extends News
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'norder', 'recmd', 'hits', 'ispass', 'addtime', 'extfield'], 'integer'],
            [['columns_id', 'exsort', 'user_id', 'title', 'places', 'color', 'picture', 'keywords', 'description', 'content', 'method', 'tpcontent', 'origin', 'releids'], 'safe'],
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
        $query = News::find();

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
            'norder' => $this->norder,
            'recmd' => $this->recmd,
            'hits' => $this->hits,
            'ispass' => $this->ispass,
            'addtime' => $this->addtime,
            'extfield' => $this->extfield,
        ]);

        $query->andFilterWhere(['like', 'columns_id', $this->columns_id])
            ->andFilterWhere(['like', 'exsort', $this->exsort])
            ->andFilterWhere(['like', 'user_id', $this->user_id])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'places', $this->places])
            ->andFilterWhere(['like', 'color', $this->color])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'keywords', $this->keywords])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'method', $this->method])
            ->andFilterWhere(['like', 'tpcontent', $this->tpcontent])
            ->andFilterWhere(['like', 'origin', $this->origin])
            ->andFilterWhere(['like', 'releids', $this->releids]);

        return $dataProvider;
    }

    /**
     *  下拉筛选
     *  @column string 字段
     *  @value mix 字段对应的值，不指定则返回字段数组
     *  @return mix 返回某个值或者数组
     */
    public static function dropDown ($column, $value = null)
    {
        $dropDownList = [
            "recmd"=> [
                "0"=>"显示",
                "1"=>"删除",
            ],
            "places"=> [
                "0"=>"否",
                "1"=>"是",
            ],
            //有新的字段要实现下拉规则，可像上面这样进行添加
            // ......
        ];
        //根据具体值显示对应的值
        if ($value !== null)
            return array_key_exists($column, $dropDownList) ? $dropDownList[$column][$value] : false;
        //返回关联数组，用户下拉的filter实现
        else
            return array_key_exists($column, $dropDownList) ? $dropDownList[$column] : false;
    }
}
