<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Employee;

class EmployeeController extends Controller
{

    public function actionIndex()
    {

        $employee1 = new Employee();
        $employee1->firstName = "Alex";
        $employee1->lastName = "Smith";
        $employee1->middleName = "John";
        $employee1->salary = 1000;

        echo $employee1["salary"];
    }

}