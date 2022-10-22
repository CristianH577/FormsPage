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

            $table->string('modeSelect1')->nullable();
            $table->string('modePart1Input1')->nullable();

            $table->string('submodeSelect1')->nullable();
            $table->string('submodePart1Input1')->nullable();
            
            $table->string('rqFormInput1');
            $table->string('rqFormSelect1');
            $table->string('rqFormDate1Day')->nullable();
            $table->string('rqFormDate1Month')->nullable();
            $table->string('rqFormDate1Year')->nullable();
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
