<?php
use yii\base\Component;

/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 02/01/20
 * Time: 10:02
 */
class MyComponent extends Component
{

    public $string;

    public function printString()
    {
        echo $this->string;
    }

}