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
    
    Auth::routes();

    // Middleware de tipo grupo que aplique el filtro auth
    Route::group(['middleware ' => 'auth'], function () {

        // Ruta del inicio
        Route::get('/', function () {
            return view('welcome');        
        });

        // Ruta de la pagina inicial
        Route::get('/home', 'HomeController@getIndex');


        // Rutas para imprimir cartas
        Route::get('/imprimirInformacion', 'ImprimirController@getInformacion');
        Route::get('/imprimirPreguntas', 'ImprimirController@getPreguntas');
        Route::get('/imprimirTablero', 'ImprimirController@getTablero');


        // Rutas para las peticiones

        // // Solo cuando estes logeado puedes hacer una peticion
        // Route::GET('/peticionMujeres', function(){
        //     if(Auth::check()){
        //         return view('peticion.crear');
        //     } else {
        //         return view('auth.login');
        //     }
        // });

        // // La tabla solo la puede ver el admin
        // Route::GET('/peticiones', function(){
        //     if(Auth::check()){
        //         return view('peticion.tabla');
        //     } else {
        //         return view('auth.login');
        //     }
        // });

        Route::post('/login', 'LoginController@getLogin');


        Route::post('/logout', function () { 
            return view('home'); 
        });

        Route::post('/register', 'RegisterController@getRegister');

    });
   


?>

