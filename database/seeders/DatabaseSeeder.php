<?php

namespace Database\Seeders;

use App\Models\rima;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
            User::factory(5)->create();
        category::factory(5)->create();
        rima::factory(10)->create();
    

    }
}
