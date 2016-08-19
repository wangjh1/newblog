<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "web_type_category".
 *
 * @property string $id
 * @property string $identify
 * @property string $name
 * @property string $description
 */
class WebTypeCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_type_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['identify', 'name'], 'required'],
            [['name'], 'string', 'max' => 64],
            [['identify'], 'string', 'max' => 32],
            [['description'], 'string', 'max' => 512],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'identify' => Yii::t('app', '标示'),
            'name' => Yii::t('app', '名称'),
            'description' => Yii::t('app', '描述'),
        ];
    }
}
