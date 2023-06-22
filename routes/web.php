<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Fa_clubeController;

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

Route::get('/welcome', [Fa_clubeController::class, 'getLoglista'])->name('welcome');


Route::resource('/fa_clube', Fa_clubeController::class);
