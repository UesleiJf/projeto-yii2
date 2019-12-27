<?php
/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 27/12/19
 * Time: 17:23
 */

namespace app\controllers;


use app\models\CadastroModel;
use yii\base\Controller;
use Yii;

class ExerciciosController extends Controller
{
    public function actionFormulario()
    {
        $cadastroModel = new CadastroModel;
        $post = Yii::$app->request->post();

        if ($cadastroModel->load($post) && $cadastroModel->validate()){
            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel
            ]);
        } else {
            return $this->render('formulario', [
                'model' => $cadastroModel
            ]);
        }


    }
}