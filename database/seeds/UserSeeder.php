<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Jaime De la O',
            'email' => 'jadymsn@hotmail.com',
            'password' => Hash::make('12345678')
        ]);
        \App\User::create([
            'name' => 'Carlos Gutierrez',
            'email' => 'carlo_semilio@hotmail.com',
            'password' => Hash::make('12345678')
        ]);
        \App\User::create([
            'name' => 'Nora Barragan',
            'email' => 'pastel.de.limon@hotmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
