<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('level_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sender_id')->unsigned();
	        $table->integer('receiver_id')->unsigned();
	        $table->integer('user_level_id')->unsigned();
	        $table->text('message');
	        $table->enum('status',['read','unread'])->default('unread');
	        
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
        Schema::dropIfExists('level_messages');
    }
}
