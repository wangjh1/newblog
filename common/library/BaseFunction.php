<?php
/**
 * @author 王金豪 <627658543@qq.com>
 * @Date 2016/8
 * @use 公用函数库
 */
namespace common\library;

use Yii;
use yii\web\NotFoundHttpException;
class BaseFunction
{
    //获取后台配置信息
    public static function getconfig()
    {
        $configPath = Yii::getAlias('@webroot').'/config.php';

        if (file_exists($configPath))
        {
            return require($configPath);
        }
        else
        {
            throw new NotFoundHttpException('网站配置文件不存在');
        }

    }


}