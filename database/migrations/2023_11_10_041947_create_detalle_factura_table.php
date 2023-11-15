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
        Schema::create('detalle_factura', function (Blueprint $table) {
      
            $table->integer('cantidad');
            $table->double('subtotal');
            $table->double('precio_u');
            $table->unsignedBigInteger('productoID')->index('productoID');
            $table->unsignedBigInteger('facturaID')->index('facturaID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_factura');
    }
};
