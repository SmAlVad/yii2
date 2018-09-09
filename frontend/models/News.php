<?php

namespace frontend\models;

use Yii;

/**
 * Model News
 * @package frontend\models
 */
class News
{

    /**
     * @param integer $max
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getNewsList($max)
    {
        $max = intval($max);

        $sql = "SELECT * FROM `news` LIMIT ".$max;

        $news = Yii::$app->db->createCommand($sql)->queryAll();

        if (!empty($news) && is_array($news))
        {
            foreach ($news as &$item){
                $item["content"] = Yii::$app->stringHelper->getShort($item["content"], 40);
            }
        }

        return $news;
    }

    /**
     * @param integer $id
     * @return array|false
     * @throws \yii\db\Exception
     */
    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM `news` WHERE `id` = '$id'";

        $item = Yii::$app->db->createCommand($sql)->queryOne();

        return $item;
    }

}