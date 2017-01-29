<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUserLevelStatusTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
	    Schema::table('level_statuses', function (Blueprint $table) {
		    $table->integer('level_status_id')->unsigned()->nullable();
		    $table->foreign('level_status_id')->references('id')->on('level_statuses')->onDelete('cascade');
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
