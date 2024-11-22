<?php

use App\Http\Controllers\BourseController;
use App\Http\Controllers\CheckBourseController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\DemandeDeBourseController;
use App\Http\Controllers\PreInscriptionContinueController;
use App\Http\Controllers\PreInscriptionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewsController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Row;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

//all views with the function index only
Route::controller(ViewsController::class)->group(function () {
    Route::get('/campuses', 'campuses');
    Route::get('/home', 'home')->name('home');
    Route::get('/concours-planning', 'concoursPlan');
    Route::get('/docs', 'docs');
    Route::get('/export/{Filiere}/{ville}', 'export')->name('export');
    Route::get('/exportBourse/{Type}', 'expoexportBoursert')->name('exportBourse');
    //class preparatoire
    Route::get('/1sty-cycle-initial', 'firstCycle')->name('firstCycle');
    Route::get('/2nd-y-cycle-initial', 'secondCycle')->name('secondCycle');
    //type formation
    Route::get('/FormationsContinue', 'formContinue')->name('formContinue');
    Route::get('/formations', 'formation')->name('formation');
    //cycle ingenieur
    Route::get('/GB-initial', 'GBI')->name('GBI');
    Route::get('/GBtech-initial', 'GBT')->name('GBT');
    Route::get('/GDIAS-initial', 'GDIAS')->name('GDIAS');
    Route::get('/LBM', 'LBM')->name('LBM');
    Route::get('/LBM-initial', 'LBMI')->name('LBMI');
    Route::get('/LGIH-initial', 'LGIHI')->name('LGIHI');
    Route::get('/LGILH', 'LGILH')->name('LGILH');
    Route::get('/LIAR', 'LIAR')->name('LIAR');
    Route::get('/LIAR-initial', 'LIARI')->name('LIARI');
    Route::get('/LIDSED', 'LIDSED')->name('LIDSED');
    Route::get('/LIDSED-initial', 'LIDSEDI')->name('LIDSEDI');
    Route::get('/LIFDM', 'LIFDM');
    Route::get('/LIFDM-initial', 'LIFDMI');
    Route::get('/LIIBO', 'LIIBO')->name('LIIBO');
    Route::get('LIIBO-initial', 'LIIBOI')->name('LIIBOI');
    Route::get('/LIP', 'LIP')->name('LIP');
    Route::get('/LIP-initial', 'LIPI')->name('LIPI');
    Route::get('/LMM', 'LMM')->name('LMM');
    Route::get('/LMM-initial', 'LMMI');
    Route::get('/LMMDSS', 'LMMDSS');
    Route::get('/LMMDSS-initial', 'LMMDSSI');
    Route::get('/LSG-initial', 'LSGI')->name('LSGI');
    Route::get('/LSG', 'LSG')->name('LSG');
    Route::get('/MDMAR-initial', 'MDMARI')->name('MDMARI');
    Route::get('/MDMAR', 'MDMAR')->name('MDMAR');
    Route::get('/MEMT-initial', 'MEMTI')->name('MEMTI');
    Route::get('/MEMT', 'MEMT')->name('MEMT');
    Route::get('/MMBG-initial', 'MMBGI')->name('MMBGI');
    Route::get('/MMGB', 'MMGB')->name('MMGB');
    Route::get('/results', 'results');
    Route::get('/suivi-bourse', 'bourse');
    Route::post('/suivi-pre-inscription', 'suiviPreInsc');
    Route::get('/suptech-envirenment', 'suptech');
});

//routage d'admin
Route::middleware(['auth'])->group(function () {
    Route::post('/login', [UserController::class, 'login_action'])->name('login');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('admin/panel', [UserController::class, 'CheckUserpanel'])->name('admin.panel');
});

//routage de fromation initial pre-inscription
Route::get('/pre-inscription', [PreInscriptionController::class, 'index']);
Route::post('/inscription', [PreInscriptionController::class, 'Insert'])->name('inscription');
Route::delete('/requests{id}', [PreInscriptionController::class, 'DeleteRegister'])->name('Inscrire.destroy2');
Route::get('/inscription_liste', [PreInscriptionController::class, 'showRegisters'])->name('inscription_liste');
Route::get('/PdfStudent/{id}', [PreInscriptionController::class, 'getRegisterPDF'])->name('PdfStudent');
Route::get('/SuiviInscription', function ($slug) {
    return view('suivi_Inscription');
})->name('SuiviInscription');

//routage de formation continue pre-inscription
Route::get('/pre-inscription-continue', [PreInscriptionContinueController::class, 'index']);
Route::post('/InsertFormationContinue', [PreInscriptionContinueController::class, 'Insert_formation_continue'])->name('InsertFormationContinue');
Route::get('/inscription_formations_continue', [PreInscriptionContinueController::class, 'showRegistersFormationContinue'])->name('inscription_formations_continue');
Route::get('/download.zipped-folder-formation-continue/{Nom}/{Prenom}', [PreInscriptionContinueController::class, 'downloadZippedFolderFormationContinue'])->name('download.zipped-folder-formation-continue');
Route::delete('/request/{id}', [PreInscriptionContinueController::class, 'DeleteRegisterFormationContinue'])->name('Inscriredestroy1');
Route::get('{slug}/PdfFormationContinue/{id}', [PreInscriptionContinueController::class, 'getRegisterFormationContinuePDF'])->name('PdfFormationContinue');

//routage contact-us
Route::view('/contact-us', 'contact-us');
Route::post('/InsertContact', [ContactUsController::class, 'InsertContact'])->name('InsertContact');
Route::get('/admin/contact', [ContactUsController::class, 'show']);
Route::delete('/contact/{id}', [ContactUsController::class, 'destroy'])->name('contacts.destroy');

//routage de bourse
Route::get('/check_bourse', [CheckBourseController::class, 'index'])->name('check_bourse_index');
Route::post('/check_bourse', [CheckBourseController::class, 'checkInscription'])->name('check_bourse_check');
Route::post('/demande_bourse', [DemandeDeBourseController::class, 'InsertBourse'])->name('submit_bourse');
Route::get('/Bourse_liste', [DemandeDeBourseController::class, 'CheckUserLoginBourse'])->name('Bourse_liste');
// Route::get('/demande-de-bourse', [DemandeDeBourseController::class, 'index'])->name('check_signup');
Route::match(array('GET', 'POST'), '/CheckUserBourse', [BourseController::class, 'CheckUserBourse'])->name('CheckUserBourse');


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

require __DIR__ . '/auth.php';
