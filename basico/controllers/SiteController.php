<?php

namespace app\controllers;

use RestClient;
use Yii;
use yii\filters\AccessControl;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
       return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionFeed()
    {
        $api = new RestClient([
            'base_url' => 'http://localhost:9999/api',
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);

        $api->post('default/create', [
            'titulo' => 'Criando notícia pela Aplicação',
            'cabeca' => 'Titulo da Noticia pela Aplicação',
            'corpo' => 'Corpo da Noticia pela Aplicação',
            'status' => 1
        ]);

        $api->put('default/6', [
            'titulo' => 'DELETOU O 7??',
        ]);

        $api->delete('default/7', [
            'titulo' => 'ALTERANDO notícia pela Aplicação',
        ]);

        $result = $api->get('/default');
        $data = Json::decode($result->response);

        return $this->render('feed', [
            'data' => $data
        ]);
    }

    public function actionAgenda()
    {
        $api = new RestClient([
            'base_url' => 'http://localhost:9999/agenda',
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);

        $api->post('default/create', [
            'local' => 'Barbasco',
            'valor' => '600',
            'observacao' => 'Testando essa fita!!!!',
        ]);

        $result = $api->get('/default');
        $data = Json::decode($result->response);

        return $this->render('agenda', [
            'data' => $data
        ]);
    }
}
