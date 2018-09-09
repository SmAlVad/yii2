<?php

namespace console\models;
use Yii;

class Sender
{
    public static function send($newsList, $subscribers)
    {
        foreach ($subscribers as $subscriber){
            $result = Yii::$app->mailer->compose("/mailer/newslist",[
                "newsList" => $newsList,
            ])
                ->setFrom("test@mail.ru")
                ->setTo($subscriber["email"])
                ->setSubject("Subject")
                ->send();
            var_dump($result);
        }
    }
}