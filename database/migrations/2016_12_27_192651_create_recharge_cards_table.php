<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRechargeCardsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recharge_cards', function (Blueprint $table) {
			$table->increments('id');
			$table->string('number');
			$table->enum('network', ['mtn', 'glo', 'etisalat', 'airtel']);
			$table->boolean('active')->default(0);
			$table->boolean('used')->default(0);
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
		Schema::dropIfExists('recharge_cards');
	}
}
