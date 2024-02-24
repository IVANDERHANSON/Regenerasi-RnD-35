<?php

use App\Http\Controllers\MahasiswaController;
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
    return view('welcome');
});

Route::get('/add-mahasiswa', [MahasiswaController::class, 'add']);
Route::post('/store-mahasiswa', [MahasiswaController::class, 'store']);
Route::get('/data-mahasiswa', [MahasiswaController::class, 'dataMahasiswa']);
Route::get('/edit-mahasiswa/{id}', [MahasiswaController::class, 'edit']);
Route::patch('/update-mahasiswa/{id}', [MahasiswaController::class, 'update']);
Route::delete('/delete-mahasiswa/{id}', [MahasiswaController::class, 'delete']);