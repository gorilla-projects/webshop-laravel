<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::create([
        //     'first_name'    => 'Donald',
        //     'last_name'     => 'Duck',
        //     'email'         => 'donald.duck@codegorilla.nl',
        //     'password'      => bcrypt('Gorilla1!'),
        //     'created_at'    => now(),
        //     'created_by'    => 1, 
        // ]);

        // \App\Models\User::create([
        //     'first_name'    => 'Katrien',
        //     'last_name'     => 'Duck',
        //     'email'         => 'katrien.duck@codegorilla.nl',
        //     'password'      => bcrypt('Gorilla1!'),
        //     'created_at'    => now(),
        //     'created_by'    => 1,
        // ]);

        \App\Models\User::factory(10)->create();
    }
}
