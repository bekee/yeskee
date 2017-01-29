<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLevelMessageTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('level_messages');
		
		Schema::create('level_messages', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('sender_id')->unsigned()->nullable();
			$table->integer('receiver_id')->unsigned()->nullable();
			$table->integer('user_level_id')->unsigned();
			$table->text('comment');
			$table->enum('status', ['read', 'unread'])->default('unread');
			$table->timestamps();
			
			$table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('user_level_id')->references('id')->on('user_levels')->onDelete('cascade');
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
