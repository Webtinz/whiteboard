<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id(); // Identifiant unique de l'post
            $table->text('content'); // Contenu du post
            $table->unsignedBigInteger('author_id'); // Relation avec l'utilisateur (auteur du post)
            $table->unsignedBigInteger('team_id'); // Relation avec l'équipe
            $table->timestamps();

            // Définition des clés étrangères
            $table->foreign('author_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade'); // Vérifie que teams.id est correct
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
