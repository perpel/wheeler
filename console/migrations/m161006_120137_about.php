<?php

use yii\db\Migration;

class m161006_120137_about extends Migration
{
    const TABLE = '{{%about}}';

    public function up()
    {
        $this->createTable(self::TABLE, [
            'id' => $this->primaryKey(),
            'name' => $this->string(128)->notNull(),
            'desc' => $this->string(128),
            'type_id' => $this->smallInteger(),
            'content' => $this->text(),
            'order' => $this->smallInteger()->defaultValue(1),
            'lgn_id' => $this->smallInteger()
        ]);
    }

    public function down()
    {
        $this->dropTable(self::TABLE);
    }

}
