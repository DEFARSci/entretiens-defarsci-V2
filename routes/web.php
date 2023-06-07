<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EntretienController;




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
Route::resource('entretiens', EntretienController::class);




Route::get('/create', [EntretienController::class, 'entretien'])->name('entretiens-create');

Route::get('/search', [EntretienController::class, 'search'])->name('index.search');

Route::get('dev', [EntretienController::class, 'dev'])->name('index.dev');

Route::get('/export_entretien_pdf/{id}', [EntretienController::class, 'export_entretien_pdf'])->name('entretien.pdf');


Route::get('/', function () {
    return view('auth.register');
});

Route::get('/dashboard', [EntretienController::class,'dashboard'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
