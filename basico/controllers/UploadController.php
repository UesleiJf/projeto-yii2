<?php
/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 08/01/20
 * Time: 19:14
 */

namespace app\controllers;


use app\models\Clientes;
use Yii;
use yii\base\Controller;
use yii\web\UploadedFile;

class UploadController extends Controller
{

    public function actionIndex()
    {
        $post = Yii::$app->getRequest()->post();
        $model = new Clientes;

        if ($model->load($post) && $model->validate()){
            $model->fotoCliente = UploadedFile::getInstance($model, 'fotoCliente');

            $model->foto = $model->fotoCliente->name;
            $model->save();

            $uploadPath = Yii::getAlias('@webroot/files');
            $model->fotoCliente->saveAs($uploadPath . '/' .  $model->fotoCliente->name);
        }

        return $this->render('index', [
            'model' => $model
        ]);
    }
}