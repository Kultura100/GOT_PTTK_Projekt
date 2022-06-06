<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzlakController;
use App\Http\Controllers\TowarController;
use App\Http\Controllers\KlientController;
use App\Http\Controllers\KokpitController;
use App\Http\Controllers\RaportController;
use App\Http\Controllers\OdznakaController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\ObowiazkiController;
use App\Http\Controllers\WycieczkiController;
use App\Http\Controllers\ZamowienieController;
use App\Http\Controllers\OsiagnieciaController;
use App\Http\Controllers\ListaTurystowController;
use App\Http\Controllers\PowiadomienieController;
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
    return view('auth.login');
})->name('auth.login');

Route::get('/dashboard',[PowiadomienieController::class,'index'])->middleware(['auth'])->name('dashboard');

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
        Route::get('/search', [OsiagnieciaController::class, 'search'])
            ->name('search')
            ->middleware(['permission:klient.index']);
        Route::get('szczegoly/{id}', [OsiagnieciaController::class, 'szczegoly'])
            ->name('szczegoly')
            ->middleware(['permission:klient.index']);
        Route::post('szczegoly/dodajzdjecie', [OsiagnieciaController::class, 'dodajzdjecie'])
            ->name('dodajzdjecie')
            ->middleware(['permission:klient.index']);
        Route::get('szczegolyzatw/{id}', [OsiagnieciaController::class, 'szczegolyzatw'])
            ->where('id', '[0-9]+')
            ->name('szczegolyzatw')
            ->middleware(['permission:klient.index']);
    });

    Route::name('szlak.')->prefix('szlak')->group(function () {
        Route::get('', [SzlakController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
        Route::get('{id}/szczegoly',[SzlakController::class, 'szczegoly'])
            ->where('id', '[0-9]+')
            ->name('szczegoly')
            ->middleware(['permission:klient.store']);
    });

    Route::name('wycieczki.')->prefix('wycieczki')->group(function () {
        Route::get('', [WycieczkiController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
        Route::get('create',[WycieczkiController::class, 'create'])
            ->where('id', '[0-9]+')
            ->name('create')
            ->middleware(['permission:klient.store']);
        Route::get('szczegoly/{id}',[WycieczkiController::class, 'szczegoly'])
            ->where('id', '[0-9]+')
            ->name('szczegoly')
            ->middleware(['permission:klient.store']);
        Route::get('zapisz/{id}',[WycieczkiController::class, 'zapisz'])
            ->where('id', '[0-9]+')
            ->name('zapisz')
            ->middleware(['permission:klient.store']);
        Route::get('create/{id}',[WycieczkiController::class, 'pokazPasma'])
            ->where('id', '[0-9]+')
            ->name('pokazPasma')
            ->middleware(['permission:klient.store']);
        Route::get('odcinki/{id}',[WycieczkiController::class, 'pokazodcinki'])
            ->where('id', '[0-9]+')
            ->name('pokazodcinki')
            ->middleware(['permission:klient.store']);
        Route::post('',[WycieczkiController::class, 'store'])
            ->name('store')
            ->middleware(['permission:klient.store']);
    });

    Route::name('ranking.')->prefix('ranking')->group(function () {
        Route::get('', [RankingController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
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
    
    Route::name('odznaki.')->prefix('odznaki')->group(function () {
        Route::get('', [OdznakaController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
    });

    Route::name('obowiazki.')->prefix('obowiazki')->group(function () {
        Route::get('', [ObowiazkiController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
    });
    Route::name('listaturystow.')->prefix('listaturystow')->group(function () {
        Route::get('', [ListaTurystowController::class, 'index'])
            ->name('index')
            ->middleware(['permission:klient.index']);
        Route::get('szczegoly/{id}', [ListaTurystowController::class, 'szczegoly'])
            ->where('id', '[0-9]+')
            ->name('szczegoly')
            ->middleware(['permission:klient.index']);
        Route::get('zapisz/{id}',[ListaTurystowController::class, 'zapisz'])
            ->where('id', '[0-9]+')
            ->name('zapisz')
            ->middleware(['permission:klient.store']);
    });

});