<?php

use yii\db\Migration;

/**
 * Class m200107_134921_create_categoria
 */
class m200107_134921_create_categoria extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->createTable('categorias', [
            'id' => $this->primaryKey(),
            'nome' => $this->string(60)->notNull(),
            'data_cadastro' => $this->dateTime()->notNull()
        ]);
    }


    public function down()
    {
        $this->dropTable('categorias');
    }

}
