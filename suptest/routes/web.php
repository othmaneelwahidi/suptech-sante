<?php

use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//admin
Route::get('admin/panel', [UserController::class, 'CheckUserpanel'])
        ->middleware(['auth', 'verified'])
        ->name('admin.panel');
Route::post('/login', [UserController::class, 'login_action'])->name('login.action');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');


//contact-us
Route::view('/contact-us', 'contact-us');
Route::post('/InsertContact', [ContactUsController::class, 'InsertContact'])->name('InsertContact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
