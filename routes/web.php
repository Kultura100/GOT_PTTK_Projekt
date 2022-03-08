<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TowarController;
use App\Http\Controllers\KlientController;
use App\Http\Controllers\KokpitController;
use App\Http\Controllers\ZamowienieController;
use App\Http\Controllers\RejestracjaZamowienieController;


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
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('dashboard',[KokpitController::class, 'dashboard'])->name('dashboard');  

Route::get('/zarejestruj', function () {
    return view('rejestracja.index');
})->name('home');

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'verified'])->group(function () {
    Route::name('uzytkownik.')->prefix('uzytkownik')->group(function () {
        Route::get('', [KlientController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
        Route::get('create',[KlientController::class, 'create'])
            ->where('id', '[0-9]+')
            ->name('create')
            ->middleware(['permission:klient.index']);
        Route::post('', [KlientController::class, 'store'])
            ->name('store')
            ->middleware(['permission:klient.index']);
        Route::get('{id}/edit',[KlientController::class, 'edit'])
            ->where('id', '[0-9]+')
            ->name('edit')
            ->middleware(['permission:klient.store']);
        Route::patch('{id}', [KlientController::class, 'update'])
            ->name('update')
            ->where('id', '[0-9]+')
            ->middleware(['permission:klient.store']);    
    });
});