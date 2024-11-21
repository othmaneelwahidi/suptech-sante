<?php

namespace App\Http\Controllers;

use App\Exports\BourseExport;
use App\Exports\InscrireExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ViewsController extends Controller
{
    public function campuses()
    {
        return view('campuses');
    }

    public function concoursPlan()
    {
        return view('concours-planning');
    }

    public function docs()
    {
        return view('docs');
    }

    public function export( $Filiere, $Ville) 
    {
        return Excel::download(new InscrireExport($Filiere, $Ville), 'Inscription_Liste.xlsx');
    }
    
    public function exportBourse($Type) 
    {
        return Excel::download(new BourseExport($Type), 'Inscription_Bourse.xlsx');
    }

    public function bourse()
    {
        return view('suiviBourse');
    }

    public function firstCycle()
    {
        return view('1sty-cycle-initial');
    }

    public function secondCycle()
    {
        return view('2nd-y-cycle-initial');
    }

    public function formContinue()
    {
        return view('FormationsContinue');
    }

    public function formation()
    {
        return view('formations');
    }

    public function GBI()
    {
        return view('GB-initial');
    }

    public function GBT()
    {
        return view('GBtech-initial');
    }

    public function GDIAS()
    {
        return view('GDIAS-initial');
    }

    public function home()
    {
        return view('home');
    }

    public function LBM()
    {
        return view('LBM');
    }

    public function LBMI()
    {
        return view('LBM-initial');
    }

    public function LGIHI()
    {
        return view('LGIH-initial');
    }

    public function LGILH()
    {
        return view('LGILH');
    }

    public function LIAR()
    {
        return view('LIAR');
    }

    public function LIARI()
    {
        return view('LIAR-initial');
    }

    public function LIDESD()
    {
        return view('LIDESD');
    }

    public function LIDSEDI()
    {
        return view('LIDSED-initial');
    }

    public function  LIFDM()
    {
        return view('LIFDM');
    }

    public function LIFDMI()
    {
        return view('LIFDM-initial');
    }

    public function LIIBO()
    {
        return view('LIIBO');
    }

    public function LIIBOI()
    {
        return view('LIIBO-initial');
    }

    public function LIP()
    {
        return view('LIP');
    }

    public function LIPI()
    {
        return view('LIP-initial');
    }

    public function LMM()
    {
        return view('LMM');
    }

    public function LMMI()
    {
        return view('LMM-initial');
    }

    public function LMMDSS()
    {
        return view('LMMDSS');
    }

    public function LMMDSSI()
    {
        return view('LMMDSS-initial');
    }

    public function LSG()
    {
        return view('LSG');
    }

    public function LSGI()
    {
        return view('LSG-initial');
    }

    public function MDMAR()
    {
        return view('MDMAR');
    }

    public function MDMARI()
    {
        return view('MDMAR-initial');
    }

    public function MEMT()
    {
        return view('MEMT');
    }

    public function MEMTI()
    {
        return view('MEMT-initial');
    }

    public function MMBGI()
    {
        return view('MMBG-initial');
    }

    public function MMGB()
    {
        return view('MMGB');
    }

    public function results()
    {
        return view('results');
    }

    public function suiviPreInsc()
    {
        return view('suivi-pre-inscription');
    }

    public function suptech()
    {
        return view('suptech-envirenment');
    }

}
