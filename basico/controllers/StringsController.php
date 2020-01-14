<?php
/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 14/01/20
 * Time: 13:27
 */

namespace app\controllers;


use yii\base\Controller;

class StringsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}