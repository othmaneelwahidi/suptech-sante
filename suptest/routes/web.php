<?php

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
    Route::get('/LIDESD', 'LIDESD');
    Route::get('/LIDESD-initial', 'LIDESDI');
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
