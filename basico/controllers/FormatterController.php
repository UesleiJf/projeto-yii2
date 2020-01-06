<?php

namespace app\controllers;

use app\classes\components\MyFormatter;
use yii\web\Controller;
use Yii;

class FormatterController extends Controller
{

    public function actionIndex()
    {
        $appLang = Yii::$app->language;

        /** @var MyFormatter $formater */
        $formater = Yii::$app->formatter;

        echo "<h2>{$appLang}</h2>";

        echo "

            <p>CEP: {$formater->asCep(74333230)}</p>

            <p>Size(Tamanho): {$formater->asShortSize(12345, 2)}</p>
            <p>Percentuais: {$formater->asPercent(0.12345)}</p>
            <p>Percentuais + decimais: {$formater->asPercent(0.12345, 2)}</p>
            <p>Booleano: {$formater->asBoolean(true)}</p>
            <p>Booleano: {$formater->asBoolean(false)}</p>
            <p>E-mail: {$formater->asEmail('uesleijf@gmail.com')}</p>
            
            <p>NText: {$formater->asNtext("ueslei\njose\nferreira\nda\nsilva")}</p>
            
            <p>Data(Php): {$formater->asDate('2012-04-01', 'php:d/m/Y')}</p>
            <p>Data Formatada: {$formater->asDate('2012-04-01', 'dd/MM/YYYY')}</p>
            <p>Data: {$formater->asDate('2012-04-01', 'full')}</p>
            <p>Data: {$formater->asDate('2012-04-01', 'long')}</p>
            <p>Data: {$formater->asDate('2012-04-01', 'medium')}</p>
            <p>Data: {$formater->asDate('2012-04-01', 'short')}</p>
        ";
    }

}