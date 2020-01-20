<?php

namespace app\controllers;

use app\models\Funcionario;
use yii\base\Controller;

class FuncionariosController extends Controller
{
    /**
     * @return string
     */
    public function actionIndex()
    {
        /** @var Funcionario[] $funcionarios */
        $funcionarios = Funcionario::find()->all();

        foreach ($funcionarios as $funcionario){

            echo"<h2>
                Nome: {$funcionario->nome} | 
                Cargo: {$funcionario->cargo->nome}
            </h2>";

        }

        exit;

        return $this->render('index');
    }
}