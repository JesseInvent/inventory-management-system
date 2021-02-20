<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateCustomersTableMigration extends Migration
{
	public function up()
	{
		//
		$this->forge->addField(
			[
				"id" => [
					"type" => "INT",
					"auto_increment" => true,
				],
				"name" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"email" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"mobile_number" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"contact_number" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"address" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],

				"created_at DATETIME DEFAULT CURRENT_TIMESTAMP",
				"updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
			]
		);

		$this->forge->addPrimaryKey("id");
		$this->forge->createTable("customers");
	}

	public function down()
	{
		//
		$this->forge->dropTable("customers");
	}
}
