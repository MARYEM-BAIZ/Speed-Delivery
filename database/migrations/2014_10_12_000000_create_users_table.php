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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('UserId')->unique();
            $table->string('Nom');
            $table->string('Prenom');
            $table->enum('role', ['administrateur', 'conducteur','client']);
            $table->string('Ville');
            $table->string('Username');
            $table->string('Email')->unique();
            $table->string('Phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('Password');
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('Image', 2048)->nullable();
            $table->dateTime('DateInscription');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
