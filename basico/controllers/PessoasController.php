<?php

namespace app\controllers;

use Yii;
use app\models\Pessoas;
use app\models\PessoasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PessoasController implements the CRUD actions for Pessoas model.
 */
class PessoasController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Pessoas models.
     * @return mixed
     */
//    public function actionIndex()
//    {
//
//        $searchModel = new PessoasSearch();
//        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
//
//        return $this->render('index', [
//            'searchModel' => $searchModel,
//            'dataProvider' => $dataProvider,
//        ]);
//    }

//    public function actionIndex()
//    {
//         //Pessoa Fisica
//        /** @var Pessoas[] $pessoas */
//        $pessoas = Pessoas::find()->all();
//
//        foreach ($pessoas as $pessoa) {
//            echo "<h2>
//                Nome: {$pessoa->nome} |
//                CPF: {$pessoa->pessoaFisica->cpf} |
//                Sexo: {$pessoa->pessoaFisica->sexo}
//            </h2>";
//        }
//
//        exit;
//    }

    /**
     * Lists all Pessoas models.
     * @return mixed
     */
    public function actionIndex()
    {
         //Pessoa Jurídica
        /** @var Pessoas[] $pessoas */
        $pessoas = Pessoas::find()->all();

        foreach ($pessoas as $pessoa) {
            echo "<h2>
                Nome: {$pessoa->nome} |
                CNPJ: {$pessoa->pessoaJuridica->cnpj} |
                CNPJ: {$pessoa->pessoaJuridica->ie}
            </h2>";
        }

        exit;
    }

    /**
     * Displays a single Pessoas model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Pessoas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Pessoas();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pessoas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pessoas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pessoas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Pessoas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Pessoas::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
