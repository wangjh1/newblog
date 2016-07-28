<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "columns_base".
 *
 * @property integer $columns_id
 * @property string $columns_name
 * @property integer $parent_id
 * @property integer $columns_type_id
 * @property string $columns_app
 * @property integer $columns_show
 * @property integer $columns_sequence
 * @property string $columns_urlname
 * @property string $columns_subname
 * @property string $columns_image
 * @property string $columns_tpl
 * @property string $columns_keywords
 * @property string $columns_description
 * @property integer $columns_upload_config
 */
class ColumnsBase extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'columns_base';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['parent_id', 'columns_type_id', 'columns_show', 'columns_sequence', 'columns_upload_config'], 'integer'],
            [['columns_name'], 'string', 'max' => 125],
            [['columns_app'], 'string', 'max' => 20],
            [['columns_urlname', 'columns_subname', 'columns_image', 'columns_tpl', 'columns_keywords', 'columns_description'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'columns_id' => 'Columns ID',
            'columns_name' => 'Columns Name',
            'parent_id' => 'Parent ID',
            'columns_type_id' => 'Columns Type ID',
            'columns_app' => 'Columns App',
            'columns_show' => 'Columns Show',
            'columns_sequence' => 'Columns Sequence',
            'columns_urlname' => 'Columns Urlname',
            'columns_subname' => 'Columns Subname',
            'columns_image' => 'Columns Image',
            'columns_tpl' => 'Columns Tpl',
            'columns_keywords' => 'Columns Keywords',
            'columns_description' => 'Columns Description',
            'columns_upload_config' => 'Columns Upload Config',
        ];
    }
}
