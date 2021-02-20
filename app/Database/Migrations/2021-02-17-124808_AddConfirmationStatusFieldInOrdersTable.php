<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddConfirmationStatusFieldInOrdersTable extends Migration
{
	public function up()
	{
		//
		$this->forge->addColumn("orders", [
			"confirmation_status" => [
				"type" => "ENUM",
				"constraint" => ["true", "false"],
				"default" => "false",
				"after" => "paid_status"
			]
		]);
	}

	public function down()
	{
		//
	}
}
