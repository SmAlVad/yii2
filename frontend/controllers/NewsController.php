<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Subscribe;
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

    public function actionSubscribe()
    {

        $formData = Yii::$app->request->post();
        $model = new Subscribe();

        if (Yii::$app->request->isPost)
        {

            $model->name = $formData["name"];
            $model->email = $formData["email"];

            if ($model->validate() && $model->save())
            {
                Yii::$app->session->setFlash("success", "Ура! Ура! Это сработало!");
            }

        }

        return $this->render("subscribe", [
            "model" => $model,
        ]);
    }
}