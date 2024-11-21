<?php

namespace App\Http\Controllers;

use App\Models\FormationContinue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\FormationInitial;

class UserController extends Controller
{

//// hdi li khdama db
    public function login_action(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        //dd(Hash::make($request->password));
        if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            $usersCount = DB::select('SELECT COUNT(*) as count FROM formation_initial')[0]->count;
            $usersCount_fc = DB::select('SELECT COUNT(*) as count FROM formation_continue')[0]->count;
            $BourseCount = DB::select('SELECT COUNT(*) as count FROM bourse')[0]->count;
            $mssgCount = DB::select('SELECT COUNT(*) as count FROM contact')[0]->count;

            

            //Classes préparatoires
            $Prepa1 = FormationInitial::where('Filiere', "Classes préparatoires intégrées: 1ème année")->get();
            $Prepa2 = FormationInitial::where('Filiere', 'Classes préparatoires intégrées: 2ème année')->get();

            //Cycle ingénieur
            $CycleIng1 = FormationInitial::where('Filiere', 'Cycle ingénieur: Génie digital et intelligence Artificielle en santé')->get();
            $CycleIng2 = FormationInitial::where('Filiere', 'Cycle ingénieur: Génie Biomédical')->get();
            $CycleIng3 = FormationInitial::where('Filiere', 'Cycle ingénieur: Ingénierie Biotechnologie')->get();

            //old Formation continue
            $FormationCont1 = FormationInitial::where('Filiere', 'Formation continue: Maintenance et génie biomédical')->get();
            $FormationCont2 = FormationInitial::where('Filiere', 'Formation continue: Génie industriel et logistique')->get();
            $FormationCont3 = FormationInitial::where('Filiere', 'Formation continue: Entrepreneuriat')->get();

            //Licence
            $LIDe = FormationInitial::where('Filiere', 'Licence en Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            $L2M = FormationInitial::where('Filiere', 'Licence en Maintenance Médicale (L2M)')->get();
            $LSG = FormationInitial::where('Filiere', 'Licence en Sciences de Gestion (LSG)')->get();
            $LGILH = FormationInitial::where('Filiere', 'Licence en Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            $LIP = FormationInitial::where('Filiere', 'Licence Infirmier Polyvalent (LIP)')->get();
            $LTech = FormationInitial::where('Filiere', 'Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            $LIAR = FormationInitial::where('Filiere', 'Licence Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            $L2IBO = FormationInitial::where('Filiere', 'Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            $LMMDSS = FormationInitial::where('Filiere', 'Licence en Management et Marketing Digital du Sport et Santé')->get();
            $LIFDM = FormationInitial::where('Filiere', 'Licence Ingénierie et fabrication des dispositifs médicaux')->get();

            //Master
            $Master1 = FormationInitial::where('Filiere', 'Master en Maintenance et Génie biomédical')->get();
            $Master2 = FormationInitial::where('Filiere', 'Master en dispositifs médicaux et affaires réglementaires')->get();
            $Master3 = FormationInitial::where('Filiere', 'Master en entreprenariat et Management Technologique')->get();

            //New Formation continue :

            $FC_LIDe = FormationContinue::where('Filiere', 'Formation continue Bac+3: Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            $FC_L2M = FormationContinue::where('Filiere', 'Formation continue Bac+3: Maintenance Médicale (L2M)')->get();
            $FC_LSG = FormationContinue::where('Filiere', 'Formation continue Bac+3: Sciences de Gestion (LSG)')->get();
            $FC_LGILH = FormationContinue::where('Filiere', 'Formation continue Bac+3: Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            $FC_LIP = FormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier Polyvalent (LIP)')->get();
            $FC_LTech = FormationContinue::where('Filiere', 'Formation continue Bac+3: Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            $FC_LIAR = FormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            $FC_L2IBO = FormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            $FC_LMMDSS = FormationContinue::where('Filiere', 'Formation continue Bac+3: Licence en Management et Marketing Digital du Sport et Santé')->get();
            $FC_LIFDM = FormationContinue::where('Filiere', 'Formation continue Bac+3: Licence Ingénierie et fabrication des dispositifs médicaux')->get();

            $FC_Master1 = FormationContinue::where('Filiere', 'Formation continue Bac+5: Maintenance et Génie biomédical')->get();
            $FC_Master2 = FormationContinue::where('Filiere', 'Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires')->get();
            $FC_Master3 = FormationContinue::where('Filiere', 'Formation continue Bac+5: Entreprenariat et Management Technologique')->get();

            $rows = FormationInitial::all();
            $groups = $rows->groupBy(function ($item) {
                return explode(':', $item->Filiere)[0];
            });

            $rowsFc = FormationContinue::all();
            $groupsFc = $rowsFc->groupBy(function ($item) {
                return explode(':', $item->Filiere)[0];
            });

            // return view('/admin/Panel', ['usersCount' => $usersCount , 'mssgCount' => $mssgCount]);
            return redirect('/panel');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function CheckUserpanel()
    {

        if (Auth::check()) {
            $user = DB::table('formation_initial')->orderBy('id', 'ASC')->get();
            $user = DB::table('formation_continue')->orderBy('id', 'ASC')->get();
            $usersCount = DB::select('SELECT COUNT(*) as count FROM formation_initial')[0]->count;
            $usersCount_fc = DB::select('SELECT COUNT(*) as count FROM formation_continue')[0]->count;
            $BourseCount = DB::select('SELECT COUNT(*) as count FROM bourse')[0]->count;
            $mssgCount = DB::select('SELECT COUNT(*) as count FROM contact')[0]->count;

            //Social Media
            // $AbjudaResultat = FormationInitial::where('tsrc', 'abujad')->get();
            // $instaResultat = FormationInitial::where('tsrc', 'instagram')->get();
            // $FaceResultat = FormationInitial::where('tsrc', 'facebook')->get();
            // $LinkdinResultat = FormationInitial::where('tsrc', 'linkedin')->get();

            //Classes préparatoires
            $Prepa1 = FormationInitial::where('Filiere', 'Classes préparatoires intégrées: 1ème année')->get();
            $Prepa2 = FormationInitial::where('Filiere', 'Classes préparatoires intégrées: 2ème année')->get();

            //Cycle ingénieur
            $CycleIng1 = FormationInitial::where('Filiere', 'Cycle ingénieur: Génie digital et intelligence Artificielle en santé')->get();
            $CycleIng2 = FormationInitial::where('Filiere', 'Cycle ingénieur: Génie Biomédical')->get();
            $CycleIng3 = FormationInitial::where('Filiere', 'Cycle ingénieur: Ingénierie Biotechnologie')->get();

            //Formation continue
            $FormationCont1 = FormationInitial::where('Filiere', 'Formation continue: Maintenance et génie biomédical')->get();
            $FormationCont2 = FormationInitial::where('Filiere', 'Formation continue: Génie industriel et logistique')->get();
            $FormationCont3 = FormationInitial::where('Filiere', 'Formation continue: Entrepreneuriat')->get();

            //Licence
            $LIDe = FormationInitial::where('Filiere', 'Licence en Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            $L2M = FormationInitial::where('Filiere', 'Licence en Maintenance Médicale (L2M)')->get();
            $LSG = FormationInitial::where('Filiere', 'Licence en Sciences de Gestion (LSG)')->get();
            $LGILH = FormationInitial::where('Filiere', 'Licence en Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            $LIP = FormationInitial::where('Filiere', 'Licence Infirmier Polyvalent (LIP)')->get();
            $LTech = FormationInitial::where('Filiere', 'Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            $LIAR = FormationInitial::where('Filiere', 'Licence Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            $L2IBO = FormationInitial::where('Filiere', 'Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            $LMMDSS = FormationInitial::where('Filiere', 'Licence en Management et Marketing Digital du Sport et Santé')->get();
            $LIFDM = FormationInitial::where('Filiere', 'Licence Ingénierie et fabrication des dispositifs médicaux')->get();

            //Master
            $Master1 = FormationInitial::where('Filiere', 'Master en Maintenance et Génie biomédical')->get();
            $Master2 = FormationInitial::where('Filiere', 'Master en dispositifs médicaux et affaires réglementaires')->get();
            $Master3 = FormationInitial::where('Filiere', 'Master en entreprenariat et Management Technologique')->get();

            //New Formation continue :

            $FC_LIDe = FormationContinue::where('Filiere', 'Formation continue Bac+3: Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            $FC_L2M = FormationContinue::where('Filiere', 'Formation continue Bac+3: Maintenance Médicale (L2M)')->get();
            $FC_LSG = FormationContinue::where('Filiere', 'Formation continue Bac+3: Sciences de Gestion (LSG)')->get();
            $FC_LGILH = FormationContinue::where('Filiere', 'Formation continue Bac+3: Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            $FC_LIP = FormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier Polyvalent (LIP)')->get();
            $FC_LTech = FormationContinue::where('Filiere', 'Formation continue Bac+3: Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            $FC_LIAR = FormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            $FC_L2IBO = FormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            $FC_LMMDSS = FormationContinue::where('Filiere', 'Formation continue Bac+3: Licence en Management et Marketing Digital du Sport et Santé')->get();
            $FC_LIFDM = FormationContinue::where('Filiere', 'Formation continue Bac+3: Licence Ingénierie et fabrication des dispositifs médicaux')->get();

            $FC_Master1 = FormationContinue::where('Filiere', 'Formation continue Bac+5: Maintenance et Génie biomédical')->get();
            $FC_Master2 = FormationContinue::where('Filiere', 'Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires')->get();
            $FC_Master3 = FormationContinue::where('Filiere', 'Formation continue Bac+5: Entreprenariat et Management Technologique')->get();

            // return view('/admin/Panel', ['usersCount' => $usersCount , 'mssgCount' => $mssgCount]);
            return view('admin/Panel', ['usersCount_fc' => $usersCount_fc,'usersCount' => $usersCount, 'BourseCount' => $BourseCount, 'mssgCount' => $mssgCount, 'Prepa1' => $Prepa1, 'Prepa2' => $Prepa2, 'CycleIng1' => $CycleIng1, 'CycleIng2' => $CycleIng2, 'CycleIng3' => $CycleIng3, 'LIDe' => $LIDe,
                'L2M' => $L2M, 'LSG' => $LSG, 'LGILH' => $LGILH, 'LIP' => $LIP, 'LTech' => $LTech, 'LIAR' => $LIAR, 'L2IBO' => $L2IBO, 'LMMDSS' => $LMMDSS, 'LIFDM' => $LIFDM, 'Master1' => $Master1, 'Master2' => $Master2, 'Master3' => $Master3, 'FormationCont1' => $FormationCont1,
                'FormationCont2' => $FormationCont2, 'FormationCont3' => $FormationCont3, 
                'FC_LIDe' => $FC_LIDe, 'FC_L2M' => $FC_L2M, 'FC_LSG' => $FC_LSG, 'FC_LGILH' => $FC_LGILH, 'FC_LIP' => $FC_LIP, 'FC_LTech' => $FC_LTech, 'FC_LIAR' => $FC_LIAR, 'FC_L2IBO' => $FC_L2IBO, 'FC_Master1' => $FC_Master1, 'FC_Master2' => $FC_Master2, 'FC_Master3' => $FC_Master3,

            ])->with('panelactive', 'home');

        }

        return view('/admin/Login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('home');

    }

}
