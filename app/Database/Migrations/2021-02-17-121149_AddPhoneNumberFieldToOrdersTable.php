<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddPhoneNumberFieldToOrdersTable extends Migration
{
	public function up()
	{
		//
		$this->forge->addColumn("orders", [
			"customer_phone_number" => [
				"type" => "VARCHAR",
				"constraint" => 255,
				"null" => true,
				"after" => "customer_address"
			]
		]);
	}

	public function down()
	{
		//
	}
}
