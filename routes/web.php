<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenerbitController;
use App\Http\Controllers\ProdukController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/proses-login', [LoginController::class, 'proses']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => 'auth'], function() {

    Route::group(['as' => 'superadmin', 'middleware' => 'is_superadmin'], function() {
        Route::get('/', [PenerbitController::class, 'index']);
    });

    Route::group(['as' => 'admin', 'middleware' => 'is_admin'], function() {
        Route::get('/buku', [BukuController::class, 'index']);
    });

    Route::get('/tambah', [PenerbitController::class, 'tambah']);
    Route::post('/store', [PenerbitController::class, 'store']);
    Route::post('/update', [PenerbitController::class, 'update']);
    Route::get('/hapus/{id}', [PenerbitController::class, 'hapus']);
    Route::get('/ubah/{id}', [PenerbitController::class, 'ubah']);    
});

// Modal
Route::group(['prefix' => 'penerbit-modal', 'as' => 'modal.'], function() {
    Route::get('/', [PenerbitController::class, 'index2'])->name('index');
    Route::post('/', [PenerbitController::class, 'store2'])->name('store');
    Route::put('/', [PenerbitController::class, 'update2'])->name('update');
});

Route::fallback(function() {
    return view('error');
});