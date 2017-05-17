<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eds as EDS;

class EdsController extends Controller
{

        public function __construct()
        {
            $this->middleware('auth');
        }


    public function index()
    {
    	$eds=EDS::all();
    	return view('eds')->with('eds',$eds);
    }
    public function detalle($id)
    {
    	$eds=EDS::find($id);
    	return view('detalleEds')->with('eds',$eds);
    }

    public function agregar()
    {
    	return view('agregarEds');
    }

    public function postAgregar(Request $request)
    {
    	$eds=new EDS;
    	$eds->descripcion=$request->descripcion;

    	if($eds->save())
    	{
    		return redirect('admin/Eds');
    	}else{
    		return redirect('admin/Eds')->with('error','1');
    	}
    }

    public function modificar($id)
    {
    	$eds=EDS::find($id);
    	return view('agregarEds')->with('eds',$eds);
    }

    public function postModificar(Request $request)
    {

    	$eds=EDS::find($request->id);
    	if($eds)
    	{
    		$eds->descripcion=$request->descripcion;


    		if($eds->save())
    		{
    			return redirect('admin/Eds');
    		}else{
    			return redirect('admin/Eds')->with('error','1');
    		}
    	}else{
    		return redirect('admin/Eds')->with('error','404');
    	}
    	


    }

    public function eliminar($id)
    {
    	$eds=EDS::find($id);
    	if($eds)
    	{
    		if($eds->delete())
    		{
    			return redirect('admin/Eds');
    		}else{
    			return redirect('admin/Eds')->with('error','1');
    		}
    	}else{
    		return redirect('admin/Eds')->with('error','404');
    	}
    }

}
