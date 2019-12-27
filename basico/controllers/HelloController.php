<?php
/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 27/12/19
 * Time: 16:45
 */

namespace app\controllers;


use yii\web\Controller;

class HelloController extends Controller
{

    public function actionSaySomething($message='Hello')
    {
        return $this->render('say-something', [
            'message' => $message
        ]);
    }

}