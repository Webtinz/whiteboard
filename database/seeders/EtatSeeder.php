<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Etat;

class EtatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Données par défaut à insérer dans la table etats
        $etats = [
            ['name' => 'Backlog'],
            ['name' => 'Current sprint'],
            ['name' => 'Active'],
            ['name' => 'Reviews'],
            ['name' => 'Done'],
        ];

        // Insérer les données
        foreach ($etats as $etat) {
            Etat::create($etat);
        }
    }
}
