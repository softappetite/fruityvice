<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%fruits}}`.
 */
class m230414_062304_create_fruits_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%fruits}}', [
            'id' => $this->primaryKey(),
			'fruit_id' => $this->integer(11)->notNull(),
			'name' => $this->string(100),
			'family' => $this->string(100),
			'order' => $this->string(100),
			'genus' => $this->string(100),
			'nut_calories' => $this->decimal(8, 2),
			'nut_fat' => $this->decimal(8, 2),
			'nut_sugar' => $this->decimal(8, 2),
			'nut_carbohydrates' => $this->decimal(8, 2),
			'nut_protein' => $this->decimal(8, 2),
			'added_fav' => $this->boolean()
			
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%fruits}}');
    }
}
