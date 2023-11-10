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
        Schema::create('notificacion', function (Blueprint $table) {
            $table->string('encabezado', 30);
            $table->string('mensaje', 70);
            $table->timestamp('fecha_hora');
            $table->integer('notificacionID')->primary();
            $table->integer('pedido_ProductoID')->index('pedido_ProductoID');
            $table->unsignedBigInteger('usuarioID')->index('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notificacion');
    }
};
