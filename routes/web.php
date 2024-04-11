<?php

use App\Http\Controllers\AxyValueController;
use App\Models\CompanyStudyAux;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function(){
    $company = CompanyStudyAux::get();
    return view('table', compact('company'));
    $pdf = \Barryvdh\DomPDF\Facade\Pdf::loadView('table', compact('company'));
    return $pdf->download('ejemplo.pdf');
});

Route::get('/axyvalues/import', [AxyValueController::class, 'create'])->name('axyvalues.import.create');
Route::post('/axyvalues/import', [AxyValueController::class, 'store'])->name('axyvalues.import.store');
