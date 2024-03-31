<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;


class MobilesExternesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

            for ($i = 2018; $i <= 2024; $i++) {
            DB::table('externes')->insert
            ([
                'année' => $i,
                'nbre' => $i - 1990,
            ]);
            }  
            for ($i = 2018; $i <= 2024; $i++) {
                DB::table('mobiles')->insert
                ([
                    'année0' => $i ,
                    'nbre1' => $i - 2000,
                ]);
                }        
    }
}
