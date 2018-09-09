<?php

namespace console\controllers;

use Yii;
use console\models\News;
use console\models\Subscribers;
use console\models\Sender;

class MailerController extends \yii\console\Controller
{

    public function actionSend()
    {
        $newsList = News::getNews();
        $subscribers = Subscribers::getList();

        $result = Sender::send($newsList, $subscribers);
    }

}