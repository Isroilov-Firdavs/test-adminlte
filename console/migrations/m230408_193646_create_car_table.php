<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%car}}`.
 */
class m230408_193646_create_car_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%car}}', [
            'id' => $this->primaryKey(),
            'make' => $this->string(),
            'model' => $this->string(),
            'price' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%car}}');
    }
}
