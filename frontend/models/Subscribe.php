<?php

namespace frontend\models;

use yii\base\Model;
use Yii;

class Subscribe extends Model
{

    public $name;
    public $email;

    public function save()
    {
        $sql = "INSERT INTO `subscribers` (`name`,`email`) VALUES ('{$this->name}', '{$this->email}')";

        return Yii::$app->db->createCommand($sql)->execute();
    }

    public function rules()
    {
        return [
            [["name","email"], "required"],
            [["email"], "email"],
        ];
    }

}