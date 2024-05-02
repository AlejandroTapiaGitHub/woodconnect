<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PublicacionController extends Controller
{
   public function create(){
    return view('publicaciones.create');
   }
}
