<?php

use App\Http\Controllers\ClassController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TransactionsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/dashboard', function () {
//     return view('layouts.main');
// });

Route::get('/dashboard', [DashboardController::class, 'index']);
    
Route::get('/login', function () {
    return view('content.auth.login');
});

Route::get('/class', [ClassController::class, 'index']);
Route::get('/class/{id}', [ClassController::class, 'detail']);

Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/create', [StudentController::class, 'store']);
Route::get('/students/{nisn}', [StudentController::class, 'show']);
Route::get('/students/{nisn}/edit', [StudentController::class, 'edit']);
Route::put('/students/{nisn}/edit', [StudentController::class, 'update']);
Route::delete('/students/{nisn}/delete', [StudentController::class,'destroy']);

Route::get('/officer', [OfficerController::class, 'index']);
Route::get('/officer/create', [OfficerController::class, 'create']);
Route::post('/officer/create', [OfficerController::class, 'store']);
Route::get('/officer/{id}', [OfficerController::class, 'show']);
Route::get('/officer/{id}/edit', [OfficerController::class, 'edit']);
Route::put('/officer/{id}/edit', [OfficerController::class, 'update']);
Route::delete('/officers/{id}/delete', [OfficerController::class,'destroy']);

Route::get('/transactions', [TransactionsController::class, 'index']);
Route::get('/transactions/create', [TransactionsController::class, 'create']);


