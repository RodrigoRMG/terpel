<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function index(){
    	return view('general/principal');
    }
    public function perfil(){
    	return view('general/perfil');
    }
    public function catalogo(){
    	return view('general/catalogo');
    }
    public function terminos(){
    	return view('general/terminos');
    }
}
