<?php

namespace app\controllers;

use app\classes\filters\TempoAcaoFilter;
use yii\base\Controller;
use yii\filters\AccessControl;

class FiltrosController extends Controller
{
    public function behaviors()
    {
        return [
            'tempoacao' => [
                'class' => TempoAcaoFilter::class
            ],
            'access' => [
                'class' => AccessControl::class,
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