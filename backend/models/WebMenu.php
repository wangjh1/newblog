<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "web_menu".
 *
 * @property integer $id
 * @property integer $parent_id
 * @property string $category_id
 * @property string $name
 * @property string $url
 * @property integer $target
 * @property string $description
 * @property string $thumb
 * @property integer $status
 * @property integer $sort_num
 * @property integer $type_id
 */
class WebMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'category_id', 'name', 'url', 'type_id'], 'required'],
            [['parent_id', 'status', 'target', 'sort_num', 'type_id'], 'integer'],
            [['category_id', 'name' ], 'string', 'max' => 64],
            [['url', 'description', 'thumb'], 'string', 'max' => 512]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'parent_id' => '父节点',
            'category_id' => 'Category ID',
            'name' => '名称',
            'url' => '链接地址',
            'target' => '打开方式',
            'description' => '描述',
            'thumb' => '缩略图',
            'status' => '状态',
            'sort_num' => '排序',
            'type_id' => '分类ID',
        ];
    }
    public function getCate($id)
    {
        $row = $this->findOne($id);
        return $row->category_id;
    }
}
