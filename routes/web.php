<?php

use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ListStoryController;
use App\Http\Controllers\Backend\NovelController;
use App\Http\Controllers\Backend\StoryNameController;
use App\Http\Controllers\Backend\StoryNameNovelController;
use App\Http\Controllers\Frontend\HomeController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('login', [AuthController::class, 'login'])->name('login');
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

    Route::prefix('novels')->group(function () {
        Route::get('', [NovelController::class, 'index'])->name('novels.index');
        Route::get('create', [NovelController::class, 'create'])->name('novels.create');
        Route::post('create', [NovelController::class, 'store'])->name('novels.store');
        Route::get('edit/{id}', [NovelController::class, 'edit'])->name('novels.edit');
        Route::post('edit/{id}', [NovelController::class, 'update'])->name('novels.update');
        Route::get('destroy/{id}', [NovelController::class, 'destroy'])->name('novels.destroy');
        Route::get('show/{id}', [NovelController::class, 'show'])->name('novels.detail');
    });

    Route::prefix('storyNames')->group(function () {
        Route::get('', [StoryNameController::class, 'index'])->name('storyNames.index');
        Route::get('create', [StoryNameController::class, 'create'])->name('storyNames.create');
        Route::post('create', [StoryNameController::class, 'store'])->name('storyNames.store');
        Route::get('edit/{id}', [StoryNameController::class, 'edit'])->name('storyNames.edit');
        Route::post('edit/{id}', [StoryNameController::class, 'update'])->name('storyNames.update');
        Route::get('destroy/{id}', [StoryNameController::class, 'destroy'])->name('storyNames.destroy');
        Route::get('show/{id}', [StoryNameController::class, 'show'])->name('storyNames.detail');
    });

    Route::prefix('storyNovels')->group(function () {
        Route::get('', [StoryNameNovelController::class, 'index'])->name('storyNovels.index');
        Route::get('create/{id}', [StoryNameNovelController::class, 'create'])->name('storyNovels.create');
        Route::post('create/{id}', [StoryNameNovelController::class, 'store'])->name('storyNovels.store');
        Route::get('edit/{id}', [StoryNameNovelController::class, 'edit'])->name('storyNovels.edit');
        Route::post('edit/{id}', [StoryNameNovelController::class, 'update'])->name('storyNovels.update');
        Route::get('destroy/{id}', [StoryNameNovelController::class, 'destroy'])->name('storyNovels.destroy');
        Route::get('show/{id}', [StoryNameNovelController::class, 'show'])->name('storyNovels.detail');
    });

    Route::prefix('listStorys')->group(function () {
        Route::get('', [ListStoryController::class, 'index'])->name('listStorys.index');
        Route::get('create', [ListStoryController::class, 'create'])->name('listStorys.create');
        Route::post('create', [ListStoryController::class, 'store'])->name('listStorys.store');
        Route::get('edit/{id}', [ListStoryController::class, 'edit'])->name('listStorys.edit');
        Route::post('edit/{id}', [ListStoryController::class, 'update'])->name('listStorys.update');
        Route::get('destroy/{id}', [ListStoryController::class, 'destroy'])->name('listStorys.destroy');
    });
});

// frontend



