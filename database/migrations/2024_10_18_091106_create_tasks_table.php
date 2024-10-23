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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title'); 
            $table->text('description')->nullable();
            $table->string('color')->nullable(); 

            $table->date('start_date');
            $table->time('start_time')->nullable();

            $table->date('end_date')->nullable();
            $table->time('end_time')->nullable()    ;


            $table->enum('status', ['scheduled', 'started', 'done'])->default('scheduled');  
            $table->enum('priority', ['urgent', 'high', 'medium', 'low'])->default('urgent');
// user_id-specific_users-public_or_private
            $table->unsignedBigInteger('user_id')->nullable();
            $table->text('specific_users')->nullable(); // Stocker les IDs des utilisateurs spécifiques
            $table->string('public_or_private')->default('public'); // public, privé
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
