<?php

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
    //Rutas para logearte


    // Ruta del inicio
    Route::get('/', 'HomeController@getIndex');
    

    // Rutas para imprimir cartas
    Route::get('/imprimirInformacion', 'ImprimirController@getInformacion');
    Route::get('/imprimirPreguntas', 'ImprimirController@getPreguntas');
    Route::get('/imprimirTablero', 'ImprimirController@getTablero');


    // Rutas para las peticiones
    Route::get('/peticionMujeres', 'PeticionController@getFormulario');
    Route::get('/peticiones', 'PeticionController@getTabla');


?>