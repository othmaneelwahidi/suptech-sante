<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FormationInitial;


class CheckBourseController extends Controller
{
    public function index()
    {
        return view('check_bourse');
    }
    public function checkInscription(Request $request)
{
$errorMessage = __('Votre code inscription incorrect ou bien Vous n\'êtes pas inscrit avec la bourse');


    try {
        $code_inscr = FormationInitial::where('code_inscription', $request->code_inscription)
            ->where('bourse', 'bourse_oui')
            ->first();
        if ($code_inscr) {
            
            return view('demande-de-bourse');;
        } else {
            return redirect()->back()->with('status', $errorMessage);
        }
    } catch (\Throwable $th) {
        $th->getMessage();
    }
    return view('check_bourse');
}
    
}
