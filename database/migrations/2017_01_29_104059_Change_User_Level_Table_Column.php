<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeUserLevelTableColumn extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_levels', function (Blueprint $table) {
			$table->dropColumn('status');
		});
		Schema::table('user_levels', function (Blueprint $table) {
			$table->enum('status', ['pending', 'processing', 'progress', 'cancelled', 'completed']);
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}
}
