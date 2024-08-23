<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'username' => 'author',
            'name' => 'Test User',
            'role' => 'author',
            'password' => bcrypt('123456'),
        ]);
        
        User::factory()->create([
            'username' => 'admin',
            'name' => 'Test User',
            'role' => 'admin',
            'password' => bcrypt('123456'),
        ]);
    }
}
