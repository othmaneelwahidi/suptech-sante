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
        Schema::create('bourse', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet')->unique();
            $table->string('email');
            $table->string('cin')->unique();
            $table->string('date_naissance');
            $table->integer('tele')->unique();
            $table->string('adresse');
            $table->string('cneMassar')->unique();
            $table->string('nomCompletPere');
            $table->string('etatPere');
            $table->string('nomCompletMere');
            $table->string('etatMere');
            $table->string('nomCompletTuteur');
            $table->string('etatTuteur');

            //for the relation beetwen 'formation initial' and 'bourse' 
            $table->string('code_inscription');
            $table->foreign('code_inscription')->references('code_inscription')->on('formation_initial')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bourse');
    }
};
