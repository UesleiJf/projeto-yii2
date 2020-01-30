<?php

namespace app\controllers;

use app\models\Testes;
use yii\base\Controller;

class BehaviorController extends Controller
{
    public function actionIndex()
    {
        $teste = new Testes;
        $teste->name = "Resident Evil 6";
        $teste->save();

        return $this->render('index');
    }
}