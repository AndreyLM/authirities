<?php

use yii\db\Schema;
use yii\db\Migration;

class m151120_131305_modifying extends Migration
{
    public function up()
    {
        $this->alterColumn('{{%article}}', 'status', $this->boolean());

    }

    public function down()
    {

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
