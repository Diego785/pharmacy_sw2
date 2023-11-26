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
        Schema::create('detalle_inventario', function (Blueprint $table) {
            $table->id();
            $table->string('numero_lote');
            $table->integer('cantidad');
            $table->double('precio_compra');
            $table->double('total');
            $table->timestamp('fecha_venc_lote');
            $table->unsignedBigInteger('proveedorID')->index('proveedorID');
            $table->unsignedBigInteger('productoID')->index('productoID');
            $table->unsignedBigInteger('inventarioID')->index('inventarioID');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_inventario');
    }
};
