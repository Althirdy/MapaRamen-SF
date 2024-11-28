<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'Che Ricohermoso',
        //     'phone' => '09301342052',
        //     'email' => 'che@example.com',
        //     'username'=>'che',
        //     'role' => 1,
        //     'password' => Hash::make('password'),
        // ]);
    }
}
