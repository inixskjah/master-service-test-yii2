<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%random_numbers}}`.
 */
class m200405_123114_create_random_numbers_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%random_numbers}}', [
            'id' => $this->primaryKey(),
            'value' => $this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%random_numbers}}');
    }
}
