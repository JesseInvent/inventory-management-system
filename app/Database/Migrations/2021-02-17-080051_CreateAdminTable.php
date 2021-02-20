<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdminTable extends Migration
{
	public function up()
	{
		//
		$this->forge->addField([
			"id" => [
				"type" => "INT",
				"auto_increment" => true,
			],
			"username" => [
				"type" => "VARCHAR",
				"constraint" => 255
			],
			"password" => [
				"type" => "VARCHAR",
				"constraint" => 255
			],
			"created_at DATETIME DEFAULT CURRENT_TIMESTAMP",
			"updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
		]);

		$this->forge->addPrimaryKey("id");
		$this->forge->createTable("admin");
	}

	public function down()
	{
		$this->forge->dropTable("admin");

	}
}
