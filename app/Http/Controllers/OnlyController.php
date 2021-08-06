<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlyController extends Controller
{
    public function __invoke()
    {
        return 'Este controlador, es exclusivo solo para este metodo';
    }
}
