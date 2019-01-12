<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrepaidTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prepaid_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('citizen_id');
            $table->foreign('citizen_id')->references('id')->on('citizens');
            $table->unsignedInteger('ferry_line_id');
            $table->foreign('ferry_line_id')->references('id')->on('ferry_lines');
            $table->dateTime('valid_from');
            $table->dateTime('valid_to');
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
        Schema::drop('prepaid_tickets');
    }
}
