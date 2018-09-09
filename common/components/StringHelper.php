<?php

namespace common\components;
use Yii;

class StringHelper
{
    private $limit;

    public function __construct()
    {
        $this->limit = Yii::$app->params["shortTextLimit"];
    }

    /**
     * @param string $string
     * @param int $limit
     * @return bool|string
     */
    public function getShort($string, $limit = null)
    {
        if ($limit === null)
        {
            $limit = $this->limit;
        }

        return substr($string, 0, $limit);
    }

}