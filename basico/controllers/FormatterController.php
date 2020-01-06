<?php

namespace app\controllers;

use yii\web\Controller;
use Yii;

class FormatterController extends Controller
{

    public function actionIndex()
    {
        $appLang = Yii::$app->language;
        $formater = Yii::$app->formatter;

        echo "<h2>{$appLang}</h2>";

        echo "
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