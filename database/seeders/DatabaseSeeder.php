<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        $this->call(ProjectsTableSeeder::class);
        $this->call([
            UserSeeder::class,
            TeamSeeder::class,
            PostSeeder::class, // Ajoutez le seeder des posts après avoir inséré les utilisateurs et les équipes
        ]);
    }

}
