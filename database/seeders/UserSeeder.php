<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Assurez-vous que le modèle User existe

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Créer des utilisateurs fictifs
        User::factory()->count(10)->create(); // Assurez-vous d'avoir une factory pour les utilisateurs
    }
}
