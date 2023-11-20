<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotaBajaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('nota_baja')->insert([
            ['fecha_dada_baja' => '2021-10-04', 'motivo' => 'Caducidad'],
            ['fecha_dada_baja' => '2021-10-10', 'motivo' => 'Retiro del mercado'],
            ['fecha_dada_baja' => '2021-10-15', 'motivo' => 'Reformulación'],
            ['fecha_dada_baja' => '2021-10-20', 'motivo' => 'Cambio de proveedor'],
            ['fecha_dada_baja' => '2021-10-25', 'motivo' => 'Baja demanda'],
            ['fecha_dada_baja' => '2021-11-01', 'motivo' => 'Problemas de calidad'],
            ['fecha_dada_baja' => '2021-11-05', 'motivo' => 'Exceso de inventario'],
            ['fecha_dada_baja' => '2021-11-10', 'motivo' => 'Cambio de presentación'],
            ['fecha_dada_baja' => '2021-11-15', 'motivo' => 'Problemas de suministro'],
            ['fecha_dada_baja' => '2021-11-20', 'motivo' => 'Modificación en la legislación'],
            ['fecha_dada_baja' => '2021-11-25', 'motivo' => 'Consolidación de productos similares'],
            ['fecha_dada_baja' => '2021-12-01', 'motivo' => 'Suspensión temporal de producción'],
            ['fecha_dada_baja' => '2021-12-05', 'motivo' => 'Actualización de empaque'],
            ['fecha_dada_baja' => '2021-12-10', 'motivo' => 'Retiro voluntario'],
            ['fecha_dada_baja' => '2021-12-15', 'motivo' => 'Reemplazo por nueva fórmula'],
            ['fecha_dada_baja' => '2021-12-20', 'motivo' => 'Problemas en la cadena de suministro'],
            ['fecha_dada_baja' => '2021-12-25', 'motivo' => 'Cambio en la estrategia de mercado'],
            ['fecha_dada_baja' => '2022-01-01', 'motivo' => 'Reevaluación de riesgos'],
            ['fecha_dada_baja' => '2022-01-05', 'motivo' => 'Reestructuración de la línea de productos'],
            ['fecha_dada_baja' => '2022-01-10', 'motivo' => 'Actualización de etiquetado'],
            ['fecha_dada_baja' => '2022-01-15', 'motivo' => 'Suspensión definitiva de producción'],
            ['fecha_dada_baja' => '2022-01-20', 'motivo' => 'Problemas logísticos'],
            ['fecha_dada_baja' => '2022-01-25', 'motivo' => 'Cambio en la demanda del mercado'],
            ['fecha_dada_baja' => '2022-02-01', 'motivo' => 'Nuevas regulaciones'],
            ['fecha_dada_baja' => '2022-02-05', 'motivo' => 'Problemas ambientales'],
            ['fecha_dada_baja' => '2022-02-10', 'motivo' => 'Retiro por efectos secundarios'],
            ['fecha_dada_baja' => '2022-02-15', 'motivo' => 'Fusión de empresas competidoras'],
            ['fecha_dada_baja' => '2022-02-20', 'motivo' => 'Reemplazo por versión mejorada'],
            ['fecha_dada_baja' => '2022-02-25', 'motivo' => 'Problemas de almacenamiento'],
            ['fecha_dada_baja' => '2022-03-01', 'motivo' => 'Cambio en la estrategia empresarial'],
            ['fecha_dada_baja' => '2022-03-05', 'motivo' => 'Problemas en la cadena de distribución'],
        ]);
        
    }
}
