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

Route::get('/', function () {
    return view('welcome');
});

// get post put delete

Route::get('/aaa', function () {
    return "<h1>A.A.A</h1>";
});

Route::get('/cursos', function () {

   /*
    $nombre = "Henry";

    return view('cursos'. compact('nombre'));

    return view('cursos')->with('nombre',$nombre);
    */

    $datos = array(
        'curso1' => 'Javascript',
        'curso2' => 'Java',
        'curso3' => 'PHP'

    );



        return view('tutoriales.cursos')->with('datos',$datos);
    

    
 
});

Route::get('usuarios/{nombre}', function ($nombre) {
    return "<h1> hola ".$nombre."!</h1>";
});
