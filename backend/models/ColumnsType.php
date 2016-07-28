<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "columns_type".
 *
 * @property integer $columns_type_id
 * @property string $columns_type_name
 * @property string $columns_type_des
 */
class ColumnsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'columns_type';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['columns_type_name'], 'string', 'max' => 50],
            [['columns_type_des'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'columns_type_id' => 'Columns Type ID',
            'columns_type_name' => 'Columns Type Name',
            'columns_type_des' => 'Columns Type Des',
        ];
    }
}
