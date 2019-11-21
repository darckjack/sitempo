<?php

use Illuminate\Database\Seeder;

class EstacionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Estacion::create([
            'name' => 'Periferico Sur',
        ]);
        \App\Estacion::create([
            'name' => 'Santuario Martires De Cristo Rey',
        ]);
        \App\Estacion::create([
            'name' => 'España',
        ]);
        \App\Estacion::create([
            'name' => 'Patria',
        ]);
//        \App\Estacion::create([
//            'name' => 'Isla raza',
//        ]);
//        \App\Estacion::create([
//            'name' => '18 de marzo',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Urdaneta',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Unidad Deportiva',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Santa filomena',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Washington',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Mexicalzingo',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Juarez',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Refugio',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Mezquitan',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Avila Camacho',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Division del norte',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Atemajac',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Dermatologico',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Periferico Norte',
//        ]);
//
//        \App\Estacion::create([
//            'name' => 'Plaza universidad',
//        ]);
//        \App\Estacion::create([
//            'name' => 'San Juan de dios',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Belisario Dominguez',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Oblatos',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Cristobal de Oñate',
//        ]);
//        \App\Estacion::create([
//            'name' => 'San Andres',
//        ]);
//        \App\Estacion::create([
//            'name' => 'San Jacinto',
//        ]);
//        \App\Estacion::create([
//            'name' => 'La Aurora',
//        ]);
//        \App\Estacion::create([
//            'name' => 'Tetlan',
//        ]);
    }
}
