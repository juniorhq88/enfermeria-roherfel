<?php

use App\Http\Controllers\ApplicationController;
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

Route::get('/', [ApplicationController::class, 'index'])->name('home');
Route::get('/acerca-de-nosotros', [ApplicationController::class, 'about'])->name('about');
Route::get('/servicios', [ApplicationController::class, 'service'])->name('service');
Route::get('/contacto', [ApplicationController::class, 'contact'])->name('contact');
