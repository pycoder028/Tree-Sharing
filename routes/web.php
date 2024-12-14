<?php

use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Frontend\TreesController;
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

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::group(['prefix' => 'tree'], function(){
    Route::get('/', [TreesController::class, 'index'])->name('trees.index');
    Route::get('/show/{slug}', [TreesController::class, 'show'])->name('trees.show');
    Route::get('/upload', [TreesController::class, 'upload'])->name('trees.upload');
});

Route::get('/sign-in', [PagesController::class, 'signin'])->name('signin');
Route::get('/sign-up', [PagesController::class, 'signup'])->name('signup');