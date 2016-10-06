<?php

use yii\db\Migration;

class m161004_132419_product_category extends Migration
{
    const TABLE = '{{%product_category}}';
    
    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'url' => $this->string(255),
            'parent_id' => $this->integer(),
            'order' => $this->smallInteger()->defaultValue(1),
            'type' => $this->string(64),
            'lgn_id' => $this->smallInteger()
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
