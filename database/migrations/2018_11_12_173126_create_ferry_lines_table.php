<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFerryLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ferry_lines', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('departure_port_id');
            $table->foreign('departure_port_id')->references('id')->on('ferry_ports');
            $table->unsignedInteger('destination_port_id');
            $table->foreign('destination_port_id')->references('id')->on('ferry_ports');
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
        Schema::drop('ferry_lines');
    }
}
