<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Page;

class PageController extends \yii\web\Controller
{
    /*
     *
     * 文章列表
     */
    public function actionIndex($cat= null)
    {

        //热门浏览
        $hot = Page::getHot();
        //文章列表
        $Page = Page::getIndex($cat);
        //推荐
        $recommend = Page::getRecommend();
        //分类
        $cat = Page::getCat();

        return $this->render('index', [
            'Page' => $Page,
            'hot' => $hot,
            'recommend' => $recommend,
            'cat' => $cat,
        ]);
    }
    /*
     *
     * 文章详情
     */
    public function actionDetail($id)
    {
        //$Page = new WebContentPage();
        $data =Page::getDetail($id);

        //print_r($new);die;
        return $this->render('detail', [
            'data' => $data,
        ]);
    }


}
