<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 9) as $index) {
            Task::create([
                'title' => $faker->sentence(3),
                'description' => $faker->paragraph(4),
                'priority' => $faker->randomElement(['high', 'medium', 'low']),
                'date' => $faker->date(),
                'duration' => $faker->numberBetween(1, 10)
            ]);
        }
    }

}
