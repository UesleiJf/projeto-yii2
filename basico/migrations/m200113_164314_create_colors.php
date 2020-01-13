<?php

use yii\db\Migration;

/**
 * Class m200113_164314_create_colors
 */
class m200113_164314_create_colors extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if ($this->db->driverName === 'mysql')
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';

        $this->createTable('{{%sizes}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(60)->notNull(),
            'abbreviation' => $this->string(10)->notNull(),
            'status' => $this->smallInteger(1)->notNull()->defaultValue(1),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            ], $tableOptions);

        $now = new DateTime();

        $this->batchInsert('{{%sizes}}',['name', 'abbreviation', 'created_at', 'updated_at'],[
            ['Pequeno', 'P', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
            ['Médio', 'M', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
            ['Grande', 'G', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
            ['Extra Grande', 'GG', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
            ['Extra Grande Grande', 'XGG', $now->format('Y-m-d H:i:s'), $now->format('Y-m-d H:i:s')],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%sizes}}');
    }

}
