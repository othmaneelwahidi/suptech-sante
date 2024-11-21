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
        Schema::create('formation_continue', function (Blueprint $table) {
            $table->id();
            $table->string('code_inscription')->unique();
            $table->string('nom');
            $table->string('prenom');
            $table->string('last_diplome');
            $table->string('cneMassar')->unique();
            $table->string('email')->unique();
            $table->integer('tele')->unique();
            $table->string('sexe');
            $table->string('nationalite');
            $table->string('adresse');
            $table->string('date_naissance');
            $table->string('cin')->unique();
            $table->string('formation');
            $table->string('villeFormation');
            $table->string('cin_path'); 
            $table->string('cv_path'); 
            $table->string('diplome_path'); 
            $table->string('recu_inscription_path');
            $table->string('tsrc')->nullable();
            $table->boolean('completedFile')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formation_continue');
    }
};
