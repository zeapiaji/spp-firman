<?php

use App\Http\Controllers\AjaxController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ShcoolFeelController;
use App\Http\Controllers\TransactionsController;

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


    Route::post('/getyear', [AjaxController::class, 'getYear']);
    Route::post('/getprice', [AjaxController::class, 'getPrice']);
    Route::post('/getmonth', [AjaxController::class, 'getMonth']);

Route::get('/login', function () {
    return view('content.auth.login');
});

//Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

//kelas
Route::get('/class', [ClassController::class, 'index']);
Route::get('/class/create', [ClassController::class, 'create']);
Route::post('/class/create', [ClassController::class, 'store']);
Route::get('/class/{id}', [ClassController::class, 'detail']);
Route::get('/class/{id}/edit', [ClassController::class, 'edit']);
Route::put('/class/{id}/edit', [ClassController::class, 'update']);
Route::delete('/class/{id}/delete', [ClassController::class,'destroy']);

//Siswa
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/create', [StudentController::class, 'create']);
Route::post('/students/create', [StudentController::class, 'store']);
Route::get('/students/{nisn}', [StudentController::class, 'show']);
Route::get('/students/{nisn}/edit', [StudentController::class, 'edit']);
Route::put('/students/{nisn}/edit', [StudentController::class, 'update']);
Route::delete('/students/{nisn}/delete', [StudentController::class,'destroy']);

//petugas
Route::get('/officer', [OfficerController::class, 'index']);
Route::get('/officer/create', [OfficerController::class, 'create']);
Route::post('/officer/create', [OfficerController::class, 'store']);
Route::get('/officer/{id}', [OfficerController::class, 'show']);
Route::get('/officer/{id}/edit', [OfficerController::class, 'edit']);
Route::put('/officer/{id}/edit', [OfficerController::class, 'update']);
Route::delete('/officers/{id}/delete', [OfficerController::class,'destroy']);


//Transaksi
Route::get('/transactions', [TransactionsController::class, 'index']);
Route::get('/transactions/create', [TransactionsController::class, 'create']);
Route::post('/transactions/post', [TransactionsController::class, 'store']);

Route::get('/spp', [ShcoolFeelController::class, 'index']);
Route::get('/spp/create', [ShcoolFeelController::class, 'create']);
Route::post('/spp/create', [ShcoolFeelController::class, 'store']);

Route::get('/history', [HistoryController::class, 'index']);