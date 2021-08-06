<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userPresentation(){
        return 'Bienvenido, te saludamos desde el Controlador de Usuarios';
    } 
}
