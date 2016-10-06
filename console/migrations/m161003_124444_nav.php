<?php

use yii\db\Migration;

class m161003_124444_nav extends Migration
{
    const TABLE = '{{%nav}}';

    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),  
            'name' => $this->string(64)->notNull(),  
            'parent_id' => $this->string(32)->notNull()->defaultValue(0),    
            'lgn_id' => $this->smallInteger()->notNull(),
            'order' => $this->smallInteger()->defaultValue(1),
            'url' => $this->string(255)->defaultValue('#'),
            'des' => $this->string(255)
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
