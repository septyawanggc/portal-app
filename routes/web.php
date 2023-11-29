<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\MTCController;
use App\Http\Controllers\pompabackwashController;
use App\Http\Controllers\pompaintakeController;
use App\Http\Controllers\pompdadosingController;
use App\Http\Controllers\laporanController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Proses1Controller;

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
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('/maintenance', MTCController::class);
    Route::get('/formmingguan', [MTCController::class, 'formmingguan'])->name('formmingguan');
    Route::resource('/pompaintake', pompaintakeController::class);
    route::resource('/pompabw', pompabackwashController::class);
    Route::resource('/pompadosing',pompdadosingController::class);
    Route::get('/export-pompadosing',[pompdadosingController::class, 'exportToExcel'])->name('export-pompadosing');
    Route::resource('/laporan',laporanController::class);
    Route::resource('/proses1',Proses1Controller::class);
    Route::resource('/test',TestController::class );
});

require __DIR__.'/auth.php';
