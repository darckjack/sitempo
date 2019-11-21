<?php

use Illuminate\Database\Seeder;

class EstacionesLineasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\EstacionesLineas::create([
            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
            'estacion_id' => \App\Estacion::where('name', '=', 'Periferico Sur')->get()->first()->id
        ]);

        \App\EstacionesLineas::create([
            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
            'estacion_id' =>  \App\Estacion::where('name', '=', 'Santuario Martires De Cristo Rey')->get()->first()->id
        ]);

        \App\EstacionesLineas::create([
            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
            'estacion_id' =>  \App\Estacion::where('name', '=', 'España')->get()->first()->id
        ]);
        \App\EstacionesLineas::create([
            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
            'estacion_id' =>  \App\Estacion::where('name', '=', 'Patria')->get()->first()->id
        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Isla raza')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', '18 de marzo')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Urdaneta')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Unidad Deportiva')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Santa filomena')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Washington')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Mexicalzingo')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Juarez')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Refugio')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Mezquitan')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Avila Camacho')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Division del Norte')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Santa filomena')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Atemajac')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Dermatologico')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 1')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Periferico Norte')->get()->first()->id
//        ]);
//
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Juarez')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Plaza universidad')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'San Juan de dios')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Belisario Dominguez')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Oblatos')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Cristobal de Oñate')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'San Andres')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'San Jacinto')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'La Aurora')->get()->first()->id
//        ]);
//        \App\EstacionesLineas::create([
//            'linea_id' => \App\Linea::whereName('Linea 2')->get()->first()->id,
//            'estacion_id' =>  \App\Estacion::where('name', '=', 'Tetlan')->get()->first()->id
//        ]);
    }
}
