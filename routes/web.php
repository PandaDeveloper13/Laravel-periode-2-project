<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InschrijvingController;
use App\Http\Controllers\KeuzedeelController;
use App\Http\Controllers\CsvImportController;

/*
|--------------------------------------------------------------------------
| Public / Auth
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/registreren', [AuthController::class, 'showRegister']);
Route::post('/registreren', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/wachtwoord-vergeten', function () {
    return view('wachtwoord-vergeten');
});


Route::get('/dashboard', [KeuzedeelController::class, 'studentIndex'])
    ->name('student.dashboard');

Route::get('/keuzedelen/{id}', [KeuzedeelController::class, 'show'])
    ->name('keuzedeel.show');

Route::get('/inschrijvingen', [InschrijvingController::class, 'index'])
    ->middleware('auth')
    ->name('inschrijvingen.index');

Route::post('/inschrijven', [InschrijvingController::class, 'store'])
    ->middleware('auth')
    ->name('inschrijving.store');

Route::delete('/inschrijven/{keuzedeelId}', [InschrijvingController::class, 'destroy'])
    ->middleware('auth')
    ->name('inschrijving.destroy');

Route::get('/presentatie', function () {
    return view('slb.presentatie');
});

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/dashboard', function () {
        $totaalStudenten = \App\Models\User::where('rol', 'student')->count();
        $ingeschreven = \App\Models\Inschrijving::where('status', 'pending')->distinct('user_id')->count('user_id');
        $actieveKeuzedelen = \App\Models\Keuzedeel::where('actief', 1)->count();
        
        $recenteActiviteit = \App\Models\Inschrijving::with(['user', 'keuzedeel'])
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get();
        
        return view('admin.dashboard', compact('totaalStudenten', 'ingeschreven', 'actieveKeuzedelen', 'recenteActiviteit'));
    })->name('dashboard');


    Route::get('/keuzedelen', [KeuzedeelController::class, 'index'])
        ->name('keuzedelen.index');

    Route::get('/keuzedelen/toevoegen', function () {
        return view('admin.keuzedeel_toevoegen');
    })->name('keuzedelen.create');

    Route::post('/keuzedelen/toevoegen', [KeuzedeelController::class, 'store'])
        ->name('keuzedelen.store');

    Route::get('/keuzedelen/{keuzedeel}/bewerken', [KeuzedeelController::class, 'edit'])
        ->name('keuzedelen.edit');

    Route::put('/keuzedelen/{keuzedeel}', [KeuzedeelController::class, 'update'])
        ->name('keuzedelen.update');

    Route::delete('/keuzedelen/{keuzedeel}', [KeuzedeelController::class, 'destroy'])
        ->name('keuzedelen.verwijderen');


    Route::get('/instellingen', function () {
        $adminGebruikers = \App\Models\User::where('rol', 'admin')->get();
        
        return view('admin.instellingen', compact('adminGebruikers'));
    })->name('instellingen');

    Route::get('/studenten/inlezen', [CsvImportController::class, 'showImportForm'])
        ->name('studenten.inlezen');

    Route::post('/studenten/import', [CsvImportController::class, 'importCsv'])
        ->name('studenten.import');

    Route::delete('/inschrijvingen/verwijder-oud', [InschrijvingController::class, 'deleteOld'])
        ->name('inschrijvingen.deleteOld');

    Route::get('/inschrijvingen/export', [InschrijvingController::class, 'export'])
        ->name('inschrijvingen.export');
});
