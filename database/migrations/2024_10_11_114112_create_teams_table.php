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
        Schema::create('teams', function (Blueprint $table) {
            $table->id(); // Identifiant unique de l'équipe
            $table->string('name'); // Nom de l'équipe
            $table->text('description')->nullable(); // Description de l'équipe
            $table->unsignedBigInteger('leader_id')->nullable(); // Relation avec le leader de l'équipe
            $table->timestamps(); // Créé à et mis à jour à

            // Définition de la clé étrangère pour le leader de l'équipe
            $table->foreign('leader_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
