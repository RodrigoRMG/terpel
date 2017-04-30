<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premios as Premio;

class PremiosController extends Controller
{

        public function __construct()
        {
            $this->middleware('auth');
        }


    public function index()
    {
    	$premios=Premio::all();
    	return view('premios')->with('premios',$premios);
    }
    public function detalle($id)
    {
    	$premio=Premio::find($id);
    	return view('detallePremio')->with('premio',$premio);
    }

    public function agregar()
    {
    	return view('agregarPremio');
    }

    public function postAgregar(Request $request)
    {
    	$premio=new Premio;
    	$premio->titulo=$request->titulo;
    	$premio->descripcion=$request->descripcion;
    	$premio->puntos=$request->puntos;
        $premio->categoria=$request->categoria;
    	if($premio->save())
    	{
    		return redirect('Premios');
    	}else{
    		return redirect('Premios')->with('error','1');
    	}
    }

    public function modificar($id)
    {
    	$premio=Premio::find($id);
    	return view('agregarPremio')->with('premio',$premio);
    }

    public function postModificar(Request $request)
    {

    	$premio=Premio::find($request->id);
    	if($premio)
    	{
    		$premio->titulo=$request->titulo;
    		$premio->descripcion=$request->descripcion;
    		$premio->puntos=$request->puntos;
            $premio->categoria=$request->categoria;

    		if($premio->save())
    		{
    			return redirect('Premios');
    		}else{
    			return redirect('Premios')->with('error','1');
    		}
    	}else{
    		return redirect('Premios')->with('error','404');
    	}
    	


    }

    public function eliminar($id)
    {
    	$premio=Premio::find($id);
    	if($premio)
    	{
    		if($premio->delete())
    		{
    			return redirect('Premios');
    		}else{
    			return redirect('Premios')->with('error','1');
    		}
    	}else{
    		return redirect('Premios')->with('error','404');
    	}
    }
}
