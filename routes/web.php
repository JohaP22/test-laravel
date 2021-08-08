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

Route::get('saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}, no tienes apodo";
    }
});

//Filtros con rutas
Route::get('user/{id}', function ($id) {
    return "El slug manejado es numerico, con id: {$id}";
})->where(['id' => '[\d]+']);

Route::get('user/{slug}', function ($slug) {
    return "El slug manejado es de opciones, seleccionada: {$slug}";
})->where(['slug' => 'create|delete|update']);

Route::get('user/{name}', function ($name) {
    return "El slug manejado es alfanumerico, con nombre: {$name}";
})->where(['name' => '[-\w]+']);

Route::get('presentation', 'UserController@userPresentation');
Route::get('only', 'OnlyController');
Route::get('users', function(){
    $users = [
        'Juana',
        'Marcos',
        'Amaia'
    ];
    return view('users', compact('users'));
});
Route::get('profession', 'ProfessionController@professionList');
