<?php


use App\Http\Controllers\Visit2Controller;
use App\Http\Controllers\Visita1Controller;
use App\Http\Controllers\Visita3Controller;
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

Route::get('visita1', Visita1Controller::class );

Route::get('visita2', Visit2Controller::class );

Route::get('visita3/{alumno}', [Visita3Controller::class, 'nombre'] );