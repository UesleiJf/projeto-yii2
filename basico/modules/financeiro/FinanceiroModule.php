<?php


namespace app\modules\financeiro;

use Yii;
use yii\base\Module;

class FinanceiroModule extends Module
{

    public function init()
    {
        parent::init(); // TODO: Change the autogenerated stub

        Yii::configure($this, require(__DIR__ . '/config/main.php'));
    }

}