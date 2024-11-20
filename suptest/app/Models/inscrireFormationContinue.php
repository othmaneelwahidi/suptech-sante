<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inscrireFormationContinue extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'code_inscription',
        'Nom',
        'Prenom',
        'cni',
        'date_naissance',
        'CIN_MASSAR',
        'Email',
        'Tele',
        'Sexe',
        'Filiere',
        'dip',
        'nat',
        'ville',
        'tsrc',
        'completedFile',
    ];
}
