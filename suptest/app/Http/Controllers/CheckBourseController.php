<?php
namespace App\Http\Controllers;

use App\Models\Bourse;
use Illuminate\Http\Request;
use App\Models\FormationInitial;

class CheckBourseController extends Controller
{
    // Affichage du formulaire principal
    public function index()
    {
        return view('check_bourse');
    }

    // Vérification du code d'inscription et affichage du formulaire de demande de bourse
    public function checkInscription(Request $request)
    {
        $request->validate([
            'code_inscription' => 'required|string|max:255',
        ]);

        $errorMessage = __('Votre code d\'inscription est incorrect ou vous n\'êtes pas inscrit avec la bourse.');

        try {
            $codeInscr = FormationInitial::where('code_inscription', $request->input('code_inscription'))
                ->where('bourse', 'bourse_oui')
                ->first();

            if ($codeInscr) {
                return view('demande-de-bourse');
            }

            return redirect()->back()->with('status', $errorMessage);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
