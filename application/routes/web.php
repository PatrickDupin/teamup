<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\JogadoresController;

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
    return view('template.index');
});

Route::get('/test/env', function () {
    dd(env('DB_PASSWORD')); // dump db variable value one by one
});
Route::get('jogadores/', [JogadoresController::class, 'index']);
Route::post('jogadores/escalacao/', [JogadoresController::class, 'escalacao']);
