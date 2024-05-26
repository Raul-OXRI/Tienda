<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVentafacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventafactura', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cliente');
            $table->integer('id_personal');
            $table->integer('estado');
            $table->string('detalleProducto');
            $table->date('fecha_venta');
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
        Schema::dropIfExists('ventafactura');
    }
}
