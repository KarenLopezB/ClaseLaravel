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

/*
Route::get('/', function () {
    return view('welcome');
});*/

/*
Route::get('/', function () {
    return 'hola mundo';
});*/

/*
Route::get('/', function (){
    return [
        'Clases' =>[
            'Instalación de Laravel',
            'Rutas Básicas de Laravel',
            'Controllers de Laravel',
            ]
        ];
});*/

Route::get('clases', function(){
    return 'Aqui se listarian todas las clases';
});

Route::get('clases/crear', function() {
    return 'Aqui se crean todas las clases';
});

Route::get ('clases/editar', function() {
    return 'Aqui se edita la clase con id:' .$id;
});