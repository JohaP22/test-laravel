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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function () {
    return 'Hola Mundo con Laravel';
});

Route::get('/parametros/{params}', function ($params) {
    return "Prueba de url con parametros: {$params}";
});

//Filtros con rutas
Route::get('user/{id}', function ($id) {
    return $id;
})->where(['id' => '[\d]+']); 

Route::get('user/{slug}', function ($slug) { 
    return $slug; 
})->where(['slug' => 'create|delete|update']); 

Route::get('user/{name}', function ($name) {
    return $name;
})->where(['name' => '[-\w]+']); 