<?php

namespace App\Http\Controllers;

use App\Models\bourses;
use App\Models\FormationInitial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use ZipArchive;


class PreInscriptionController extends Controller
{


    public function index()
    {
        // For example, return a view
        return view('pre-inscription'); // Ensure this view exists in your resources/views directory
    }



    public function Insert(Request $request)
    {
        $flag_inscription = false;
        $Check_Inscription = FormationInitial::where('cneMassar', $request->input('cin_massar'))
            ->where('formation', $request->input('Sectors'))
            ->first();
        $code_inscription = date('dmY') . substr(str_shuffle(MD5(microtime())), 0, 4);

        if (!$Check_Inscription) {
            $inscrire = new FormationInitial;
            $inscrire->code_inscription = $code_inscription;
            $inscrire->nom = $request->Nom;
            $inscrire->prenom = $request->Prenom;
            $inscrire->cin = $request->cin;
            $inscrire->date_naissance = $request->date_naissance;
            $inscrire->cneMassar = $request->cin_massar;
            $inscrire->email = $request->email;
            $inscrire->tele = $request->telephone;
            $inscrire->sexe = $request->Sexe;
            $inscrire->formation = $request->Sectors;
            $inscrire->bourse = $request->select_bourse;
            $inscrire->last_diplome = $request->dip;
            $inscrire->nationalite = $request->nat;
            $inscrire->villeFormation = $request->Ville;
            $inscrire->adresse = $request->adresse;
            $inscrire->save();

            $code_inscription_recu_inscri = DB::table('formation_initial')->pluck('code_inscription')->last();
            $pdf_inscription = FacadePdf::loadView('recu_inscri_with_bource', ['request' => $request, 'code_inscription_recu_inscri' => $code_inscription_recu_inscri]);
            $flag_inscription = true; // Assuming this flag determines whether the signup is successful or not

            if ($flag_inscription) {
                // Successful signup
                $pdf_inscription->save(storage_path('app/public/recu_inscription.pdf')); // Save PDF locally
                $pdf_path = storage_path('app/public/recu_inscription.pdf');
            } else {
                // Failed signup
                return response()->json([
                    'message_deja' => "Vous êtes déjà inscrit.",
                    'stay_on_form' => true, // Stay on the form
                ], 200);
            }
            return redirect()->back()->with('success', 'Votre inscription a été enregistrer avec succès');
        }else {
            return response()->json([
                'message' => "Vous êtes déjà inscrit avec les informations fournies.",
                'stay_on_form' => true, 
            ], 200);
        }


    }
    public function CheckUserInscrit(Request $request)
    {

        $Check_Inscription2 = FormationInitial::where('code_inscription', $request->code_inscription)
            ->where('cin', $request->cin)
            ->where('date_naissance', $request->date_naissance)
            ->where('fichier_notes', null)
            ->first();

        $doc_Insc = [
            'Vos Relevés de notes disponibles',

        ];

        $doc_Insc_ar = [
            "ملفات النقط المتاحة",
        ];

        if ($Check_Inscription2) {
            return redirect()->route('FilesInscription', ['slug' => session()->get('locale')]);
        } else {
            return redirect()->route('SuiviInscription', ['slug' => session()->get('locale')])->with('status', 'Vous n\'êtes pas encore inscrit à aucune filière / Vous avez déjà chargé vos relevés de notes');
        }
    }

    public function showRegisters()
    {
        if (Auth::check()) {
            $data = FormationInitial::orderBy('id', 'DESC')->get();

            return view('admin/incsription_liste', compact('data'))->with('panelactive', 'inscription_liste')->with('val', 1);
        } else {
            return view('admin/login');
        }
    }

    public function DeleteRegister($id)
    {

        if (Auth::check()) {
            FormationInitial::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Contact deleted successfully.');
        } else {
            return view('admin/login');
        }
    }



    public function getRegisterPDF($id)
    {
        $request = FormationInitial::findOrFail($id);
        $code_inscription = DB::table('inscrires')->pluck('code_inscription')->last();
        $pdf = FacadePDF::loadView('admin/recu', ['request' => $request, 'code_inscription' => $code_inscription]);

        return $pdf->download($request->Nom . ' ' . $request->Prenom . '_inscription.pdf');
    }



    public function downloadNotesFiles($Lang, $userCNI)
    {
        // Retrieve the user's folder path based on the $userCNE
        $folderPath = public_path('Dossiers_notes/' . $userCNI);

        // Zip the folder contents
        $zipFile = public_path('Dossiers_notes/' . $userCNI . '.zip');
        $zip = new ZipArchive();
        $zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE);

        $files = glob($folderPath . '/*.pdf');
        foreach ($files as $file) {
            $fileName = basename($file);
            $zip->addFile($file, $fileName);
        }

        $zip->close();

        // Download the zip file
        return Response::download($zipFile)->deleteFileAfterSend(true);
    }
}
