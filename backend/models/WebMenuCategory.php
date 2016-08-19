<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "web_menu_category".
 *
 * @property string $category_id
 * @property string $identify
 * @property string $name
 * @property string $description
 */
class WebMenuCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_menu_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id'], 'string', 'max' => 64],
            [['identify'], 'string', 'max' => 32],
            [['name'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'category_id' => Yii::t('app', 'ID'),
            'identify' => Yii::t('app', '标示'),
            'name' => Yii::t('app', '名称'),
            'description' => Yii::t('app', '描述'),
        ];
    }
}
