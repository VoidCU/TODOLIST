<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homepageController;
use App\Http\Controllers\saveController;

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

Route::get('/', [homepageController::class, 'index'])->name('index' );


Route::post('/saveItem', [saveController::class, 'saveItem'])->name('saveItem');
