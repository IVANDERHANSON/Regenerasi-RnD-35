<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/add-student', [StudentController::class, 'add']);
Route::post('/store-student', [StudentController::class, 'store']);

Route::get('/', [StudentController::class, 'read']);

Route::get('/edit-student/{id}', [StudentController::class, 'edit']);
Route::patch('/update-student/{id}', [StudentController::class, 'update']);
Route::delete('/delete-student/{id}', [StudentController::class, 'delete']);
