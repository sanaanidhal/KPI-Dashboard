<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        //admin
        [
            'name' => 'Admin',
            'email' => 'Admin@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'admin',

        ],
         //user
         [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('111'),
            'role' => 'user',

        ],
    ]);
        
    }
}
