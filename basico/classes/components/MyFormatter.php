<?php

namespace app\classes\components;

use yii\i18n\Formatter;

class MyFormatter extends Formatter
{

    public static function asCep($string){
        return substr($string, 0, 2) . '.' . substr($string, 2, 3) . '-' . substr($string, 5);
    }

    public static function asCpf(){

    }

    public static function asCnpj(){

    }
}