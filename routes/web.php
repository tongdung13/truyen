<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
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

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('cors')->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('', [CategoryController::class, 'index'])->name('categories.index');
        Route::get('create', [CategoryController::class, 'create'])->name('categories.create');
        Route::post('create', [CategoryController::class, 'store'])->name('categories.store');
        Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
        Route::post('edit/{id}', [CategoryController::class, 'update'])->name('categories.update');
        Route::get('destroy/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
    });
});
