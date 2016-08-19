<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "web_content_page".
 *
 * @property integer $id
 * @property integer $content_id
 * @property string $body
 */
class WebContentPage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_content_page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content_id',], 'required'],
            [['content_id'], 'integer'],
            [['body'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'content_id' => Yii::t('app', 'Content ID'),
            'body' => Yii::t('app', '内容'),
        ];
    }
}
