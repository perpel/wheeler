<?php

use yii\db\Migration;

class m161004_062146_banner extends Migration
{
    const TABLE = '{{%banner}}';
    
    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'src' => $this->string(255),
            'alt' => $this->string(128),
            'order' => $this->smallInteger()->defaultValue(0),
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
