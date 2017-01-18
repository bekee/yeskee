<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBonusAndUserTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function (Blueprint $table) {
			$table->boolean('referral_paid')->default(0);
		});
		Schema::table('bonuses', function (Blueprint $table) {
			$table->enum('user_type', ['mine', 'referral', 'agent'])->default('mine');
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
