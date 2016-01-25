<?php

use yii\db\Schema;
use yii\db\Migration;

class m151120_122415_modifying_tbl_article extends Migration
{
    public function up()
    {
         $this->addColumn('{{%article}}', 'favorite', $this->boolean());
    }

    public function down()
    {
        $this->dropColumn('{{%article}}', 'favorite');
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
