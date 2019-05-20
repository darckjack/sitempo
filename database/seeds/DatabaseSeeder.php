<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LineasSeeder::class);
        $this->call(EstacionesSeeder::class);
        $this->call(TrenesSeeder::class);
        $this->call(EstacionesLineasSeeder::class);
        $this->call(HorariosSeeder::class);
    }
}
