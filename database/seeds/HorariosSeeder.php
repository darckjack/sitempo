<?php

use App\Horario;
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

        for($startTime; $startTime <= $endTime; $startTime->addMinutes(6)) {
            $startStation = CarbonImmutable::parse($startTime->toDateTimeString());

            for ($i = 0; $i < 19; $i++) {
                $linea1_id_regreso = 19;
                Horario::create([
                    'arrive_time' => $startStation->addMinutes(4*$i),
                    'leave_time' => $startStation->addMinutes(4*$i),
                    'linea_id' => 1,
                    'estacion_id' => $i + 1
                ]);

                Horario::create([
                    'arrive_time' => $startStation->addMinutes(4*$i),
                    'leave_time' => $startStation->addMinutes(4*$i),
                    'linea_id' => 1,
                    'estacion_id' => $linea1_id_regreso - $i
                ]);
            }

            for ($i = 0; $i < 10; $i++) {
                $linea2_id_regreso = 28;

                if ($i = 0) {
                    Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => 12
                    ]);

                    Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => $linea2_id_regreso - $i
                    ]);
                } elseif ($i = 9) {
                    Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => $linea2_id_regreso - $i
                    ]);

                    Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => 12
                    ]);
                } else {
                    Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => $i + 19
                    ]);

                    Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => $linea2_id_regreso - $i
                    ]);
                }
            }
        }
    }
}
