<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_personas', function (Blueprint $table) {
            $table->bigIncrements('cod_user');
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('correo')->nullable();
            $table->string('nit', 50)->nullable();
            $table->string('dpi', 50)->nullable();
            $table->string('direccion', 75)->nullable();
            $table->string('password')->nullable();
            $table->string('estado');
            $table->unsignedBigInteger('cod_rol');
            $table->foreign('cod_rol')->references('cod_rol')->on('tbl_rols')->onDelete('cascade');
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
        Schema::dropIfExists('tbl_personas');
    }
}
