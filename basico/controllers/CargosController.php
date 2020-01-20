<?php

namespace app\controllers;


use app\models\Cargo;
use yii\base\Controller;

class CargosController extends Controller
{

    public function actionIndex()
    {
        /** @var $cargo[] $cargos */
        $cargos = Cargo::find()->all();

        foreach ($cargos as $cargo){
            echo"<h2>";
                echo $cargo->nome;

                echo "<ul>";
                    foreach ($cargo->funcionarios as $func){
                        echo "<li>{$func->nome}</li>";
                    }
                echo "</ul>";
            echo "</h2>";
        }

        exit;

        return $this->render('index');
    }

}