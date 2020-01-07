<?php

use yii\db\Migration;

/**
 * Class m200107_140152_create_produtos
 */
class m200107_140152_create_produtos extends Migration
{
    public function up()
    {
        $this->createTable('produtos', [
            'id' => $this->primaryKey(),
            'categoria_id' => $this->integer()->notNull(),
            'nome' => $this->string(60)->notNull(),
            'valor' => $this->decimal(10,2)->notNull(),
        ]);

        $this->addForeignKey('fk_produtos_categoria_id', 'produtos', 'categoria_id', 'categorias', 'id');

        $this->insert('produtos', [
            'categoria_id' => 1,
            'nome' => 'Resident Evil 3 Remake',
            'valor' => 249
        ]);
    }


    public function down()
    {
        $this->dropForeignKey('fk_produtos_categoria_id', 'produtos');
        $this->dropTable('produtos');
    }
}
