<?php

namespace app\controllers;


use yii\base\Controller;

class CargosController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}