<?php

use App\Http\Controllers\AxyValueController;
use App\Http\Controllers\BonosAController;
use App\Models\CompanyStudyAux;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LayoffController;

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

Route::get('/', function(){
    return redirect('/company');
});

Route::get('/admin/login', function(){
    return redirect('/company');
})->name('filament.admin.auth.login');

Route::get('/test', function(){
    $company = CompanyStudyAux::get();
    return view('table', compact('company'));
    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('table', compact('company'));
    return $pdf->download('ejemplo.pdf');
});

Route::get('/axyvalues/import', [AxyValueController::class, 'create'])->name('axyvalues.import.create');
Route::post('/axyvalues/import', [AxyValueController::class, 'store'])->name('axyvalues.import.store');

Route::get('/bonus_a/import', [BonosAController::class, 'create'])->name('bonus_a.import.create');
Route::post('/bonus_a/import', [BonosAController::class, 'store'])->name('bonus_a.import.store');

Route::get('/pdf/generate/user/{user}',[UserController::class,'PdfController'])->name('pdf.example');
Route::get('/pdf/generate2/user/{user}',[UserController::class,'PdfController2'])->name('pdf.example_int');

// Route::get('/layoffs',[LayoffController::class,'layoffs'])->name('layoffs');
