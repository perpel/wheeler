<?php

use yii\db\Migration;

class m161012_121238_product_category_recom extends Migration
{
    const TABLE = '{{%product_category}}';

    public function up()
    {
        $this->addColumn(self::TABLE, 'recom_id', 'TINYINT(10) DEFAULT 0');
    }

    public function down()
    {
        echo "m161012_121238_product_category_recom cannot be reverted.\n";
        return false;
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
