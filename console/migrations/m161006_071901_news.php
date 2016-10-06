<?php

use yii\db\Migration;

class m161006_071901_news extends Migration
{
    const TABLE = '{{%news}}';

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

}
