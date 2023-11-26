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
        Schema::create('factura', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nit');
            $table->timestamp('fecha');
            $table->double('total');
            $table->string('nota', 30);
            $table->char('tipo');
            $table->unsignedBigInteger('clienteID')->index('clienteID');
            $table->unsignedBigInteger('usuarioID')->index('usuarioID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('factura');
    }
};
