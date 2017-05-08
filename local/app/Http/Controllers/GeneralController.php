<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premios;
use App\Puntos;
use App\Compra;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function index(){
        $premios=Premios::orderBy('created_at', 'desc')->take(4)->get();
        
    	return view('general/principal')->with('premios',$premios);
    }
    public function perfil(){
        $puntos=Puntos::where('usuario','=',Auth::user()->cedula)->get();
        $compras=Compra::where('usuario','=',Auth::user()->cedula)->get();
    	return view('general/perfil')->with('puntos',$puntos)->with('compras',$compras);
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
        $puntos=Puntos::where('usuario','=',Auth::user()->cedula)->get();
        $pts=0;
        foreach($puntos as $punto)
        {
            $pts+=$punto->puntos;
        }
        $compras=Compra::where('usuario','=',Auth::user()->cedula)->get();
        $ptscompras=0;
        foreach($compras as $compra)
        {
            $ptscompras+=$compra->total_puntos;
        }

        $ptstotales=$pts-$ptscompras;
        $premio=Premios::find($id);
        $respuesta="no";
        if($ptstotales>=$premio->puntos)
        {
            $compra=new Compra;
            $compra->usuario=Auth::user()->cedula;
            $compra->premio=$premio->id;
            $compra->total_puntos=$premio->puntos;
            $compra->save();
            $respuesta="si";
        }
        return view('canjearPremio')->with('premio',$premio)->with('respuesta',$respuesta);
    }

    public function estadoCuenta()
    {
        $compras=Compra::where('usuario','=',Auth::user()->cedula)->get();
         return view('general/estadoCuenta')->with('compras',$compras);
    }

    public function contacto()
    {
         return view('general/contacto');
    }
}
