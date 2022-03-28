<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TowarController;
use App\Http\Controllers\KlientController;
use App\Http\Controllers\KokpitController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\ZamowienieController;
use App\Http\Controllers\OsiagnieciaController;
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

//Route::get('osiagniecia',[OsiagnieciaController::class, 'index'])->name('index');  

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
    Route::name('osiagniecia.')->prefix('osiagniecia')->group(function () {
        Route::get('', [OsiagnieciaController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
    });

    Route::name('wycieczki.')->prefix('wycieczki')->group(function () {
        Route::get('', [OsiagnieciaController::class, 'index'])
            ->name('index')
            ->middleware(['permission:wycieczki.index']);
    });

    Route::name('raport.')->prefix('raport')->group(function () {
        Route::get('raport', [RaportController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
          
        Route::get('', [RaportController::class, 'create'])
            ->name('create')
            ->middleware(['permission:klient.create']);
        Route::post('', [RaportController::class, 'store'])
            ->name('store')
            ->middleware(['permission:klient.store']);
        Route::get('{raport}/edit', [RaportController::class, 'edit'])
           ->where('raport', '[0-9]+')
           ->name('edit')
           ->middleware(['permission:klient.store']);
        Route::patch('{raport}/edit', [RaportController::class, 'update'])
            ->where('raport', '[0-9]+')
            ->name('update')
            ->middleware(['permission:klient.store']);
        Route::get('', [RaportController::class, 'szczegoly'])
            ->name('szczegoly')
            ->middleware(['permission:klient.szczegoly']);
    });
    
});