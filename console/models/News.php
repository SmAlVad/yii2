<?php

namespace console\models;

use Yii;

class News
{
    const STATUS_NOT_SEND = 1;

    /**
     * @return mixed
     * @throws \yii\db\Exception
     */
    public static function getNews()
    {
        $sql = "SELECT * FROM `news` WHERE `status` = ".self::STATUS_NOT_SEND;
        $results = Yii::$app->db->createCommand($sql)->queryAll();

        return self::prepareNews($results);
    }

    /**
     * @param array $results
     * @return mixed
     */
    public static function prepareNews($results)
    {
        if (!empty($results) && is_array($results))
        {
            foreach ($results as &$result){
                $result["content"] = Yii::$app->stringHelper->getShort($result["content"], 40);
            }
        }

        return $results;
    }

}