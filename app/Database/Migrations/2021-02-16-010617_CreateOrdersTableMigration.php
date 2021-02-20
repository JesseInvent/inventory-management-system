<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateOrdersTableMigration extends Migration
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
				"product_id" => [
					"type" => "INT"
				],
				"units" => [
					"type" => "INT"
				],
				"customer_name" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"customer_email" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"customer_address" => [
					"type" => "VARCHAR",
					"constraint" => 255,
					"null" => true
				],
				"paid_status" => [
					"type" => "ENUM",
					"constraint" => ["paid", "unpaid"],
					"default" => "unpaid"
				],
				"completed_status" => [
					"type" => "ENUM",
					"constraint" => ["processed", "pending"],
					"default" => "pending"
				],

				"created_at DATETIME DEFAULT CURRENT_TIMESTAMP",
				"updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP",
			]
		);

		$this->forge->addPrimaryKey("id");
		$this->forge->addForeignKey("product_id", "products", "id", "CASCADE", "CASCADE");
		$this->forge->createTable("orders");
	}

	public function down()
	{
		//
		$this->forge->dropTable("orders");
	}
}
