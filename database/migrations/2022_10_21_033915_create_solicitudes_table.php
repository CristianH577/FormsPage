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
            $table->integer('form');
            $table->integer('mode');
            $table->integer('submode');

            $table->string('data1Select1')->nullable();
            $table->string('data1Part1Input1')->nullable();
            $table->string('data1Part1Date1')->nullable();

            $table->string('data2Select1')->nullable();
            $table->string('data2Part1Input1')->nullable();
            $table->string('data2Part1Date1')->nullable();
            
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
