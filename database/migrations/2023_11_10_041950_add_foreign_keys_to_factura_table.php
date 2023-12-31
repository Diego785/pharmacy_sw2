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
        Schema::table('factura', function (Blueprint $table) {
            $table->foreign(['clienteID'], 'FK_Factura_cliente')->references(['id'])->on('cliente')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['usuarioID'], 'FK_Factura_Users')->references(['id'])->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('factura', function (Blueprint $table) {
            $table->dropForeign('FK_Factura_cliente');
            $table->dropForeign('FK_Factura_Users');
        });
    }
};
