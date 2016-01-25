<?php

use yii\db\Schema;
use yii\db\Migration;

class m151120_094020_created_tbls_Article_Category_Devisions_FKs extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }


        $this->createTable('{{%user123}}', [
            'id' => $this->primaryKey(),
            'username' => $this->string()->notNull()->unique(),
            'auth_key' => $this->string(32)->notNull(),
            'password_hash' => $this->string()->notNull(),
            'password_reset_token' => $this->string()->unique(),
            'email' => $this->string()->notNull()->unique(),

            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

        $this->createTable('{{%article}}', [
            'id' => $this->primaryKey(),
            'category_id' => $this->integer()->notNull(),
            'title' => $this->string(16)->notNull(),
            'description' => $this->string(),
            'created_at' => $this->dateTime(),
            'updated_at' => $this->dateTime(),
            'status' => $this->smallInteger()->notNull()->defaultValue(0),
        ], $tableOptions);

        $this->createTable('{{%category}}', [
            'id'=>$this->primaryKey(),
            'name'=>$this->string(8),
            'description'=>$this->string(),
            'division_id'=>$this->integer()->notNull(),
        ],$tableOptions);

        $this->createTable('{{%division}}', [
            'id'=>$this->primaryKey(),
            'title'=>$this->string()->notNull(),
            'description'=>$this->string(),
        ], $tableOptions);

        $this->addForeignKey('FK_Article_Category', '{{%article}}',  'category_id', '{{%category}}', 'id' );
        $this->addForeignKey('FK_Category_Division', '{{%category}}', 'division_id', '{{%division}}', 'id');

    }

    public function safeDown()
    {
        $this->dropForeignKey('FK_Article_Category', '{{%article}}');
        $this->dropForeignKey('FK_Category_Division', '{{%category}}');
        $this->dropTable('{{%user123}}');
        $this->dropTable('{{%article}}');
        $this->dropTable('{{%category}}');
        $this->dropTable('{{%division}}');
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
