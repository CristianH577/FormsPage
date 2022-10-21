<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->int('form');
            $table->int('mode');
            $table->int('submode');
            $table->string('data1Select1');
            $table->string('data1Part1Input1');
            $table->string('data1Part1Date1');
            $table->string('data1Part1Select1');
            $table->string('data1Part1Input2');
            $table->string('data2Select1');
            $table->string('data2Part1Input1');
            $table->string('data2Part1Date1');
            $table->string('data2Part1Select1');
            $table->string('data2Part1Input2');
            $table->string('data3Input1');
            $table->string('data3Select1');
            $table->string('data3Input2');
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
        Schema::dropIfExists('solicitudes');
    }
};
