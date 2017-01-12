<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeysTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('user_details', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
		Schema::table('agents', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
		Schema::table('user_banks', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('bank_id')->references('id')->on('banks')->onDelete('cascade');
		});
		Schema::table('user_referers', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('referred')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('agent_id')->references('id')->on('agents')->onDelete('cascade');
		});
		Schema::table('user_levels', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('level_id')->references('id')->on('levels')->onDelete('cascade');
		});
		Schema::table('payments', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('user_level_id')->references('id')->on('user_levels')->onDelete('cascade');
		});
		Schema::table('admins', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
		Schema::table('level_statuses', function (Blueprint $table) {
			$table->foreign('right_leg')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('left_leg')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('user_level_id')->references('id')->on('user_levels')->onDelete('cascade');
		});
		Schema::table('due_payments', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('user_level_id')->references('id')->on('user_levels')->onDelete('cascade');
		});
		
		Schema::table('paid_users', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('user_level_id')->references('id')->on('user_levels')->onDelete('cascade');
		});
		Schema::table('my_wallets', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
		Schema::table('my_message_logs', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('message_id')->references('id')->on('messages')->onDelete('cascade');
		});
		Schema::table('bonuses', function (Blueprint $table) {
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('user_level_id')->references('id')->on('user_levels')->onDelete('cascade');
		});
		Schema::table('level_messages', function (Blueprint $table) {
			$table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
			$table->foreign('receiver_id')->references('id')->on('users')->onDelete('cascade');
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
		
	}
}
