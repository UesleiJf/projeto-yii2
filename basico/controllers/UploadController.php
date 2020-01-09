<?php
/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 08/01/20
 * Time: 19:14
 */

namespace app\controllers;


use app\models\Clientes;
use yii\base\Controller;

class UploadController extends Controller
{

    public function actionIndex()
    {
        $post = \Yii::$app->getRequest()->post();
        $model = new Clientes;

        if ($model->load($post) && $model->validate()){

        }

        return $this->render('index', [
            'model' => $model
        ]);
    }
}