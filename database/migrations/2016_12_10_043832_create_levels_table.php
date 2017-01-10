<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLevelsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('levels', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->double('amount');
			$table->boolean('discounted')->default(false);
			$table->boolean('active')->default(false);
			$table->double('discount')->default(0.0);
			$table->enum('set_users', ['new', 'all']);
			
			$table->boolean('referral')->default(false);
			$table->double('referred_discount')->default(0.0);
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
		Schema::dropIfExists('levels');
	}
}
