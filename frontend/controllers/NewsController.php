<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\News;
use Yii;

class NewsController extends Controller
{

    public function actionIndex()
    {
        $max = Yii::$app->params["maxNewsInList"];

        $news = News::getNewsList($max);

        return $this->render("index",[
            "news" => $news,
        ]);
    }

    public function actionSingle($id)
    {
        $item = News::getItem($id);

        return $this->render("single",[
            "item" => $item,
        ]);
    }
}