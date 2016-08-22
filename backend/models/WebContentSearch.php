<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\WebContent;
use common\library\BaseFunction;
use common\library\UnlimitCat;
use common\library\Constants;
use backend\models\WebType;
use backend\models\WebContentPost;

/**
 * WebContentSearch represents the model behind the search form about `backend\models\WebContent`.
 */
class WebContentSearch extends WebContent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'type_id', 'user_id', 'last_user_id', 'created_at', 'updated_at', 'focus_count', 'favorite_count', 'view_count', 'comment_count', 'agree_count', 'against_count', 'recommend', 'headline', 'sticky', 'flag', 'allow_comment', 'sort_num', 'visibility', 'status'], 'integer'],
            [['user_name', 'last_user_name', 'password', 'view', 'layout', 'content_type', 'seo_title', 'seo_keywords', 'seo_description', 'title', 'sub_title', 'url_alias', 'redirect_url', 'summary', 'thumb', 'thumbs'], 'safe'],
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
    public function search($params, $types)
    {
        $query = WebContent::find()->where(['content_type' => $types]);

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
            'type_id' => $this->type_id,
            'user_id' => $this->user_id,
            'last_user_id' => $this->last_user_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'focus_count' => $this->focus_count,
            'favorite_count' => $this->favorite_count,
            'view_count' => $this->view_count,
            'comment_count' => $this->comment_count,
            'agree_count' => $this->agree_count,
            'against_count' => $this->against_count,
            'recommend' => $this->recommend,
            'headline' => $this->headline,
            'sticky' => $this->sticky,
            'flag' => $this->flag,
            'allow_comment' => $this->allow_comment,
            'sort_num' => $this->sort_num,
            'visibility' => $this->visibility,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'user_name', $this->user_name])
            ->andFilterWhere(['like', 'last_user_name', $this->last_user_name])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'view', $this->view])
            ->andFilterWhere(['like', 'layout', $this->layout])
            ->andFilterWhere(['like', 'content_type', $this->content_type])
            ->andFilterWhere(['like', 'seo_title', $this->seo_title])
            ->andFilterWhere(['like', 'seo_keywords', $this->seo_keywords])
            ->andFilterWhere(['like', 'seo_description', $this->seo_description])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'sub_title', $this->sub_title])
            ->andFilterWhere(['like', 'url_alias', $this->url_alias])
            ->andFilterWhere(['like', 'redirect_url', $this->redirect_url])
            ->andFilterWhere(['like', 'summary', $this->summary])
            ->andFilterWhere(['like', 'thumb', $this->thumb])
            ->andFilterWhere(['like', 'thumbs', $this->thumbs]);

        return $dataProvider;
    }

    public static function typeTree($act)
    {
        //获取分类树形数组
        $models = new WebType();
        $data  = new UnlimitCat();
        //print_r($act);die;
        $rows  = $models::find()->where(['category_id' =>BaseFunction::getconfig()[$act]])->Asarray()->all();

        $datas = $data->genCate($rows, 0, 0);
        array_unshift($datas, array('id'=> 0, 'name'=> '=根节点='));

        return $datas;
    }
    /**
     *  下拉筛选
     *  @column string 字段
     *  @value mix 字段对应的值，不指定则返回字段数组
     *  @return mix 返回某个值或者数组
     */
    public static function dropDown ($column, $value = null, $type = null)
    {

        $data = [];
        if ($type != null)
        {
            $rows = WebContentSearch::typeTree($type);
            array_shift ($rows);
            foreach ($rows as $k=>$v)
            {
                $data[$v['id']] = $v['name'];
            }
        }

        $dropDownList = [
            "status"=> [
                "0"=>"未审核",
                "1"=>"已审核",
            ],
            'type_id' => $data,
            //有新的字段要实现下拉规则，可像上面这样进行添加
            // ......
        ];
        //根据具体值显示对应的值
        //echo $column;die;
        if ($value !== null)

            return array_key_exists($column, $dropDownList) ? $dropDownList[$column][$value] : false;
        //返回关联数组，用户下拉的filter实现
        else
            return array_key_exists($column, $dropDownList) ? $dropDownList[$column] : false;
    }

    public function getPost()
    {
        $post = new WebContentPost();
        // 第一个参数为要关联的子表模型类名，
        // 第二个参数指定 通过子表的customer_id，关联主表的id字段
        return $this->hasOne($post::className(), ['content_id' => 'id']);
    }

    public function getPage()
    {
        $page = new WebContentPage();
        // 第一个参数为要关联的子表模型类名，
        // 第二个参数指定 通过子表的customer_id，关联主表的id字段
        return $this->hasOne($page::className(), ['content_id' => 'id']);
    }
}
