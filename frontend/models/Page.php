<?php
/**
 * Created by PhpStorm.
 * User: 王金豪
 * Date: 2016/8/23
 * Time: 11:01
 */
namespace frontend\models;

use Yii;
use backend\models\WebContent;
use yii\db\Query;
use backend\models\WebType;
class Page extends \yii\db\ActiveRecord
{

    /*
     *
     * 文章详情
     */
     public static function getDetail($id)
     {
         $data = (new Query())
             ->select(['body', 'title', 'user_name', 'created_at', 'view_count', 'comment_count'])
             ->from('web_content_page')
             ->join('LEFT JOIN','web_content','web_content_page.content_id = web_content.id')
             ->where(['web_content.id'=>$id])
             //->offset(5)
             //->limit(10)
             ->all();

         return $data;
     }



}
