<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonusesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bonuses', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_level_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->double('amount');
			$table->enum('status', ['approved', 'unapproved','cancelled'])->default('unapproved');
			$table->string('purpose');
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
		Schema::dropIfExists('bonuses');
	}
}
