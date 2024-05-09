<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AntrianController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/admin', [AdminController::class, 'index']);
Route::post('/admin/tambah-teller', [AdminController::class, 'tambahTeller']);
Route::delete('/admin/delete-teller/{id}', [AdminController::class, 'deleteTeller']);
Route::post('/admin/reset-antrian-teller', [AdminController::class, 'resetAntrianTeller']);
Route::post('/admin/reset-antrian-cs', [AdminController::class, 'resetAntrianCs']);


Route::get('/antrian-ambil', [AntrianController::class, 'antrianAmbil']);
Route::post('/antrian-ambil/teller', [AntrianController::class, 'tambahAntrianTeller']);
Route::post('/antrian-ambil/cs', [AntrianController::class, 'tambahAntrianCs']);

Route::get('/teller', [AntrianController::class, 'teller']);
Route::post('/teller/panggil-antrian-teller', [AntrianController::class, 'panggilAntrianTeller']);
Route::post('/teller/antrian-selesai', [AntrianController::class, 'antrianSelesai']);