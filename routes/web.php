<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NatureController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\CultureController;
use App\Models\KelompokTani;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\PetaniController;
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

Route::get('/',[HomeController::class, 'index']);
Route::get('/nature_destination',[NatureController::class, 'index']);
Route::get('/buku_tamu',[BukuController::class, 'index']);
Route::get('/culture_destination',[CultureController::class, 'index'])->name('culture');
Route::get('/culture/detail/{id_culture}',[CultureController::class, 'detail']);
Route::get('/culture/add',[CultureController::class, 'add']);
Route::post('/culture/insert',[CultureController::class, 'insert']);
Route::get('/culture/delete/{id_culture}',[CultureController::class, 'delete']);
Route::get('/culture/edit/{id_culture}',[CultureController::class, 'edit']);
Route::post('/culture/update/{id_culture}', [CultureController::class, 'update']);
Route::resource('panen',PanenController::class);
Route::get('/addPanen',[PanenController::class, 'create']);
Route::get('/addpanen',[PanenController::class, 'create']);
Route::post('/addpanen/store',[PanenController::class, 'store']);
Route::resource('/pendataan', PetaniController::class);