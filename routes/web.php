<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamedisController;

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
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('dashboard', function () {
        return view('dashboard');
    });
    
    Route::get('data-pasien', [PasienController::class, 'index'])->name('pasien');
    
    Route::get('data-obat', [ObatController::class, 'index'])->name('obat');
    
    Route::get('data-dokter', [DokterController::class, 'index'])->name('dokter');
    
    Route::get('data-rekamedis', [RekamedisController::class, 'index'])->name('rekamedis');
});

require __DIR__.'/auth.php';