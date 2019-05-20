<?php

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
        $startTime = \Carbon\Carbon::create(2019,5, 20, 5, 0, 0);
        $endTime = \Carbon\CarbonImmutable::create(2019,5, 20, 23, 0, 0);

        for($startTime; $startTime <= $endTime; $startTime->addMinutes(6)) {
            $startStation = \Carbon\CarbonImmutable::parse($startTime->toDateTimeString());

            for ($i = 0; $i < 19; $i++) {
                $linea1_id_regreso = 19;
                \App\Horario::create([
                    'arrive_time' => $startStation->addMinutes(4*$i),
                    'leave_time' => $startStation->addMinutes(4*$i),
                    'linea_id' => 1,
                    'estacion_id' => $i + 1
                ]);

                \App\Horario::create([
                    'arrive_time' => $startStation->addMinutes(4*$i),
                    'leave_time' => $startStation->addMinutes(4*$i),
                    'linea_id' => 1,
                    'estacion_id' => $linea1_id_regreso - $i
                ]);
            }

            for ($i = 0; $i < 10; $i++) {
                $linea2_id_regreso = 28;

                if ($i = 0) {
                    \App\Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => 12
                    ]);

                    \App\Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => $linea2_id_regreso - $i
                    ]);
                } elseif ($i = 9) {
                    \App\Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => $linea2_id_regreso - $i
                    ]);

                    \App\Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => 12
                    ]);
                } else {
                    \App\Horario::create([
                        'arrive_time' => $startStation->addMinutes(4*$i),
                        'leave_time' => $startStation->addMinutes(4*$i),
                        'linea_id' => 2,
                        'estacion_id' => $i + 19
                    ]);

                    \App\Horario::create([
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
