<?php

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

Route::prefix('/clientes')->group(function () {
    Route::get('/', 'App\Http\Controllers\Administrativo\ClientesController@index');


    Route::get('/cadastro', 'App\Http\Controllers\Administrativo\ClientesController@cadastro');
    Route::get('/cadastro/{id}', 'App\Http\Controllers\Administrativo\ClientesController@cadastro');


    Route::get('/remover/{id}', 'App\Http\Controllers\Administrativo\ClientesController@remover');
    
    Route::post('/salvar', 'App\Http\Controllers\Administrativo\ClientesController@salvar');
});


