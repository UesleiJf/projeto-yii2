<?php
/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 14/01/20
 * Time: 13:39
 */

namespace app\controllers;

use app\models\Noticias;
use RestClient;
use yii\base\Controller;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;

class FeedsController extends Controller
{

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

        $query = Noticias::find()
            ->where(['status' => 1]);


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 3
            ],
            'sort' => [
                'defaultOrder' => ['status' => SORT_ASC]
            ]
        ]);


        return $this->render('feed', [
            'dataProvider' => $dataProvider
        ]);
    }
}