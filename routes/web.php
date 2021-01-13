<?php

use App\Http\Controllers\ManageController;
use App\Http\Controllers\StatusController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'status'], function () {
    Route::get('/', [StatusController::class, 'index'])->name('status.index');
    Route::get('/create', [StatusController::class, 'create'])->name('status.create');
    Route::post('/create', [StatusController::class, 'store'])->name('status.store');
    Route::get('/edit/{id}', [StatusController::class, 'edit'])->name('status.edit');
    Route::post('/edit/{id}', [StatusController::class, 'update'])->name('status.update');
    Route::get('/destroy/{id}', [StatusController::class, 'destroy'])->name('status.destroy');
});


Route::group(['prefix' => 'manages'], function () {
    Route::get('/', [ManageController::class, 'index'])->name('manages.index');
    Route::get('/create', [ManageController::class, 'create'])->name('manages.create');
    Route::post('/create', [ManageController::class, 'store'])->name('manages.store');
    Route::get('/edit/{id}', [ManageController::class, 'edit'])->name('manages.edit');
    Route::post('/edit/{id}', [ManageController::class, 'update'])->name('manages.update');
    Route::get('/destroy/{id}', [ManageController::class, 'destroy'])->name('manages.destroy');
    Route::post('/search', [ManageController::class, 'search'])->name('manages.search');
});





