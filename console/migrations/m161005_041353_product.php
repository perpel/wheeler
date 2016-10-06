<?php

use yii\db\Migration;

class m161005_041353_product extends Migration
{
    const TABLE = '{{%product}}';
    
    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'img' => $this->string(32),
            'desc' => $this->string(255),
            'url' => $this->string(255),
            'type_id' => $this->integer(),
            'order' => $this->smallInteger()->defaultValue(1),
            'content' => $this->text(),
            'lgn_id' => $this->smallInteger(),
            'recom_id' => $this->smallInteger()
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
