<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class SecondSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define skills
        $skills = ['HTML', 'CSS', 'PHP', 'Laravel'];

        // Generate random data for 20 users
        for ($i = 1; $i <= 20; $i++) {
            foreach ($skills as $skill) {
                DB::table('seconds')->insert([
                    'competence' => $skill,
                    'user_id' => $i,
                    'note' => mt_rand(0, 20), // Generate a random note
                    'notemax' => 20,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }
        }
    }
}
