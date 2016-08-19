<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "web_type".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $category_id
 * @property string $name
 * @property string $url_alias
 * @property string $redirect_url
 * @property string $thumb
 * @property string $description
 * @property integer $page_size
 * @property string $list_view
 * @property string $list_layout
 * @property string $detail_view
 * @property string $detail_layout
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property integer $contents
 * @property integer $sort_num
 */
class WebType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'sort_num'], 'required'],
            [['page_size', 'sort_num'], 'integer'],
            [['category_id', 'name', 'url_alias', 'list_view', 'list_layout', 'detail_view', 'detail_layout'], 'string', 'max' => 64],
            [['redirect_url', 'thumb'], 'string', 'max' => 128],
            [['description', 'seo_title', 'seo_keywords', 'seo_description'], 'string', 'max' => 256]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'parent_id' => Yii::t('app', '父节点'),
            'category_id' => Yii::t('app', 'Category ID'),
            'name' => Yii::t('app', '名称'),
            'url_alias' => Yii::t('app', '别名'),
            'redirect_url' => Yii::t('app', '跳转链接'),
            'thumb' => Yii::t('app', '缩略图'),
            'description' => Yii::t('app', '描述'),
            'page_size' => Yii::t('app', '每页大小'),
            'list_view' => Yii::t('app', '列表面 View'),
            'list_layout' => Yii::t('app', '列表面 Layout'),
            'detail_view' => Yii::t('app', '内容页 View'),
            'detail_layout' => Yii::t('app', '内容页 Layout'),
            'seo_title' => Yii::t('app', '标题'),
            'seo_keywords' => Yii::t('app', '关键字'),
            'seo_description' => Yii::t('app', '描述'),
            'contents' => Yii::t('app', 'Contents'),
            'sort_num' => Yii::t('app', '排序'),
        ];
    }
    public function getCate($id)
    {
        $row = $this->findOne($id);

        return $row->id;
    }
}
