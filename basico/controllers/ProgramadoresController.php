<?php

namespace app\controllers;

use app\models\Programador;
use yii\base\Controller;

class ProgramadoresController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        /** @var Programador[] $programadores */
        $programadores = Programador::find()->all();

        foreach ($programadores as $programador){

            echo"<h2>
                Nome: {$programador->nome} | 
                GitHub: {$programador->github}
            </h2>";

        }

        exit;

        return $this->render('index');
    }
}