<?php

namespace app\classes\widgets;

use yii\base\Widget;
use yii\helpers\Html;

/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 02/01/20
 * Time: 12:21
 */
class HelloWidget extends Widget
{

    public $message;
    public $submessage;

    public function init()
    {
        parent::init();

        if ($this->message === null)
            $this->message = 'Hello World';

        if ($this->submessage === null)
            $this->submessage = "I'm Here";
    }

    public function run()
    {
//        $output = "<h2>" . Html::encode($this->message) . "</h2>";
//        $output .= "<p>" . Html::encode($this->submessage) . "</p>";
//
//        return $output;

        return $this->render('hello', [
            'message' => $this->message,
            'submessage' => $this->submessage
        ]);

    }

}