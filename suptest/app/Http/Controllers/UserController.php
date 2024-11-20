<?php

namespace App\Http\Controllers;

use App\Models\Inscrire;
use App\Models\inscrireFormationContinue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;



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
            $usersCount = DB::select('SELECT COUNT(*) as count FROM inscrires')[0]->count;
            $usersCount_fc = DB::select('SELECT COUNT(*) as count FROM inscrire_formation_continues')[0]->count;
            $BourseCount = DB::select('SELECT COUNT(*) as count FROM bourses')[0]->count;
            $mssgCount = DB::select('SELECT COUNT(*) as count FROM contacts')[0]->count;

            //Social Media
            $AbjudaResultat = Inscrire::where('tsrc', 'abujad')->get();
            $instaResultat = Inscrire::where('tsrc', 'instagram')->get();
            $FaceResultat = Inscrire::where('tsrc', 'facebook')->get();
            $LinkdinResultat = Inscrire::where('tsrc', 'linkedin')->get();

            //Classes préparatoires
            $Prepa1 = Inscrire::where('Filiere', "Classes préparatoires intégrées: 1ème année")->get();
            $Prepa2 = Inscrire::where('Filiere', 'Classes préparatoires intégrées: 2ème année')->get();

            //Cycle ingénieur
            $CycleIng1 = Inscrire::where('Filiere', 'Cycle ingénieur: Génie digital et intelligence Artificielle en santé')->get();
            $CycleIng2 = Inscrire::where('Filiere', 'Cycle ingénieur: Génie Biomédical')->get();
            $CycleIng3 = Inscrire::where('Filiere', 'Cycle ingénieur: Ingénierie Biotechnologie')->get();

            //old Formation continue
            $FormationCont1 = Inscrire::where('Filiere', 'Formation continue: Maintenance et génie biomédical')->get();
            $FormationCont2 = Inscrire::where('Filiere', 'Formation continue: Génie industriel et logistique')->get();
            $FormationCont3 = Inscrire::where('Filiere', 'Formation continue: Entrepreneuriat')->get();

            //Licence
            $LIDe = Inscrire::where('Filiere', 'Licence en Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            $L2M = Inscrire::where('Filiere', 'Licence en Maintenance Médicale (L2M)')->get();
            $LSG = Inscrire::where('Filiere', 'Licence en Sciences de Gestion (LSG)')->get();
            $LGILH = Inscrire::where('Filiere', 'Licence en Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            $LIP = Inscrire::where('Filiere', 'Licence Infirmier Polyvalent (LIP)')->get();
            $LTech = Inscrire::where('Filiere', 'Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            $LIAR = Inscrire::where('Filiere', 'Licence Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            $L2IBO = Inscrire::where('Filiere', 'Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            $LMMDSS = Inscrire::where('Filiere', 'Licence en Management et Marketing Digital du Sport et Santé')->get();
            $LIFDM = Inscrire::where('Filiere', 'Licence Ingénierie et fabrication des dispositifs médicaux')->get();

            //Master
            $Master1 = Inscrire::where('Filiere', 'Master en Maintenance et Génie biomédical')->get();
            $Master2 = Inscrire::where('Filiere', 'Master en dispositifs médicaux et affaires réglementaires')->get();
            $Master3 = Inscrire::where('Filiere', 'Master en entreprenariat et Management Technologique')->get();

            //New Formation continue :

            $FC_LIDe = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            $FC_L2M = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Maintenance Médicale (L2M)')->get();
            $FC_LSG = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Sciences de Gestion (LSG)')->get();
            $FC_LGILH = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            $FC_LIP = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier Polyvalent (LIP)')->get();
            $FC_LTech = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            $FC_LIAR = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            $FC_L2IBO = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            $FC_LMMDSS = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Licence en Management et Marketing Digital du Sport et Santé')->get();
            $FC_LIFDM = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Licence Ingénierie et fabrication des dispositifs médicaux')->get();

            $FC_Master1 = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+5: Maintenance et Génie biomédical')->get();
            $FC_Master2 = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires')->get();
            $FC_Master3 = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+5: Entreprenariat et Management Technologique')->get();

            $rows = Inscrire::all();
            $groups = $rows->groupBy(function ($item) {
                return explode(':', $item->Filiere)[0];
            });

            $rowsFc = inscrireFormationContinue::all();
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
            $user = DB::table('inscrires')->orderBy('id', 'ASC')->get();
            $user = DB::table('inscrire_formation_continues')->orderBy('id', 'ASC')->get();
            $usersCount = DB::select('SELECT COUNT(*) as count FROM inscrires')[0]->count;
            $usersCount_fc = DB::select('SELECT COUNT(*) as count FROM inscrire_formation_continues')[0]->count;
            $BourseCount = DB::select('SELECT COUNT(*) as count FROM bourses')[0]->count;
            $mssgCount = DB::select('SELECT COUNT(*) as count FROM contacts')[0]->count;

            //Social Media
            $AbjudaResultat = Inscrire::where('tsrc', 'abujad')->get();
            $instaResultat = Inscrire::where('tsrc', 'instagram')->get();
            $FaceResultat = Inscrire::where('tsrc', 'facebook')->get();
            $LinkdinResultat = Inscrire::where('tsrc', 'linkedin')->get();

            //Classes préparatoires
            $Prepa1 = Inscrire::where('Filiere', 'Classes préparatoires intégrées: 1ème année')->get();
            $Prepa2 = Inscrire::where('Filiere', 'Classes préparatoires intégrées: 2ème année')->get();

            //Cycle ingénieur
            $CycleIng1 = Inscrire::where('Filiere', 'Cycle ingénieur: Génie digital et intelligence Artificielle en santé')->get();
            $CycleIng2 = Inscrire::where('Filiere', 'Cycle ingénieur: Génie Biomédical')->get();
            $CycleIng3 = Inscrire::where('Filiere', 'Cycle ingénieur: Ingénierie Biotechnologie')->get();

            //Formation continue
            $FormationCont1 = Inscrire::where('Filiere', 'Formation continue: Maintenance et génie biomédical')->get();
            $FormationCont2 = Inscrire::where('Filiere', 'Formation continue: Génie industriel et logistique')->get();
            $FormationCont3 = Inscrire::where('Filiere', 'Formation continue: Entrepreneuriat')->get();

            //Licence
            $LIDe = Inscrire::where('Filiere', 'Licence en Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            $L2M = Inscrire::where('Filiere', 'Licence en Maintenance Médicale (L2M)')->get();
            $LSG = Inscrire::where('Filiere', 'Licence en Sciences de Gestion (LSG)')->get();
            $LGILH = Inscrire::where('Filiere', 'Licence en Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            $LIP = Inscrire::where('Filiere', 'Licence Infirmier Polyvalent (LIP)')->get();
            $LTech = Inscrire::where('Filiere', 'Licence en Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            $LIAR = Inscrire::where('Filiere', 'Licence Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            $L2IBO = Inscrire::where('Filiere', 'Licence Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            $LMMDSS = Inscrire::where('Filiere', 'Licence en Management et Marketing Digital du Sport et Santé')->get();
            $LIFDM = Inscrire::where('Filiere', 'Licence Ingénierie et fabrication des dispositifs médicaux')->get();

            //Master
            $Master1 = Inscrire::where('Filiere', 'Master en Maintenance et Génie biomédical')->get();
            $Master2 = Inscrire::where('Filiere', 'Master en dispositifs médicaux et affaires réglementaires')->get();
            $Master3 = Inscrire::where('Filiere', 'Master en entreprenariat et Management Technologique')->get();

            //New Formation continue :

            $FC_LIDe = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Informatique Décisionnelle et e-Santé (LIDe-S)')->get();
            $FC_L2M = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Maintenance Médicale (L2M)')->get();
            $FC_LSG = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Sciences de Gestion (LSG)')->get();
            $FC_LGILH = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Génie Industriel et Logistique Hospitalière (LGILH)')->get();
            $FC_LIP = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier Polyvalent (LIP)')->get();
            $FC_LTech = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Techniques de Laboratoires de Biologie Médicale (LTech-Labo)')->get();
            $FC_LIAR = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier en Anesthésie et Réanimation (LIAR)')->get();
            $FC_L2IBO = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Infirmier en Instrumentalisation de Bloc Opératoire (L2IBO)')->get();
            $FC_LMMDSS = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Licence en Management et Marketing Digital du Sport et Santé')->get();
            $FC_LIFDM = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+3: Licence Ingénierie et fabrication des dispositifs médicaux')->get();

            $FC_Master1 = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+5: Maintenance et Génie biomédical')->get();
            $FC_Master2 = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+5: Dispositifs médicaux et affaires réglementaires')->get();
            $FC_Master3 = inscrireFormationContinue::where('Filiere', 'Formation continue Bac+5: Entreprenariat et Management Technologique')->get();

            // return view('/admin/Panel', ['usersCount' => $usersCount , 'mssgCount' => $mssgCount]);
            return view('admin/Panel', ['usersCount_fc' => $usersCount_fc,'usersCount' => $usersCount, 'BourseCount' => $BourseCount, 'mssgCount' => $mssgCount, 'Prepa1' => $Prepa1, 'Prepa2' => $Prepa2, 'CycleIng1' => $CycleIng1, 'CycleIng2' => $CycleIng2, 'CycleIng3' => $CycleIng3, 'LIDe' => $LIDe,
                'L2M' => $L2M, 'LSG' => $LSG, 'LGILH' => $LGILH, 'LIP' => $LIP, 'LTech' => $LTech, 'LIAR' => $LIAR, 'L2IBO' => $L2IBO, 'LMMDSS' => $LMMDSS, 'LIFDM' => $LIFDM, 'Master1' => $Master1, 'Master2' => $Master2, 'Master3' => $Master3, 'FormationCont1' => $FormationCont1,
                'FormationCont2' => $FormationCont2, 'FormationCont3' => $FormationCont3, 'AbjudaResultat' => $AbjudaResultat, 'instaResultat' => $instaResultat, 'FaceResultat' => $FaceResultat, 'LinkdinResultat' => $LinkdinResultat,

                'FC_LIDe' => $FC_LIDe, 'FC_L2M' => $FC_L2M, 'FC_LSG' => $FC_LSG, 'FC_LGILH' => $FC_LGILH, 'FC_LIP' => $FC_LIP, 'FC_LTech' => $FC_LTech, 'FC_LIAR' => $FC_LIAR, 'FC_L2IBO' => $FC_L2IBO, 'FC_Master1' => $FC_Master1, 'FC_Master2' => $FC_Master2, 'FC_Master3' => $FC_Master3,

            ])->with('panelactive', 'home');

        }

        return view('/admin/Login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/adminpanel');

    }

}
