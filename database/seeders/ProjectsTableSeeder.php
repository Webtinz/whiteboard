<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insérer plusieurs projets de test dans la table projects
        DB::table('projects')->insert([
            [
                'name' => 'Project Alpha',
                'description' => 'This is the description for Project Alpha.',
                'created_by' => 1, // Remplacez par un ID utilisateur valide
                'deadline' => Carbon::now()->addDays(30), // Ajoute une date limite de 30 jours à partir de maintenant
                'status' => "Pending",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Project Beta',
                'description' => 'This is the description for Project Beta.',
                'created_by' => 1, // Remplacez par un autre ID utilisateur valide
                'deadline' => Carbon::now()->addDays(60), // Ajoute une date limite de 60 jours à partir de maintenant
                'status' => "Completed",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Project Gamma',
                'description' => 'This is the description for Project Gamma.',
                'created_by' => 1, // Remplacez par un ID utilisateur valide
                'deadline' => Carbon::now()->addDays(90), // Ajoute une date limite de 90 jours à partir de maintenant
                'status' => "Progress",
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
