<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "web_content".
 *
 * @property integer $id
 * @property integer $type_id
 * @property integer $user_id
 * @property string $user_name
 * @property integer $last_user_id
 * @property string $last_user_name
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $focus_count
 * @property integer $favorite_count
 * @property integer $view_count
 * @property integer $comment_count
 * @property integer $agree_count
 * @property integer $against_count
 * @property integer $recommend
 * @property integer $headline
 * @property integer $sticky
 * @property integer $flag
 * @property integer $allow_comment
 * @property string $password
 * @property string $view
 * @property string $layout
 * @property integer $sort_num
 * @property integer $visibility
 * @property integer $status
 * @property string $content_type
 * @property string $seo_title
 * @property string $seo_keywords
 * @property string $seo_description
 * @property string $title
 * @property string $sub_title
 * @property string $url_alias
 * @property string $redirect_url
 * @property string $summary
 * @property string $thumb
 * @property string $thumbs
 */
class WebContent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'web_content';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            /*[['type_id', 'user_id', 'last_user_id', 'created_at', 'updated_at', 'focus_count', 'favorite_count', 'view_count', 'comment_count', 'agree_count', 'against_count', 'recommend', 'headline', 'sticky', 'flag', 'allow_comment', 'sort_num', 'visibility', 'status'], 'integer'],*/
            [[ 'title'], 'required'],
            //[['user_name', 'last_user_name', 'password', 'view', 'layout', 'content_type'], 'string', 'max' => 64],
            [['seo_title', 'seo_keywords', 'seo_description', 'title', 'sub_title', 'url_alias', 'redirect_url', 'thumb'], 'string', 'max' => 256],
            [['summary'], 'string', 'max' => 512],
            [['thumbs'], 'string', 'max' => 1024]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'type_id' => Yii::t('app', '分类'),
            'user_id' => Yii::t('app', 'User ID'),
            'user_name' => Yii::t('app', '作者'),
            'last_user_id' => Yii::t('app', 'Last User ID'),
            'last_user_name' => Yii::t('app', 'Last User Name'),
            'created_at' => Yii::t('app', '发布时间'),
            'updated_at' => Yii::t('app', 'Updated At'),
            'focus_count' => Yii::t('app', 'Focus Count'),
            'favorite_count' => Yii::t('app', 'Favorite Count'),
            'view_count' => Yii::t('app', '浏览数'),
            'comment_count' => Yii::t('app', 'Comment Count'),
            'agree_count' => Yii::t('app', 'Agree Count'),
            'against_count' => Yii::t('app', 'Against Count'),
            'recommend' => Yii::t('app', '推荐'),
            'headline' => Yii::t('app', '头条'),
            'sticky' => Yii::t('app', '置顶'),
            'flag' => Yii::t('app', '标签'),
            'allow_comment' => Yii::t('app', '允许评论'),
            'password' => Yii::t('app', 'Password'),
            'view' => Yii::t('app', '视图(View)'),
            'layout' => Yii::t('app', '布局(Layout)'),
            'sort_num' => Yii::t('app', '排序'),
            'visibility' => Yii::t('app', '可见'),
            'status' => Yii::t('app', '状态'),
            'content_type' => Yii::t('app', 'Content Type'),
            'seo_title' => Yii::t('app', 'Seo 标题'),
            'seo_keywords' => Yii::t('app', 'Seo 关键字'),
            'seo_description' => Yii::t('app', 'Seo 描述'),
            'title' => Yii::t('app', '标题'),
            'sub_title' => Yii::t('app', '副标题'),
            'url_alias' => Yii::t('app', '别名'),
            'redirect_url' => Yii::t('app', '跳转Url'),
            'summary' => Yii::t('app', '简介'),
            'thumb' => Yii::t('app', '缩略图'),
            'thumbs' => Yii::t('app', 'Thumbs'),
        ];
    }
}
