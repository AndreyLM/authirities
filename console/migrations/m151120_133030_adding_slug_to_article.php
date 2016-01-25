<?php

use yii\db\Schema;
use yii\db\Migration;

class m151120_133030_adding_slug_to_article extends Migration
{
    public function up()
    {
        $this->addColumn('{{$article}}', 'slug', $this->string());
        $this->addColumn('{{%article}}', 'tags', $this->string());

    }

    public function down()
    {
        echo "m151120_133030_adding_slug_to_article cannot be reverted.\n";

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
