<?php

use App\Horario;
use App\Ruta;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Illuminate\Database\Seeder;

class HorariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $startTime = Carbon::create(2019,11, 21, 5, 0, 0);
        $endTime = CarbonImmutable::create(2019,11, 21, 23, 0, 0);
        $j = 1;
        for($startTime; $startTime <= $endTime; $startTime->addMinutes(6)) {
            $startStation = CarbonImmutable::parse($startTime->toDateTimeString());
            $rutaIda = Ruta::create([
                'name' => 'Ruta '.$j,
            ]);
            $j++;
            $rutaVuelta = Ruta::create([
                'name' => 'Ruta '.$j,
            ]);
            $j++;

            for ($i = 0; $i < 4; $i++) {
                $linea1_id_regreso = 4;
                Horario::create([
                    'arrive_time' => $startStation->addMinutes(4*$i),
                    'leave_time' => $startStation->addMinutes(4*$i),
                    'linea_id' => 1,
                    'estacion_id' => $i + 1,
                    'ruta_id' => $rutaIda->id,
                ]);

                Horario::create([
                    'arrive_time' => $startStation->addMinutes(4*$i),
                    'leave_time' => $startStation->addMinutes(4*$i),
                    'linea_id' => 1,
                    'estacion_id' => $linea1_id_regreso - $i,
                    'ruta_id' => $rutaVuelta->id,
                ]);
            }
        }
    }
}
