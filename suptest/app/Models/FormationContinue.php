<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationContinue extends Model
{
    use HasFactory;

    protected $table='formation_continue';
    
    protected $fillable = [
        'code_inscription',
        'nom',
        'prenom',
        'last_diplome',
        'cneMassar',
        'email',
        'tele',
        'sexe',
        'nationalite',
        'adresse',
        'date_naissance',
        'cin',
        'formation',
        'villeFormation',
        'cin_path',
        'cv_path',
        'diplome_path',
        'recu_inscription_path',
        'tsrc',
        'completedFile',
    ];
}
