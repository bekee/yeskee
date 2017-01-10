<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelStatusesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('level_statuses', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_level_id')->unsigned();
			$table->integer('left_leg')->unsigned()->nullable();
			$table->integer('right_leg')->unsigned()->nullable();
			
			$table->integer('left_leg1')->unsigned()->nullable();
			$table->integer('left_leg2')->unsigned()->nullable();
			
			$table->integer('right_leg1')->unsigned()->nullable();
			$table->integer('right_leg2')->unsigned()->nullable();
			$table->timestamps();
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('level_statuses');
	}
}
