<?php

namespace App\Http\Controllers;

use App\Models\bourses;
use App\Models\Inscrire;
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
        $Check_Inscription = Inscrire::where('CIN_MASSAR', $request->input('cin_massar'))
            ->where('Filiere', $request->input('Sectors'))
            ->first();
        $code_inscription = date('dmY') . substr(str_shuffle(MD5(microtime())), 0, 4);

        if (!$Check_Inscription) {
            $Inscrire = new Inscrire;
            $Inscrire->code_inscription = $code_inscription;
            $Inscrire->Nom = $request->Nom;
            $Inscrire->Prenom = $request->Prenom;
            $Inscrire->cni = $request->cin;
            $Inscrire->date_naissance = $request->date_naissance;
            $Inscrire->CIN_MASSAR = $request->cin_massar;
            $Inscrire->Email = $request->email;
            $Inscrire->Tele = $request->telephone;
            $Inscrire->Sexe = $request->Sexe;
            $Inscrire->Filiere = $request->Sectors;
            $Inscrire->bourse = $request->select_bourse;
            $Inscrire->dip = $request->dip;
            $Inscrire->nat = $request->nat;
            $Inscrire->ville = $request->Ville;
            $Inscrire->Adresse = $request->adresse;
            if ($request->tsrc == 'facebook' || $request->tsrc == 'instagram' || $request->tsrc == 'linkedin' || $request->tsrc == 'abujad') {
                $Inscrire->tsrc = $request->tsrc;
            } else {
                $Inscrire->tsrc = null;
            }
            $Inscrire->save();

            $code_inscription_recu_inscri = DB::table('inscrires')->pluck('code_inscription')->last();
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
}
}
                public function CheckUserInscrit(Request $request)
    {

        $Check_Inscription2 = Inscrire::where('code_inscription', $request->code_inscription)
            ->where('cni', $request->cin)
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

    public function showRegisters(){
        if(Auth::check()){
            $data = Inscrire::orderBy('id', 'DESC')->get();
    
        return view('admin/Incsription_liste',compact('data'))->with('panelactive','inscription_liste')->with('val',1);}
        else{
            return view('admin/Login');
        }
    }
    
    public function DeleteRegister($id){     
    
               if(Auth::check()){
                Inscrire::findOrFail($id)->delete();
                return redirect()->back()->with('success', 'Contact deleted successfully.');}
                else { return view('admin/Login');}
    }
    
     

    public function getRegisterPDF( $id)
    {
        $request = Inscrire::findOrFail($id);
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
