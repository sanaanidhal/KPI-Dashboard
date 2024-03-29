<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class PremierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

        foreach ($months as $month) {
            $completedOnTime = rand(0, 20);
            $totalTasks = rand(15, 40); 
        
            DB::table('premiers')->insert([
                'month' => $month,
                'completed_on_time' => $completedOnTime,
                'total_tasks' => $totalTasks,
                'created_at' => now(),
                'updated_at' => now()
                
            ]);
        }
    }
}
