<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profession;

class ProfessionController extends Controller
{
   public function professionList(){
       $profession = Profession::findByDescrip('Developer FrontEnd');
       dd($profession);
       return view('profession', compact('profession'));
   }
}
