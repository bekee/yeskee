<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_level_id')->unsigned();
			$table->double('amount');
			$table->integer('user_id')->unsigned();
			$table->text('image')->nullable();
			$table->enum('type', ['bank-transfer', 'bank-deposit']);
			$table->enum('status', ['pending', 'paid', 'cancelled']);
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
		Schema::dropIfExists('payments');
	}
}