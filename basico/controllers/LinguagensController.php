<?php

namespace app\controllers;


use app\models\Linguagem;
use yii\base\Controller;

class LinguagensController extends Controller
{

    public function actionIndex()
    {
        /** @var Linguagem[] $linguagens */
        $linguagens = Linguagem::find()->all();

        foreach ($linguagens as $linguagem){

            echo"<h2>
                Nome: {$linguagem->nome} | 
            </h2>";

        }

        exit;

        return $this->render('index');
    }

}