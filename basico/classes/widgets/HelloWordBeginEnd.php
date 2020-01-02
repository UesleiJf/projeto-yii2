<?php
/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 02/01/20
 * Time: 13:00
 */

namespace app\classes\widgets;


use yii\base\Widget;
use yii\bootstrap\Html;

class HelloWordBeginEnd extends Widget
{

    public $enconde = true;

    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();

        if($this->enconde)
            return Html::encode($content);
        else
            return $content;
    }

}