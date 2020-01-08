<?php

use app\models\Clientes;
use yii\db\Migration;

/**
 * Class m200108_213214_add_client_foto_coluna
 */
class m200108_213214_add_client_foto_coluna extends Migration
{

    public function up()
    {
        $this->addColumn(Clientes::tableName(), 'foto', $this->string(60));
    }

    public function down()
    {
        $this->dropColumn(Clientes::tableName(), 'foto');
    }

}
