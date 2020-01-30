<?php

namespace app\controllers;


use yii\base\Controller;

class StringsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}