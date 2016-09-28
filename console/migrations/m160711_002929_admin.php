<?php

use yii\db\Migration;

class m160711_002929_admin extends Migration
{
    const TABLE = '{{%admin}}';
    
    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),  
            'username' => $this->string(128)->notNull()->unique(),  
            'auth_key' => $this->string(32)->notNull(),    
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string(),  
            'email' => $this->string(128)->notNull()->unique(), 
            'status' => $this->smallInteger()->notNull()->defaultValue(1),  
            'role' => $this->smallInteger()->notNull()->defaultValue(0),  
            'created_at' => $this->integer()->notNull(),  
            'updated_at' => $this->integer()->notNull()
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
