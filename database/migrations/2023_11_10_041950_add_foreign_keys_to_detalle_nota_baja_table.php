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
        Schema::table('detalle_nota_baja', function (Blueprint $table) {
            $table->foreign(['productoID'], 'FK_Detalle_Nota_Baja_Producto')->references(['id'])->on('producto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign(['bajaID'], 'FK_Detalle_Nota_Baja_Baja')->references(['id'])->on('nota_baja')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_nota_baja', function (Blueprint $table) {
            $table->dropForeign('FK_Detalle_Nota_Baja_Producto');
            $table->dropForeign('FK_Detalle_Nota_Baja_Baja');
        });
    }
};
