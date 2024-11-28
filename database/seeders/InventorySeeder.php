<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert([
            'name' => 'Baran',
            'quantity' => 40,
            'measurement' => '(g)grams',
            'status' => 'Critical',
            'manufactured' => '2023-11-21',
            'expiration' => '2023-11-21',
            'delivered' => '2023-11-21',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Beef Gyudon',
            'quantity' => 2200,
            'measurement' => '(g)grams',
            'status' => 'Low',
            'manufactured' => '2023-11-21',
            'expiration' => '2023-11-21',
            'delivered' => '2023-11-21',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('ingredients')->insert([
            'name' => 'Beef Karubi',
            'quantity' => 1300,
            'measurement' => '(g)grams',
            'status' => 'Low',
            'manufactured' => '2023-11-21',
            'expiration' => '2023-11-21',
            'delivered' => '2023-11-21',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
