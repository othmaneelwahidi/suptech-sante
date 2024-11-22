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

    public function export($Filiere, $Ville)
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
        return view('filiere.1sty-cycle-initial');
    }

    public function secondCycle()
    {
        return view('filiere.2nd-y-cycle-initial');
    }

    public function formContinue()
    {
        return view('filiere.FormationsContinue');
    }

    public function formation()
    {
        return view('filiere.formations');
    }

    public function GBI()
    {
        return view('filiere.GB-initial');
    }

    public function GBT()
    {
        return view('filiere.GBtech-initial');
    }

    public function GDIAS()
    {
        return view('filiere.GDIAS-initial');
    }

    public function home()
    {
        return view('home');
    }

    public function LBM()
    {
        return view('filiere.LBM');
    }

    public function LBMI()
    {
        return view('filiere.LBM-initial');
    }

    public function LGIHI()
    {
        return view('filiere.LGIH-initial');
    }

    public function LGILH()
    {
        return view('filiere.LGILH');
    }

    public function LIAR()
    {
        return view('filiere.LIAR');
    }

    public function LIARI()
    {
        return view('filiere.LIAR-initial');
    }

    public function LIDSED()
    {
        return view('filiere.LIDESD');
    }

    public function LIDSEDI()
    {
        return view('filiere.LIDSED-initial');
    }

    public function LIFDM()
    {
        return view('filiere.LIFDM');
    }

    public function LIFDMI()
    {
        return view('filiere.LIFDM-initial');
    }

    public function LIIBO()
    {
        return view('filiere.LIIBO');
    }

    public function LIIBOI()
    {
        return view('filiere.LIIBO-initial');
    }

    public function LIP()
    {
        return view('filiere.LIP');
    }

    public function LIPI()
    {
        return view('filiere.LIP-initial');
    }

    public function LMM()
    {
        return view('filiere.LMM');
    }

    public function LMMI()
    {
        return view('filiere.LMM-initial');
    }

    public function LMMDSS()
    {
        return view('filiere.LMMDSS');
    }

    public function LMMDSSI()
    {
        return view('filiere.LMMDSS-initial');
    }

    public function LSG()
    {
        return view('filiere.LSG');
    }

    public function LSGI()
    {
        return view('filiere.LSG-initial');
    }

    public function MDMAR()
    {
        return view('filiere.MDMAR');
    }

    public function MDMARI()
    {
        return view('filiere.MDMAR-initial');
    }

    public function MEMT()
    {
        return view('filiere.MEMT');
    }

    public function MEMTI()
    {
        return view('filiere.MEMT-initial');
    }

    public function MMBGI()
    {
        return view('filiere.MMBG-initial');
    }

    public function MMGB()
    {
        return view('filiere.MMGB');
    }

    public function results()
    {
        return view('results');
    }

    public function suiviPreInsc()
    {
        return view('suivi-pre-inscription');
    }

    public function index()
    {
        return view('suivi-bourse');
    }

    public function suptech()
    {
        return view('suptech-envirenment');
    }
}
