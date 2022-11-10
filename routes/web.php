<?php

use App\Http\Controllers\PersonneController;
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
Route::get('/', [PersonneController::class, 'home'])->name('home');
Route::get('/show/{id}', [PersonneController::class, 'show']);
Route::get('/delete/{id}', [PersonneController::class, 'delete']);
Route::get('/create', [PersonneController::class, 'create'])->name('create');
Route::get('/edit/{id}', [PersonneController::class, 'edit']);
Route::post('/store/personne/', [PersonneController::class, 'store'])->name('store.personne');
Route::post('/update/{id}', [PersonneController::class, 'update']);
Route::get('/nuke', [PersonneController::class, 'nuke'])->name('nuke');