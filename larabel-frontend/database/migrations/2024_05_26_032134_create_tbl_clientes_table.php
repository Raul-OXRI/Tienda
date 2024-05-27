<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_clientes', function (Blueprint $table) {
            $table->id('cod_cliente');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('telefono', 15); // Assuming the phone number can include special characters like +, -, etc.
            $table->string('address', 50);
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
        Schema::dropIfExists('tbl_clientes');
    }
}
