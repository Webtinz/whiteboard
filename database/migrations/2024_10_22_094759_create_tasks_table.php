<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('project_tasks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('end_date')->nullable();
            $table->integer('progress')->default(0);
            $table->foreignId('project_id')->constrained('projects')->onDelete('cascade'); // clé étrangère
            $table->foreignId('etat_id')->constrained('etats')->onDelete('cascade'); // clé étrangère
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projecttasks');
    }
};
