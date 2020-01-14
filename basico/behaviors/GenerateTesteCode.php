<?php

namespace app\behaviors;

use Yii;
use yii\base\Behavior;
use yii\base\Event;
use yii\db\ActiveRecord;

/**
 * Created by PhpStorm.
 * User: hunk
 * Date: 14/01/20
 * Time: 16:56
 */
class GenerateTesteCode extends Behavior
{

    public function events()
    {
        return [
            ActiveRecord::EVENT_AFTER_INSERT => 'run',
            ActiveRecord::EVENT_AFTER_UPDATE => 'run',
        ];
    }

    public function run(Event $event)
    {
        $this->owner->code = Yii::$app->security->generateRandomString();
    }
}