<?php

namespace app\modules\financeiro\controllers;


use yii\base\Controller;

class DefaultController extends Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }
}