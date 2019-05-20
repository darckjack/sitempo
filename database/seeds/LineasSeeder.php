<?php

use Illuminate\Database\Seeder;

class LineasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Linea::create([
            'name' => 'Linea 1'
        ]);
        \App\Linea::create([
            'name' => 'Linea 2'
        ]);
    }
}
