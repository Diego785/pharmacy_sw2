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
        Schema::create('detalle_nota_dev', function (Blueprint $table) {
            $table->id();   
            $table->integer('cantidad');
            $table->string('observacion', 50);
            $table->unsignedBigInteger('productoID')->index('productoID');
            $table->unsignedBigInteger('notadevID')->index('notadevID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_nota_dev');
    }
};
