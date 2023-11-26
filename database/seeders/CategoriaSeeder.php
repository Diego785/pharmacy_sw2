<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Inserta datos de prueba en la tabla categoria
         DB::table('categoria')->insert([
            ['nombre' => 'Analgésicos'],
            ['nombre' => 'Antibióticos'],
            ['nombre' => 'Antihistamínicos'],
            ['nombre' => 'Antiinflamatorios'],
            ['nombre' => 'Antipiréticos'],
            ['nombre' => 'Antisépticos'],
            ['nombre' => 'Antivirales'],
            ['nombre' => 'Articulaciones y Músculos'],
            ['nombre' => 'Asma y Alergias'],
            ['nombre' => 'Cardiología'],
            ['nombre' => 'Cuidado Ocular'],
            ['nombre' => 'Cuidado de la Piel'],
            ['nombre' => 'Cuidado Digestivo'],
            ['nombre' => 'Cuidado Respiratorio'],
            ['nombre' => 'Cuidado de Heridas'],
            ['nombre' => 'Dermatología'],
            ['nombre' => 'Descongestionantes'],
            ['nombre' => 'Diabetes'],
            ['nombre' => 'Digestivos'],
            ['nombre' => 'Dolor e Inflamación'],
            ['nombre' => 'Enfermedades Respiratorias'],
            ['nombre' => 'Gastrointestinal'],
            ['nombre' => 'Gripe y Resfriado'],
            ['nombre' => 'Hemorroides'],
            ['nombre' => 'Homeopatía'],
            ['nombre' => 'Huesos y Articulaciones'],
            ['nombre' => 'Infecciones'],
            ['nombre' => 'Inmunizaciones y Vacunas'],
            ['nombre' => 'Laxantes'],
            ['nombre' => 'Mareo y Náuseas'],
            ['nombre' => 'Medicamentos Controlados'],
            ['nombre' => 'Medicamentos Genéricos'],
            ['nombre' => 'Medicamentos Veterinarios'],
            ['nombre' => 'Multivitamínicos'],
            ['nombre' => 'Neurológicos'],
            ['nombre' => 'Oftalmología'],
            ['nombre' => 'Oído, Nariz y Garganta'],
            ['nombre' => 'Oncología'],
            ['nombre' => 'Ortopedia'],
            ['nombre' => 'Osteoporosis'],
            ['nombre' => 'Pediculosis y Sarna'],
            ['nombre' => 'Pérdida de Peso'],
            ['nombre' => 'Primeros Auxilios'],
            ['nombre' => 'Productos de Belleza'],
            ['nombre' => 'Productos Naturales'],
            ['nombre' => 'Quemaduras'],
            // Agrega más datos según sea necesario
        ]);
    }
}
