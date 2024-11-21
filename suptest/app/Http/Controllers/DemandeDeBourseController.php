<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bourse;
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
        $existingBourseCNE = Bourse::where('cin', $request->cin)->first();
        $existingBourseMassar = Bourse::where('cneMassar', $request->cin_massar)->first();

        // Check if either CNE or CIN_MASSAR is already registered for a bourse
        if ($existingBourseCNE || $existingBourseMassar) {
            // Return a response indicating that the user is already registered for a bourse
            return response()->json([
                'error' => 'User already registered for a bourse.',
            ], 400); // Bad request status code
        }

        // No existing bourse registration found, proceed to create a new bourse record
        $bourse = new Bourse;

        // Assign request data to the bourse attributes
        $bourse->code_inscription = DB::table('formation_initial')->pluck('code_inscription')->last();
        $bourse->nom_complet = $request->Nom;
        $bourse->email = $request->email;
        $bourse->cin = $request->cin;
        $bourse->date_naissance = $request->date_naissance;
        $bourse->tele = $request->telephone;
        $bourse->adresse = $request->adresse;
        $bourse->nomCompletPere = $request->nom_pere_complet;
        $bourse->cneMassar = $request->cin_massar;
        $bourse->etatPere = $request->profession;
        $bourse->nomCompletMere = $request->ncm;
        $bourse->etatMere = $request->profession_mere;
        $bourse->nomCompletTuteur = $request->nct;
        $bourse->etatTuteur = $request->profession_tuteur;

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
            $items = Bourse::orderBy('id', 'DESC')->get();

            return view('admin/bourse_liste', compact('items'))->with('panelactive', 'inscription_Bourse')->with('val', 1);
        }
        return view('admin/login');
    }

    public function index()
    {
        return view('demande-de-bourse');
    }
}
