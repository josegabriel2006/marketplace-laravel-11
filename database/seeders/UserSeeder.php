<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users') -> insert([
            [
                'name' => 'José Gabriel',
                'username' => 'josegabriel',
                'email' => 'zegabrielandrade@gmail.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('password')
            ],

            [
                'name' => 'Vendedor vendor',
                'username' => 'vendedor',
                'email' => 'vendedor@gmail.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('password')
            ],

            [
                'name' => 'Cliente user',
                'username' => 'user',
                'email' => 'cliente@gmail.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('password')
            ]
        ]);
    }
}
