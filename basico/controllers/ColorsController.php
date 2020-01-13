<?php
/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 13/01/20
 * Time: 14:32
 */

namespace app\controllers;


use yii\base\Controller;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

class ColorsController extends Controller
{

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    'actions' => ['logout'],
                    'allow' => true,
                    'roles' => ['@'],
                ]

            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ]
        ];
    }

    public function actionIndex()
    {
        return $this->render('index', []);
    }
}