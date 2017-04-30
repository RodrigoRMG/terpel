<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premios;

class GeneralController extends Controller
{
    public function index(){
    	return view('general/principal');
    }
    public function perfil(){
    	return view('general/perfil');
    }
    public function catalogo(){
        $premios=Premios::all();
    	return view('general/catalogo')->with('premios',$premios);
    }
    public function terminos(){
    	return view('general/terminos');
    }

    public function detallePremio($id)
    {
        $premio=Premios::find($id);
        return view('detallePremio')->with('premio',$premio);
    }
    public function canjearPremio($id)
    {
        $premio=Premios::find($id);
        return view('canjearPremio')->with('premio',$premio);
    }
}
