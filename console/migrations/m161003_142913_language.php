<?php

use yii\db\Migration;

class m161003_142913_language extends Migration
{
    const TABLE = '{{%language}}';

    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),  
            'name' => $this->string(64)->notNull()->unique(),
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
