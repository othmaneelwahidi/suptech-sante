<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bourse extends Model
{
    use HasFactory;

    protected $table = 'bourse';

    protected $fillable = [
        'nom_complet',
        'email',
        'cin',
        'date_naissance',
        'tele',
        'adresse',
        'cneMassar',
        'nomCompletPere',
        'etatPere',
        'nomCompletMere',
        'etatMere',
        'nomCompletTuteur',
        'etatTuteur',
        'code_inscription',
    ];

    public function formationInitial()
    {
        return $this->belongsTo(FormationInitial::class, 'code_inscription', 'code_inscription');
    }
}
