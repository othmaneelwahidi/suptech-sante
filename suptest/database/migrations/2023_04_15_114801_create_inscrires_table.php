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
        Schema::create('inscrires', function (Blueprint $table) {
            $table->id();
            $table->string('Nom');
            $table->string('Prenom');
            $table->string('CIN_MASSAR');
            $table->string('Email');
            $table->string('Tele');
            $table->string('Sexe');
            $table->string('Filiere');
            $table->string('dip');
            $table->string('nat');
            $table->string('tsrc')->NULL;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscrires');
    }
};
