<?php

use yii\db\Migration;

class m161006_092832_program extends Migration
{
    const TABLE = '{{%program}}';

    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'desc' => $this->string(128),
            'content' => $this->text(),
            'url' => $this->string(255),
            'created_at' => $this->integer()->notNull(),  
            'updated_at' => $this->integer()->notNull(),
            'order' => $this->smallInteger()->defaultValue(1),
            'type_id' => $this->smallInteger(),
            'lgn_id' => $this->smallInteger(),
            'isrecom' => $this->smallInteger()->defaultValue(0)
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
