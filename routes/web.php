<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\FamiliarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome', ['user' => Auth::user()]);
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['middleware' => ['role:verified']], function() {
        Route::get('/lista', [FamiliarController::class, 'index'])->name('lista');
        Route::get('/arvore', [FamiliarController::class, 'arvore'])->name('arvore');
        Route::get('/familiar-form', [FamiliarController::class, 'create'])->name('familiar-form');
        Route::post('/familiar-store', [FamiliarController::class, 'store'])->name('familiar-store');
        Route::get('/familiar-showAjax/{familiar}', [FamiliarController::class, 'showAjax'])->name('familiar-showAjax');
        Route::get('/familiar-edit/{familiar}', [FamiliarController::class, 'edit'])->name('familiar-edit');
        Route::patch('/familiar-update/{familiar}', [FamiliarController::class, 'update'])->name('familiar-update');
        Route::delete('/familiar-delete/{familiar}', [FamiliarController::class, 'destroy'])->name('familiar-delete');
    });

});

Route::group(['middleware' => ['role:admin']], function() {
    Route::get('/usuarios', [RegisterController::class, 'index'])->name('lista-usuarios');
    Route::get('/usuarios/{usuario}', [RegisterController::class, 'show'])->name('show-usuario');
    Route::post('/usuarios/{usuario}', [RegisterController::class, 'update'])->name('update-usuario');
});