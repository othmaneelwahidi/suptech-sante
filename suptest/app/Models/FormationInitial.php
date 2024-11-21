<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationInitial extends Model
{
    use HasFactory;
    
    protected $table='formation_initial';
    
    protected $fillable = [
        'code_inscription', 
        'nom', 'prenom', 
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
        'bourse',
    ];

    public function bourses()
    {
        return $this->hasMany(Bourse::class, 'code_inscription', 'code_inscription');
    }
}
