<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team; // Assurez-vous que le modèle Team existe

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer des équipes fictives
        Team::factory()->count(5)->create(); // Assurez-vous d'avoir une factory pour les équipes
    }
}
