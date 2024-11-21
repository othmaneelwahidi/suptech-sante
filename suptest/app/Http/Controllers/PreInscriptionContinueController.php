<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\FormationContinue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Illuminate\Support\Facades\Log;

use ZipArchive;


class PreInscriptionContinueController extends Controller

{
    public function Insert_formation_continue(Request $request)
{
    try {
        $flag_inscription = false;
        $Check_Inscription = FormationContinue::where('cin', $request->cin)
            ->where('formation', $request->Sectors)
            ->first();
        $code_inscription = date('dmY'). substr(str_shuffle(MD5(microtime())), 0, 4);

        if (!$Check_Inscription) {
            $totalFiles = count($request->file());
            $successfullyMovedFiles = 0;

            foreach ($request->file() as $name => $file) {
                $directory = public_path('Dossier_Formation_Continue/'. $request->Nom. '_'. $request->Prenom. '/');
                $fileName = $name. '.pdf';

                if (!is_dir($directory)) {
                    mkdir($directory, 0777, true);
                }

                if ($file->move($directory, $fileName)) {
                    $successfullyMovedFiles++;
                }
            }

            if ($successfullyMovedFiles === $totalFiles) {
                $InscrireFC = new FormationContinue;
                $InscrireFC->code_inscription = $code_inscription;
                $InscrireFC->nom = $request->Nom;
                $InscrireFC->prenom = $request->Prenom;
                $InscrireFC->cin = $request->cin;
                $InscrireFC->date_naissance = $request->date_naissance;
                $InscrireFC->cneMassar = $request->cin_massar;
                $InscrireFC->email = $request->email;
                $InscrireFC->tele = $request->telephone;
                $InscrireFC->sexe = $request->Sexe;
                $InscrireFC->formation = $request->Sectors;
                $InscrireFC->last_diplome = $request->dip;
                $InscrireFC->nationalite = $request->nat;
                $InscrireFC->villeFormation = $request->Ville;
                $InscrireFC->adresse = $request->adresse;
                $InscrireFC->cin_path = $request->cinpdf;
                $InscrireFC->cv_path = $request->cv;
                $InscrireFC->diplome_path = $request->ddo;
                $InscrireFC->recu_inscription_path = $request->RecuC;
                $InscrireFC->completedFile = 1;
                $InscrireFC->save();

                $code_inscription_recu_inscri_formation_continue = $InscrireFC->code_inscription; // Get the code_inscription from the newly created record
                $pdf_inscription = FacadePdf::loadView('recu_inscri_formation_continue', ['request' => $request, 'code_inscription_recu_inscri_formation_continue' => $code_inscription_recu_inscri_formation_continue]);
                $pdf_inscription->save(storage_path('app/public/recu_inscri_formation_continue.pdf')); // Save PDF locally
                $pdf_path = storage_path('app/public/recu_inscri_formation_continue.pdf');
                $flag_inscription = true;
            }
        } else {
            return response()->json([
                'essage_deja' => session()->get('locale') == 'fr'? "Vous êtes déjà inscrit" : "أنت بالفعل مسجل مسبقا في المدرسة",
                'tay_on_form' => true,
            ], 200);
        }

        if ($flag_inscription) {
            $pdf_inscription->save(storage_path('app/public/recu_inscri_formation_continue.pdf')); // Save PDF locally
            $pdf_path = storage_path('app/public/recu_inscri_formation_continue.pdf');
            
            $headers = [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="recu_inscri_formation_continue.pdf"',
            ];
            
            return response()->download($pdf_path, 'recu_inscri_formation_continue.pdf', $headers);
        }
    } catch (\Exception $e) {
        return response()->json([
            'error' => $e->getMessage(),
        ], 500);
    }
}



    public function downloadZippedFolderFormationContinue( $Nom, $Prenom)
    {
        $folderName = $Nom . '_' . $Prenom;

        $folderPath = public_path('Dossier_Formation_Continue/' . $folderName);

        // Check if folder exists
        if (!is_dir($folderPath)) {
            // Handle the case where the folder doesn't exist
            return response()->json(['error' => 'Folder not found'], 404);
        }

        $zipFilePath = public_path('Dossier_Formation_Continue/' . $folderName . '/' . $folderName . '.zip');

        // Create a new ZipArchive instance
        $zip = new ZipArchive;
        if (!$zip->open($zipFilePath, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            // Handle the case where zip archive couldn't be created/opened
            return response()->json(['error' => 'Failed to create zip archive'], 500);
        }

        // Add all the PDF files to the zip archive
        $files = glob($folderPath . '/*.pdf');
        foreach ($files as $file) {
            $zip->addFile($file, basename($file));
        }

        // Close the zip archive
        $zip->close();

        // Set the appropriate headers for the download
        $headers = [
            'Content-Type' => 'application/zip',
        ];

        // Delete the temporary zip file after download
        register_shutdown_function(function () use ($zipFilePath) {
            unlink($zipFilePath);
        });

        // Return the zip file as a download response
        return response()->download($zipFilePath, $folderName . '.zip', $headers);
    }

    public function showRegistersFormationContinue()
    {
        if (Auth::check()) {
            $data = FormationContinue::orderBy('id', 'DESC')->get();

            return view('admin/incsription_formation_continue', compact('data'))->with('panelactive', 'formation_continue')->with('val', 1);
        } else {
            return view('admin/login');
        }
    }

    public function getRegisterFormationContinuePDF($slug, $id)
    {
        $request = FormationContinue::findOrFail($id);

        $code_inscription_recu_inscri_formation_continue = DB::table('inscrire_formation_continues')->pluck('code_inscription')->last();

        $pdf = FacadePdf::loadView('admin/recu_formation_continue', ['request' => $request, 'code_inscription' => $code_inscription_recu_inscri_formation_continue]);

        return $pdf->download($request->Nom . ' ' . $request->Prenom . 'recu_inscri_formation_continue].pdf');
    }

    public function DeleteRegisterFormationContinue( $id)
    {
        if (Auth::check()) {
            FormationContinue::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Contact deleted successfully.');
        } else {return view('admin/login');}
    }
    public function index()
    {
        return view('pre-inscription-continue');
    }
}