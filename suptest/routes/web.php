<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\FirstCycleInitialController;
use App\Http\Controllers\SecondCycleInitialController;
use App\Http\Controllers\BourseController;
use App\Http\Controllers\CampusesController;
use App\Http\Controllers\ConcoursPlanningController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DemandeDeBourseController;
use App\Http\Controllers\DocsController;
use App\Http\Controllers\FormationsController;
use App\Http\Controllers\FormationsContinueController;
use App\Http\Controllers\GBInitialController;
use App\Http\Controllers\GBTechInitialController;
use App\Http\Controllers\GDIASInitialController;
use App\Http\Controllers\LBMInitialController;
use App\Http\Controllers\LBMController;
use App\Http\Controllers\LGIHInitialController;
use App\Http\Controllers\LGILHController;
use App\Http\Controllers\LIARInitialController;
use App\Http\Controllers\LIARController;
use App\Http\Controllers\LIDESDController;
use App\Http\Controllers\LIDSEDInitialController;
use App\Http\Controllers\LIFDMInitialController;
use App\Http\Controllers\LIFDMController;
use App\Http\Controllers\LIIBOInitialController;
use App\Http\Controllers\LIIBOController;
use App\Http\Controllers\LIPInitialController;
use App\Http\Controllers\LIPController;
use App\Http\Controllers\LMMInitialController;
use App\Http\Controllers\LMMController;
use App\Http\Controllers\LMMDSSInitialController;
use App\Http\Controllers\LMMDSSController;
use App\Http\Controllers\LSGInitialController;
use App\Http\Controllers\LSGController;
use App\Http\Controllers\MDMARInitialController;
use App\Http\Controllers\MDMARController;
use App\Http\Controllers\MEMTInitialController;
use App\Http\Controllers\MEMTController;
use App\Http\Controllers\MMBGInitialController;
use App\Http\Controllers\MMGBController;
use App\Http\Controllers\CheckBourseController;
use App\Http\Controllers\PreInscriptionContinueController;
use App\Http\Controllers\PreInscriptionController;
use App\Http\Controllers\ResultsController;
use App\Http\Controllers\SuiviBourseController;
use App\Http\Controllers\SuiviPreInscriptionController;
use App\Http\Controllers\SuptechEnvironnementController;
use App\Http\Controllers\ExportExcel;
use App\Http\Controllers\uploadfiles;
use App\Http\Controllers\uploadfiles_Inscr;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AbujadController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ViewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


// Route::get('/home', [HomeController::class, 'index'])->name('home');
// routes/web.php
// Route::get('/1sty-cycle-initial', [FirstCycleInitialController::class, 'index']);
// Route::get('/2nd-y-cycle-initial', [SecondCycleInitialController::class, 'index']);



Route::get('/check_bourse', [CheckBourseController::class, 'index']);

Route::controller(ViewsController::class)->group(function () {
    Route::get('/campuses', 'campuses');
    Route::get('/home', 'home')->name('home');
    Route::get('/concours-planning', 'concoursPlan');
    Route::get('/docs', 'docs');
    Route::get('/export/{Filiere}/{ville}', 'export')->name('export');
    Route::get('/exportBourse/{Type}', 'expoexportBoursert')->name('exportBourse');
    Route::get('/1sty-cycle-initial', 'firstCycle');
    Route::get('/2nd-y-cycle-initial', 'secondCycle');
    Route::get('/FormationsContinue', 'formContinue');
    Route::get('/formations', 'formation');
    Route::get('/GB-initial', 'GBI');
    Route::get('/GBtech-initial', 'GBT');
    Route::get('/GDIAS-initial', 'GDIAS');
    Route::get('/LBM', 'LBM');
    Route::get('/LBM-initial', 'LBMI');
    Route::get('/LGIH-initial', 'LGIHI');
    Route::get('/LGILH', 'LGILH');
    Route::get('/LIAR', 'LIAR');
    Route::get('/LIAR-initial', 'LIARI');
    Route::get('/LIDESD','LIDESD');
    Route::get('/LIDESD-initial','LIDESDI');
    Route::get('/LIFDM', 'LIFDM');
    Route::get('/LIFDM-initial', 'LIFDMI');
    Route::get('/LIIBO', 'LIIBO');
    Route::get('LIIBO-initial', 'LIIBOI');
    Route::get('/LIP', 'LIP');
    Route::get('/LIP-initial', 'LIPI');
    Route::get('/LMM', 'LMM');
    Route::get('/LMM-initial', 'LMMI');
    Route::get('/LMMDSS', 'LMMDSS');
    Route::get('/LMMDSS-initial', 'LMMDSSI');
    Route::get('/LSG-initial', 'LSGI');
    Route::get('/LSG', 'LSG');   
    Route::get('/MDMAR-initial', 'MDMARI');
    Route::get('/MDMAR', 'MDMAR');
    Route::get('/MEMT-initial', 'MEMTI');
    Route::get('/MEMT', 'MEMT');
    Route::get('/MMBG-initial', 'MMBGI');
    Route::get('/MMGB', 'MMGB');
    Route::get('/results', 'results');
    Route::get('/suivi-bourse', 'bourse');
    Route::get('/suivi-pre-inscription', 'suiviPreInsc');
    Route::get('/suptech-envirenment', 'suptech');
});

// Route::get('/export/{Filiere}/{Ville}', [ExportExcel::class, 'export'])->name('export');

// Route::get('/exportBourse/{Type}', [ExportExcel::class, 'exportBourse'])->name('exportBourse');
// Route::get('/campuses', [ViewsController::class, 'campuses']);
// Route::get('/concours-planning', [ViewsController::class, 'concoursPlan']);
Route::get('/demande-de-bourse', [DemandeDeBourseController::class, 'index']);
// Route::get('/docs', [DocsController::class, 'index']);
// Route::get('/formations', [FormationsController::class, 'index']);
// Route::get('/FormationsContinue', [FormationsContinueController::class, 'index']);

// Route::get('/GB-initial', [GBInitialController::class, 'index']);
// Route::get('/GBtech-initial', [GBTechInitialController::class, 'index']);
// Route::get('/GDIAS-initial', [GDIASInitialController::class, 'index']);
// Route::get('/LBM-initial', [LBMInitialController::class, 'index']);
// Route::get('/LBM', [LBMController::class, 'index']);
// Route::get('/LGIH-initial', [LGIHInitialController::class, 'index']);
// Route::get('/LGILH', [LGILHController::class, 'index']);
// Route::get('/LIAR-initial', [LIARInitialController::class, 'index']);
// Route::get('/LIAR', [LIARController::class, 'index']);
// Route::get('/LIDSED', [LIDESDController::class, 'index']);
// Route::get('/LIDSED-initial', [LIDSEDInitialController::class, 'index']);
// Route::get('/LIFDM-initial', [LIFDMInitialController::class, 'index']);
// Route::get('/LIFDM', [LIFDMController::class, 'index']);     
// Route::get('/LIIBO-initial', [LIIBOInitialController::class, 'index']);
// Route::get('/LIIBO', [LIIBOController::class, 'index']);
// Route::get('/LIP-initial', [LIPInitialController::class, 'index']);
// Route::get('/LIP', [LIPController::class, 'index']);
// Route::get('/LMM-initial', [LMMInitialController::class, 'index']);
// Route::get('/LMM', [LMMController::class, 'index']);
// Route::get('/LMMDSS-initial', [LMMDSSInitialController::class, 'index']);
// Route::get('/LMMDSS', [LMMDSSController::class, 'index']);
// Route::get('/LSG-initial', [LSGInitialController::class, 'index']);
// Route::get('/LSG', [LSGController::class, 'index']);
// Route::get('/MDMAR-initial', [MDMARInitialController::class, 'index']);
// Route::get('/MDMAR', [MDMARController::class, 'index']);
// Route::get('/MEMT-initial', [MEMTInitialController::class, 'index']);
// Route::get('/MEMT', [MEMTController::class, 'index']);
// Route::get('/MMBG-initial', [MMBGInitialController::class, 'index']);
// Route::get('/MMGB', [MMGBController::class, 'index']);


Route::get('/pre-inscription-continue', [PreInscriptionContinueController::class, 'index']);


Route::get('/pre-inscription', [PreInscriptionController::class, 'index']);
// Route::get('/results', [ResultsController::class, 'index']);
// Route::get('/suivi-bourse', [SuiviBourseController::class, 'index']);
// Route::get('/suivi-pre-inscription', [SuiviPreInscriptionController::class, 'index']);
// Route::get('/suptech-envirenment', [SuptechEnvironnementController::class, 'index']);
Route::view('/contact-us', 'contact-us');

// Admin panel 
Route::view('/admin/Login', 'admin/Login');
Route::view('/Bourse_liste', 'Bourse_liste');
Route::view('/admin/contact', 'admin/contact');
Route::view('/abujad/Login_abujad', 'abujad/Login_abujad');



Route::get('/inscription_liste', [PreInscriptionController::class, 'showRegisters'])->name('inscription_liste');

Route::get('/abujad/Panel', [AbujadController::class, 'CheckAbujadpanel'])->name('abujad/Panel');

Route::get('/admin/contact', [ContactUsController::class, 'Checkcontactpanel'])->name('contact.checkpanel');

Route::delete('/contact/{id}', [ContactUsController::class, 'destroy'])->name('contacts.destroy');

Route::delete('/Bourse_liste/{id}', [BourseController::class, 'DeleteRegisterBourse'])->name('bourses.DeleteRegisterBourse');
Route::get('/inscription_formations_continue', [PreInscriptionContinueController::class, 'showRegistersFormationContinue'])->name('inscription_formations_continue');


Route::get('/panel', [UserController::class, 'CheckUserpanel'])->name('panel');

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

 Route::get('/admin/contact', function () {
    return view('admin/contact');
})->name('contact');


 */


//contact 

Route::get('/contact', function () {
    $locale = session()->get('locale', 'en');
    App::setLocale($locale);
    return view('contact');
})->name('contact');




Route::get('/{slug}', function ($slug) {

    return view('home');
});

Route::get('/cnc', function ($slug) {

    return view('Concours');
})->name('cnc');

/*  Route::get('/galerie', function () {
return view('galerie');
});  */



/* Route::get('/inscription', function () {
return view('inscription');
})->name('inscription'); */


// Bourse Suivi

Route::get('/Suivi', function ($slug) {

    
    return view('suiviBourse');
})->name('Suivi');

Route::get('/filesbourse', function ($slug) {

    if (session()->get('bourse_auth')) {
        if ($slug == 'fr') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else if ($slug == 'ar') {
            App::setLocale($slug);
            session()->put('locale', $slug);
        } else {
            return redirect('/fr');
        }

        return view('FilesBourse');
    } else {
        if ($slug == 'fr') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else if ($slug == 'ar') {

            App::setLocale($slug);
            session()->put('locale', $slug);
        } else {
            return redirect('/fr');
        }

        return view('suiviBourse');
    }

})->name('filesbourse');

Route::match(array('GET', 'POST'), '/CheckUserBourse', [BourseController::class, 'CheckUserBourse'])->name('CheckUserBourse');

Route::match(array('GET', 'POST'), '/ajoutfichier2{id}', [uploadfiles::class, 'storefile'])->name('uploadfiles.storefile');

Route::post('/inscription', [PreInscriptionController::class, 'Insert'])->name('InsertTest');


Route::view('documents_inscription', 'documents')->name('documents_inscription');

    Route::get('/download.zipped-folder-formation-continue/{Nom}/{Prenom}', [PreInscriptionContinueController::class, 'downloadZippedFolderFormationContinue'])->name('download.zipped-folder-formation-continue');
    Route::delete('/request/{id}', [PreInscriptionContinueController::class, 'DeleteRegisterFormationContinue'])->name('Inscriredestroy1');
    Route::get('{slug}/PdfFormationContinue/{id}', [PreInscriptionContinueController::class, 'getRegisterFormationContinuePDF'])->name('PdfFormationContinue');


Route::post('/InsertFormationContinue', [PreInscriptionContinueController::class, 'Insert_formation_continue'])->name('InsertFormationContinue');
Route::post('/check_signup', [CheckBourseController::class, 'checkInscription'])->name('check_signup');

Route::get('/adminpanel', function () {
return view('admin/Login');
})->name('adminpanel'); 
/* 
Route::get('/adminpanel', function ($slug) {

    return view('admin/Login');
})->name('adminpanel');
*/










Route::get('/demande-de-bourse', function ($slug) {

    
    return view('demande-de-bourse');

})->name('demande-de-bourse');

Route::get('/index_check_signup', function ($slug) {

    
    return view('check_bourse');

})->name('check_bourse');



Route::match(array('GET', 'POST'), '/InsertBourse', [DemandeDeBourseController::class, 'InsertBourse'])->name('InsertBourse');

//Inscrire route
Route::match(array('GET', 'POST'), '/Insert', [PreInscriptionController::class, 'Insert'])->name('Insert');

//Insert Contact route
Route::post('/InsertContact', [ContactUsController::class, 'InsertContact'])->name('InsertContact');

// Check credential  admin
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');

Route::post('/check', [UserController::class, 'check']);

// Check credential  abujad
Route::post('/loginabujad', [AbujadController::class, 'login_action_abujad'])->name('login.action.abujad');

Route::post('/checkabujad', [AbujadController::class, 'check']);

// Route::get('/home', [@App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/Bourse_liste', [DemandeDeBourseController::class, 'CheckUserLoginBourse'])->name('Bourse_liste');

Route::get('/downloadBourseFiles/{userCNE}', [BourseController::class, 'downloadBourseFiles'])->name('downloadBourseFiles');




Route::delete('/requests{id}', [PreInscriptionController::class, 'DeleteRegister'])->name('Inscrire.destroy2');

Route::delete('/DeleteRegisterBourse_{id}', [BourseController::class, 'DeleteRegisterBourse'])->name('DeleteRegisterBourse');

Route::get('/panel', [UserController::class, 'CheckUserpanel'])->name('panel');
Route::get('/panelAbujad', [AbujadController::class, 'CheckAbujadpanel'])->name('panelAbujad');


Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/logout_abujad', [AbujadController::class, 'logout_abujad'])->name('logout_abujad');



Route::get('/PdfStudent/{id}', [PreInscriptionController::class, 'getRegisterPDF'])->name('PdfStudent');

Route::get('/PdfStudentBourse/{id}', [BourseController::class, 'getRegisterPDF'])->name('PdfStudentBourse');

//Upload Note files

Route::get('/SuiviInscription', function ($slug) {


    return view('suivi_Inscription');
})->name('SuiviInscription');

Route::match(array('GET', 'POST'), '/CheckUserInscrit', [SuiviPreinscriptionController::class, 'CheckUserInscrit'])->name('CheckUserInscrit');

Route::get('/FilesInscription', function ($slug) {
    
        return view('FilesInscription');
})->name('FilesInscription');

Route::match(array('GET', 'POST'), '/ajoutfichier{id}', [uploadfiles_Inscr::class, 'storefile'])->name('uploadfiles_Inscr.storefile');

Route::get('/downloadNotesFiles/{userCNI}', [SuiviPreinscriptionController::class, 'downloadNotesFiles'])->name('downloadNotesFiles');

/*/results
Route::get('/results', function ($slug) {

    return view('results_cnc');
})->name('results');
*/


