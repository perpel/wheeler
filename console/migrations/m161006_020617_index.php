<?php

use yii\db\Migration;

class m161006_020617_index extends Migration
{
    const TABLE = '{{%index}}';
    
    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'url' => $this->string(255)->notNull(),
            'img' => $this->string(32)->defaultValue('default.jpg'),
            'type' => $this->string(32),
            'limit' => $this->smallInteger(),
            'lgn_id' => $this->smallInteger(),
            'order' => $this->smallInteger()->defaultValue(1),
        ]);
    }

    public function down()
    {
        $this->dropTable(self::TABLE);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
