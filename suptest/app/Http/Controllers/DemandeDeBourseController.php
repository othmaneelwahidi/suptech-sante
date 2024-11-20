<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bourses;
use App\Models\Inscrire;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use ZipArchive;


class DemandeDeBourseController extends Controller
{
    public function InsertBourse(Request $request)
    {
        // Check if a bourse record already exists for the provided CNE or CIN_MASSAR
        $existingBourseCNE = bourses::where('cne', $request->cin)->first();
        $existingBourseMassar = bourses::where('cin_massar', $request->cin_massar)->first();
    
        // Check if either CNE or CIN_MASSAR is already registered for a bourse
        if ($existingBourseCNE || $existingBourseMassar) {
            // Return a response indicating that the user is already registered for a bourse
            return response()->json([
                'error' => 'User already registered for a bourse.',
            ], 400); // Bad request status code
        }
    
        // No existing bourse registration found, proceed to create a new bourse record
        $bourse = new bourses;
    
        // Assign request data to the bourse attributes
        $bourse->code_inscription = DB::table('inscrires')->pluck('code_inscription')->last();
        $bourse->Nom = $request->Nom;
        $bourse->email = $request->email;
        $bourse->cne = $request->cin;
        $bourse->date_naissance = $request->date_naissance;
        $bourse->telephone = $request->telephone;
        $bourse->adresse = $request->adresse;
        $bourse->nom_pere_complet = $request->nom_pere_complet;
        $bourse->cin_massar = $request->cin_massar;
        $bourse->profession = $request->profession;
        $bourse->nom_mere_complet = $request->ncm;
        $bourse->profession_mere = $request->profession_mere;
        $bourse->nom_tuteur_complet = $request->nct;
        $bourse->profession_tuteur = $request->profession_tuteur;
    
        // Save the bourse record
        $bourse->save();
    
        // Generate PDF for the bourse inscription
        $code_inscription_recu = $bourse->code_inscription;
        $pdf = FacadePDF::loadView('recu_bourse', ['request' => $request, 'code_inscription_recu' => $code_inscription_recu]);
    
        // Return the PDF download response
        return $pdf->download('recu_bourse.pdf');
    }
    
        public function CheckUserLoginBourse()
        {
            if (Auth::check()) {
                $data = bourses::orderBy('id', 'DESC')->get();
    
                return view('admin/Bourse_liste', compact('data'))->with('panelactive', 'inscription_Bourse')->with('val', 1);
    
            }
            return view('admin/Login');
    
        }
    
    public function index()
{
    return view('demande-de-bourse');
}

}
