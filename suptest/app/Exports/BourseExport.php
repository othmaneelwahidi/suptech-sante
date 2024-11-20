<?php

namespace App\Exports;

use App\Models\bourses;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class BourseExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    private $Type;

    public function __construct($Type)
    {
        $this->Type = $Type;
    }
    
    
    public function collection()
    {
        if($this->Type != 'All'){
            $data = bourses::select('Nom', 'email', 'cne', 'date_naissance', 'telephone', 'nom_pere_complet', 'cin_massar', 'adresse', 'profession', 'Sectors', 'type_bourse', 'compte_bancaire', 'nom_mere_complet', 'profession_mere', 'created_at')
                ->where('Sectors', $this->Type)
                ->get()
                ->map(function ($row, $index) {
                    return [
                        $index + 1,
                        $row->Nom,
                        $row->email,
                        $row->cne,
                        $row->date_naissance,
                        $row->telephone,
                        $row->adresse,
                        $row->nom_pere_complet,
                        $row->cin_massar,
                        $row->profession,
                        $row->nom_mere_complet,
                        $row->profession_mere,
                        $row->type_bourse,
                        $row->nom_tuteur_complet,
                        $row->profession_tuteur,
                        $row->created_at,
                    ];
                });
        }else{
            $data = bourses::select('Nom', 'email', 'cne', 'date_naissance', 'telephone', 'adresse', 'nom_pere_complet', 'cin_massar', 'profession', 'nom_mere_complet', 'profession_mere','nom_tuteur_complet','profession_tuteur', 'created_at')
            ->get()
            ->map(function ($row, $index) {
                return [
                    $index + 1,
                    $row->Nom,
                    $row->email,
                        $row->cne,
                        $row->date_naissance,
                        $row->telephone,
                        $row->adresse,
                        $row->nom_pere_complet,
                        $row->cin_massar,
                        $row->profession,
                        $row->nom_mere_complet,
                        $row->profession_mere,
                        $row->type_bourse,
                        $row->nom_tuteur_complet,
                        $row->profession_tuteur,
                        $row->created_at,
                ];
            });
        }
        
        return $data;
    }

    public function headings(): array
    {
        return [
            '#',
            'Nom',
            'Email',
            'CNE',
            'Date de naissance',
            'Téléphone',
            'Adresse',
            'Nom complet du père',
            'CIN massar',
            'Profession ',
            'Nom complet de la mère',
            'Profession mère',
            'Nom complet de Tuteur',
            'Profession tuteur',
            "Date d'envoi",
        ];
    }
}
