<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductsTableMigration extends Migration
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
				"image" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"price" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"units_available" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"cost_per_unit" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"description" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],

				"created_at DATETIME DEFAULT CURRENT_TIMESTAMP",
				"updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
			]
		);

		$this->forge->addPrimaryKey("id");
		$this->forge->createTable("products");
	}

	public function down()
	{
		//
		$this->forge->dropTable("products");
	}
}
