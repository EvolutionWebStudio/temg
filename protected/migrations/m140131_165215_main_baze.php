<?php

class m140131_165215_main_baze extends CDbMigration
{
	public function up()
	{
        $db = $this->getDbConnection();
        $query = file_get_contents(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'termag_glavna.sql');
        $transaction = $db->beginTransaction();
        $db->createCommand($query)->execute();
        $transaction->commit();
	}

	public function down()
	{
		echo "m140131_165215_main_baze does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}