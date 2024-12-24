<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'main'])->name('main');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/portfolio', [PagesController::class, 'portfolio'])->name('portfolio');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
