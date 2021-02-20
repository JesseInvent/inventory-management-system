<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemovePriceFieldFromProductField extends Migration
{
	public function up()
	{
		//
		$this->forge->dropColumn("products", "price");
	}

	public function down()
	{
		//
	}
}
