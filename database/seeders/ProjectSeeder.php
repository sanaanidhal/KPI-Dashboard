<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        for ($i = 1; $i <= 5; $i++) {
            DB::table('projects')->insert
            ([
                'type' => 'E',
                'name' =>' Nidhal',
                'pole' => 'Projet',
                'date' => '1990-09-03',
                'lien' => 'link_example',
            ]);
            }  
            for ($i = 1; $i <= 5; $i++) {
                DB::table('projects')->insert
                ([
                    'type' => 'M',
                    'name' => 'Ghassen',
                    'pole' => 'Media',
                    'date' => '1990-09-15',
                    'lien' =>  'link_example',
                ]);
                } 
    }
}
