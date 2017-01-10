<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_details', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned();
			$table->string('first_name');
			$table->string('other_name')->nullable();
			$table->string('last_name');
			$table->text('image')->nullable();
			$table->enum('sex', ['male', 'female']);
			$table->text('address')->nullable();
			$table->enum('state', ['Abia State', 'Adamawa State', 'Akwa Ibom State', 'Anambra State', 'Bauchi State', 'Bayelsa State', 'Benue State',
				'Borno State', 'Cross River State', 'Delta State', 'Ebonyi State', 'Edo State', 'Ekiti State', 'Enugu State', 'Federal Capital Territory',
				'Gombe State', 'Imo State', 'Jigawa State', 'Kaduna State', 'Kano State', 'Katsina State', 'Kebbi State', 'Kogi State', 'Kwara State', 'Lagos State',
				'Nasarawa State', 'Niger State', 'Ogun State', 'Ondo State', 'Osun State', 'Oyo State', 'Plateau State', 'Rivers State', 'Sokoto State', 'Taraba State',
				'Yobe State', 'Zamfara State'])->nullable();
			$table->string('phone')->unique();
			$table->string('hear_us')->nullable();
			$table->string('code');
			$table->string('url');
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
		Schema::dropIfExists('user_details');
	}
}
