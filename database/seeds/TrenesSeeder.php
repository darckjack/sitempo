<?php

use Illuminate\Database\Seeder;

class TrenesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 17; $i++) {
            \App\Tren::create([
                'name' => "linea1-#{$i}",
                'direction' => true
            ]);
            \App\Tren::create([
                'name' => "linea1-#{$i}",
                'direction' => false
            ]);
        }
        for ($i = 1; $i < 9; $i++) {
            \App\Tren::create([
                'name' => "linea2-#{$i}",
                'direction' => true
            ]);
            \App\Tren::create([
                'name' => "linea2-#{$i}",
                'direction' => false
            ]);
        }
    }
}
