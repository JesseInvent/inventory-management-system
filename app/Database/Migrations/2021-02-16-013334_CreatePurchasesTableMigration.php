<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePurchasesTableMigration extends Migration
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
				"supplier_id" => [
					"type" => "INT",
				],
				"product_id" => [
					"type" => "INT",
				],
				"units_bought" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"price_per_unit" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"amount_spent" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],

				"created_at DATETIME DEFAULT CURRENT_TIMESTAMP",
				"updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
			]
		);


		$this->forge->addPrimaryKey("id");
		$this->forge->addForeignKey("supplier_id", "suppliers", "id", "CASCADE", "CASCADE");
		$this->forge->addForeignKey("product_id", "products", "id", "CASCADE", "CASCADE");
		$this->forge->createTable("purchases");
	}

	public function down()
	{
		//
		$this->forge->dropTable("purchases");

	}

}
