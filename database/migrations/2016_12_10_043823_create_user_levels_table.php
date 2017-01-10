<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLevelsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_levels', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('level_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->enum('status', ['completed', 'pending', 'cancelled']);
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
		Schema::dropIfExists('user_levels');
	}
}
