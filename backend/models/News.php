<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $columns_id
 * @property string $exsort
 * @property string $user_id
 * @property string $title
 * @property string $places
 * @property string $color
 * @property string $picture
 * @property string $keywords
 * @property string $description
 * @property string $content
 * @property string $method
 * @property string $tpcontent
 * @property integer $norder
 * @property integer $recmd
 * @property integer $hits
 * @property integer $ispass
 * @property string $origin
 * @property integer $addtime
 * @property string $releids
 * @property integer $extfield
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['columns_id', 'exsort', 'user_id', 'title', 'places', 'color', 'picture', 'keywords', 'description', 'content', 'method', 'tpcontent', 'norder', 'recmd', 'hits', 'ispass', 'origin', 'addtime', 'releids'], 'required'],
            [['content'], 'string'],
            [['norder', 'recmd', 'hits', 'ispass', 'addtime', 'extfield'], 'integer'],
            [['columns_id', 'exsort'], 'string', 'max' => 350],
            [['user_id'], 'string', 'max' => 15],
            [['title'], 'string', 'max' => 60],
            [['places', 'method', 'tpcontent'], 'string', 'max' => 100],
            [['color'], 'string', 'max' => 7],
            [['picture'], 'string', 'max' => 80],
            [['keywords'], 'string', 'max' => 300],
            [['description'], 'string', 'max' => 600],
            [['origin'], 'string', 'max' => 30],
            [['releids'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'columns_id' => 'Columns ID',
            'exsort' => 'Exsort',
            'user_id' => 'User ID',
            'title' => '标题',
            'places' => 'Places',
            'color' => 'Color',
            'picture' => '缩略图',
            'keywords' => 'Keywords',
            'description' => '摘要',
            'content' => 'Content',
            'method' => 'Method',
            'tpcontent' => 'Tpcontent',
            'norder' => 'Norder',
            'recmd' => 'Recmd',
            'hits' => 'Hits',
            'ispass' => 'Ispass',
            'origin' => 'Origin',
            'addtime' => '发布时间',
            'releids' => 'Releids',
            'extfield' => 'Extfield',
        ];
    }
}
