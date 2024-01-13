<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $positions = [
            ['name' => 'Salesperson', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Cashier', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
            ['name' => 'Manager', 'created_at' => Carbon::now(), 'updated_at' => Carbon::now()],
        ];

        $stores = [
            [
                'name' => 'Generation PC',
                'address' => 'Gen Generoso Street',
                'email' => 'genpcstore@gmail.com',
                'contact' => '09153721953',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Healthy Chill',
                'address' => 'Burgos Street',
                'email' => 'healthychillstore@gmail.com',
                'contact' => '09230328037',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Solid Wares',
                'address' => 'Monserrat Street',
                'email' => 'solidwaresstore@gmail.com',
                'contact' => '09271846103',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        $employees = [
            [
                'name' => 'John Andales ',
                'address' => 'Montero Street',
                'store_id' => 1, // Replace with the actual IDs from your stores seeder
                'position_id' => 1, // Replace with the actual IDs from your positions seeder
                'email' => 'john_andales@gmail.com',
                'contact' => '09219758203',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Parungao ',
                'address' => 'Alvar Street',
                'store_id' => 2, // Replace with the actual IDs from your stores seeder
                'position_id' => 2, // Replace with the actual IDs from your positions seeder
                'email' => 'jane_parungao@gmail.com',
                'contact' => '09165430985',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Michael Banquil ',
                'address' => 'Guava Junction',
                'store_id' => 3, // Replace with the actual IDs from your stores seeder
                'position_id' => 3, // Replace with the actual IDs from your positions seeder
                'email' => 'michael_banquil@gmail.com',
                'contact' => '09143452097',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Fernandez ',
                'address' => 'Ericson Street',
                'store_id' => 1, // Replace with the actual IDs from your stores seeder
                'position_id' => 1, // Replace with the actual IDs from your positions seeder
                'email' => 'emily_fernandez@gmail.com',
                'contact' => '09012740389',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'William Cuyco ',
                'address' => 'Santo Domingo Street',  
                'store_id' => 2, // Replace with the actual IDs from your stores seeder
                'position_id' => 2, // Replace with the actual IDs from your positions seeder
                'email' => 'will_cuyco@gmail.com',
                'contact' => '09012740389',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sophia Ong ',
                'address' => 'Sto. Nino Street',
                'store_id' => 3, // Replace with the actual IDs from your stores seeder
                'position_id' => 3, // Replace with the actual IDs from your positions seeder
                'email' => 'sophia_ong@gmail.com',
                'contact' => '09234576198',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        DB::table('stores')->insert($stores);
        DB::table('positions')->insert($positions);
        DB::table('employees')->insert($employees);
    }
}
