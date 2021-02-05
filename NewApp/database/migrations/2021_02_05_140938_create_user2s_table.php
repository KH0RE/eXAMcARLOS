<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUser2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user2s', function (Blueprint $table) {
            $table->id();
            $table->string('nombreUsuario')->nullable();
            $table->string('nombreCompleto')->nullable();
            $table->string('email')->nullable();
            $table->string('telefono')->nullable();
            $table->string('edad')->nullable();
            $table->string('FechaNaci')->nullable();

            $table->unsignedBigInteger('configuracions_id')->unsigned()->nullable();
            $table->foreign('configuracions_id')->references('id')->on('configuracions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('user2s');
    }
}
