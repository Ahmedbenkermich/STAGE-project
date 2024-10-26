<?php

use App\Http\Controllers\agentcontroller;
use App\Http\Controllers\chequeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\caissierController;
use App\Http\Controllers\banqueController;
use App\Http\Controllers\compteController;
use App\Models\cheque;
use Illuminate\Support\Facades\Route;

//------------------------Cheque-------------------------------------------
Route::get('/show', [chequeController::class, 'index'])->name('cheques.index');
Route::get('/create', [chequeController::class, 'create'])->name('cheques.create');
Route::post('/create', [chequeController::class, 'store'])->name('cheques.store');
Route::get('/show/{id}/edit', [chequeController::class, 'edit'])->name('cheques.edit');
Route::patch('/show/{id}', [chequeController::class, 'update'])->name('cheques.update');
Route::delete('/show/{id}', [chequeController::class, 'destroy'])->name('cheques.destroy');

//--------------------------admin------------------------------------------------

Route::middleware(['auth','verified','admin'])->group(function () {

    Route::get('/admin', [userController::class, 'dash'])->name('admin.dashboard');

Route::get('/show-user', [userController::class, 'index'])->name('users.index');
Route::get('/create-user', [userController::class, 'create'])->name('users.create');
Route::post('/create-user', [userController::class, 'store'])->name('users.store');
Route::get('/edit-user/{id}', [userController::class, 'edit'])->name('users.edit');
Route::patch('/edit-user/{id}', [userController::class, 'update'])->name('users.update');
Route::delete('/edit-user/{id}', [userController::class, 'destroy'])->name('users.destroy');

});
//-------------------------caissier-------------------------------------------------


Route::middleware(['auth', 'verified', 'caissier'])->group(function () {
    Route::get('/caissier', [caissierController::class, 'index'])->name('caissier.dashboard');
    Route::get('/home_caissier', [caissierController::class, 'home'])->name('caissier.home');
    Route::get('/caissier/{id}/emis', [caissierController::class, 'emis'])->name('caissier.emis');
    Route::patch('/caissier/{id}', [caissierController::class, 'update'])->name('caissier.update');
    Route::get('/caissier/generate-pdf', [caissierController::class, 'generatePdf'])->name('caissier.generatePdf');
});


//-------------------------agent-------------------------------------------------




Route::middleware(['auth', 'verified', 'agent'])->group(function () {
    Route::get('/home_agent', [agentcontroller::class, 'home'])->name('agent.home');
    Route::get('/succsess', [agentcontroller::class, 'success']);
    Route::get('/agent', [AgentController::class, 'agent']);
    Route::post('/agent', [agentcontroller::class, 'store']);
});


//-------------------------banque-------------------------------------------------
Route::get('/done', [banqueController::class, 'done']);
Route::get('/create-banque', [banqueController::class, 'create']);
Route::post('/create-banque', [banqueController::class, 'store']);


//----------------------profile------------------------------------------
Route::get('/profile', function () {
    return view('profile.edit');
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
