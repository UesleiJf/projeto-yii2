<?php

namespace app\controllers;

use yii\base\Controller;
use yii\filters\AccessControl;

class FiltrosController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['create', 'update'],
                'rules' => [
                    ['allow' => false]
                ]
            ]
        ];
    }

    public function actionIndex()
    {
        return 'Listagem';
    }

    public function actionCreate()
    {
        return 'Novo';
    }

    public function actionUpdate()
    {
        return 'Atualizar';
    }

    public function actionDelete()
    {
        return 'Remover';
    }
}