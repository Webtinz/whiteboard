<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Team;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Assurez-vous d'avoir déjà des utilisateurs et des équipes dans la base de données
        $users = User::all();
        $teams = Team::all();

        if ($users->isEmpty() || $teams->isEmpty()) {
            $this->command->info('No users or teams found! Make sure to seed users and teams first.');
            return;
        }

        // Boucle pour créer plusieurs posts
        for ($i = 0; $i < 10; $i++) {
            Post::create([
                'content' => 'This is post number ' . ($i + 1),
                'author_id' => $users->random()->id,  // Récupère un utilisateur au hasard
                'team_id' => $teams->random()->id,    // Récupère une équipe au hasard
            ]);
        }
    }
}
