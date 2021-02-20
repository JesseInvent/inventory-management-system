<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RemovedCompletedStatusFieldInOrdersTable extends Migration
{
	public function up()
	{
		//
		$this->forge->dropColumn("orders", "completed_status");
	}

	public function down()
	{
		//
	}
}
