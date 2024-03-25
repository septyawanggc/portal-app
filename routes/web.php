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
use App\Http\Controllers\Proses2Controller;
use App\Http\Controllers\Proses3Controller;
use App\Http\Controllers\CompleteProsesController;
use App\Http\Controllers\DownloadLaporanController;
use App\Http\Controllers\MainSCMController;
use App\Http\Controllers\InputPermitController;
use App\Http\Controllers\InstrumentController;
use App\Http\Controllers\phCalController;



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
    Route::resource('/proses2',Proses2Controller::class);
    Route::resource('/proses3',Proses3Controller::class);
    Route::resource('/complete',CompleteProsesController::class);
    Route::resource('/downloadlaporan',DownloadLaporanController::class);
    Route::get('/savelaporan/{id}',[DownloadLaporanController::class,'savelaporan'])->name('savelaporan');
    Route::resource('/scm', MainSCMController::class);
    Route::resource('/inputpermit', InputPermitController::class);
    Route::resource('/instrumen', InstrumentController::class);
    Route::resource('/formph',phCalController::class);
    Route::get('/listalat',[phCalController::class,'Equipment'])->name('listalat');
    Route::resource('/test',TestController::class );
});

require __DIR__.'/auth.php';
