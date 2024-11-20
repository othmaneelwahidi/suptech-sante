<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\bourses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use ZipArchive;


class BourseController extends Controller
{

    public function DeleteRegisterBourse( $id)
    {

        if (Auth::check()) {
            bourses::findOrFail($id)->delete();
            return redirect()->back()->with('success', 'Contact deleted successfully.');
        } else {
            return view('admin/Login');
        }
    }

    public function CheckUserBourse(Request $request)
    {
        $Check_Inscription = bourses::where('code_inscription', $request->code_inscription)
            ->where('cne', $request->cin)
            ->where('date_naissance', $request->date_naissance)
            ->where('fichier_complets', null)->first();

        $parent_existe_avec_titeur_fr = [
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            'La Carte d’Identité Nationale (CIN) tuteur',
            'La Carte d’Identité Nationale (CIN) mère',
            'L\'indicateur socio-économique (RSU) de votre père',
            'L\'indicateur socio-économique (RSU) de votre titeur',
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $parent_existe_avec_titeur_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)",
            " بطاقة الهوية الوطنية للأب (CIN)",
            " بطاقة الهوية الوطنية للأم (CIN)",
            " بطاقة الهوية الوطنية للوصي (CIN)",
            'المؤشر الإجتماعي و الإقتصادي الخاص بالأب',
            'المؤشر الإجتماعي و الإقتصادي الخاص بالوصي',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
        ];

        $parent_existe_sans_titeur_fr = [
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            'La Carte d’Identité Nationale (CIN) mère',
            "L'indicateur socio-économique (RSU) de votre père",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $parent_existe_sans_titeur_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)",
            " بطاقة الهوية الوطنية للأب (CIN)",
            " بطاقة الهوية الوطنية للأم (CIN)",
            'المؤشر الإجتماعي و الإقتصادي الخاص بالأب',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
        ];

        $pere_decede_mere_existe_avec_titeur_fr = [
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            "certificat de décès",
            "La Carte d’Identité Nationale (CIN) mère",
            "La Carte d’Identité Nationale (CIN) titeur",
            "L'indicateur socio-économique (RSU) de votre mère",
            "L'indicateur socio-économique (RSU) de votre titeur",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $pere_decede_mere_existe_avec_titeur_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)",
            " بطاقة الهوية الوطنية للأم (CIN)",
            "شهادة الوفاة",
            " بطاقة الهوية الوطنية للوصي (CIN)",
            'المؤشر الإجتماعي و الإقتصادي الخاص بالأم',
            'المؤشر الإجتماعي و الإقتصادي الخاص بالوصي',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
        ];

        $pere_decede_mere_existe_fr = [
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            "certificat de décès",
            'La Carte d’Identité Nationale (CIN) mère',
            "L'indicateur socio-économique (RSU) de votre mère",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $pere_decede_mere_existe_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)",
            " بطاقة الهوية الوطنية للأم (CIN)",
            "شهادة الوفاة",
            'المؤشر الإجتماعي و الإقتصادي الخاص بالأم',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
        ];

        $mere_decede_pere_existe_fr = [
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            "certificat de décès",
            "L'indicateur socio-économique (RSU) de votre père",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $mere_decede_pere_existe_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)",
            " بطاقة الهوية الوطنية للأب (CIN)",
            "شهادة الوفاة",
            'المؤشر الإجتماعي و الإقتصادي الخاص بالأب',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
        ];

        $mere_decede_pere_existe_avec_titeur_fr = [
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            'La Carte d’Identité Nationale (CIN) père',
            'La Carte d’Identité Nationale (CIN) tuteur',
            "certificat de décès",
            "L'indicateur socio-économique (RSU) de votre père",
            "L'indicateur socio-économique (RSU) de votre tuteur",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $mere_decede_pere_existe_avec_titeur_ar = [
            "استمارة طلب المنحة",
            "بطاقة الهوية الوطنية للطالب (CIN)",
            " بطاقة الهوية الوطنية للأب (CIN)",
            "شهادة الوفاة",
            'المؤشر الإجتماعي و الإقتصادي الخاص بالأب',
            'المؤشر الإجتماعي و الإقتصادي الخاص الوصي',
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
        ];

        $Parent_decede_avec_tuteur_fr = [
            "Fiche demande de bourse (FDB)",
            "La Carte d’Identité Nationale (CIN) Etudiant",
            "certificat de décès de père",
            "certificat de décès de mère",
            "L'indicateur socio-économique (RSU) de votre tuteur",
            'une lettre de motivation',
            'pour les candidats en cycle ingénieur, un relevé de notes de l\'année en cours',
        ];

        $Parent_decede_avec_tuteur_ar = [
            "استمارة طلب المنحة(FDB)",
            "بطاقة الهوية الوطنية للطالب (CIN)",
            "شهادة الوفاة الأب",
            "شهادة الوفاة الأم",
            "المؤشر الإجتماعي و الإقتصادي الخاص بالوصي ",
            'رسالة تحفيزية',
            'للمرشحين في دورة الهندسة، نسخة من سجل النقط للسنة الحالية',
        ];

        
        if ($Check_Inscription) {
            $profession = bourses::select('profession', 'profession_mere', 'profession_tuteur')
                ->where('cne', $request->cin)
                ->where('date_naissance', $request->date_naissance)
                ->first();

            if ($profession->profession == 'Père non décédé' && $profession->profession_mere == 'Mère non décédé' && $profession->profession_tuteur == 'Tuteur') {
                $message_bourse = $parent_existe_avec_titeur_fr;
                $message_bourse_ar = $parent_existe_avec_titeur_ar;
            } elseif ($profession->profession == 'Père non décédé' && $profession->profession_mere == 'Mère non décédé' && $profession->profession_tuteur == 'Aucun tuteur') {
                $message_bourse = $parent_existe_sans_titeur_fr;
                $message_bourse_ar = $parent_existe_sans_titeur_ar;
            } elseif ($profession->profession == 'Père décédé' && $profession->profession_mere == 'Mère non décédé' && $profession->profession_tuteur == 'Tuteur') {
                $message_bourse = $pere_decede_mere_existe_avec_titeur_fr;
                $message_bourse_ar = $pere_decede_mere_existe_avec_titeur_ar;
            } elseif ($profession->profession == 'Père décédé' && $profession->profession_mere == 'Mère non décédé' && $profession->profession_tuteur == 'Aucun tuteur') {
                $message_bourse = $pere_decede_mere_existe_fr;
                $message_bourse_ar = $pere_decede_mere_existe_ar;
            } elseif ($profession->profession_mere == 'Mère décédé' && $profession->profession == 'Père non décédé' && $profession->profession_tuteur == 'Aucun tuteur') {
                $message_bourse = $mere_decede_pere_existe_fr;
                $message_bourse_ar = $mere_decede_pere_existe_ar;
            } elseif ($profession->profession_mere == 'Mère décédé' && $profession->profession == 'Père non décédé' && $profession->profession_tuteur == 'Tuteur') {
                $message_bourse = $mere_decede_pere_existe_avec_titeur_fr;
                $message_bourse_ar = $mere_decede_pere_existe_avec_titeur_ar;
            } elseif ($profession->profession == 'Père décédé' && $profession->profession_mere == 'Mère décédé' && $profession->profession_tuteur == 'Tuteur') {
                $message_bourse = $Parent_decede_avec_tuteur_fr;
                $message_bourse_ar = $Parent_decede_avec_tuteur_ar;
            }

            // Set session data
            session()->put('bourse_auth', true);
            session()->put('cne', $request->cin);
            session()->put('message', $message_bourse);
            session()->put('message_ar', $message_bourse_ar);

            return redirect()->route('filesbourse', ['slug' => session()->get('locale')]);
        } else {
            // Handle case when user is not registered for bourse
            $statusMessage = (session()->get('locale') == 'fr') ? 'Vous n\'êtes pas inscrit dans la Bourse / Vous avez déjà chargé vos documents' : 'تم رفع كل ملفاتكم/ أنت لست مسجل في المنحة';
            return redirect()->route('demande-de-bourse', ['slug' => session()->get('locale')])->with('status', $statusMessage);
        }
    }

    
    public function downloadBourseFiles($Lang, $userCNE)
    {
        // Retrieve the user's folder path based on the $userCNE
        $folderPath = public_path('Dossiers_bourse/' . $userCNE);

        // Zip the folder contents
        $zipFile = public_path('Dossiers_bourse/' . $userCNE . '.zip');
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

    public function getRegisterPDF( $id)
    {
        $request = bourses::findOrFail($id);
        $code_inscription_bourse = DB::table('bourses')->pluck('code_inscription')->last();
        $pdf = FacadePDF::loadView('admin/recu_bourse', ['request' => $request, 'code_inscription_bourse' => $code_inscription_bourse]);

        return $pdf->download($request->Nom . '_Bourse.pdf');
    }

}
