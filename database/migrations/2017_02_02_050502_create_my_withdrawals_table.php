<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyWithdrawalsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('my_withdrawals', function (Blueprint $table) {
			$table->increments('id');
			$table->double('amount');
			$table->integer('user_id')->unsigned();
			$table->string('response')->nullable();
			$table->enum('status', ['pending', 'approved', 'cancelled'])->default('pending');
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('my_withdrawals');
	}
}
