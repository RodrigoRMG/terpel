<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premios as Premio;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

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

        $file = $request->file('imagen');

       if($file)
        {
            $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
            Storage::disk('premios')->put($imageName ,File::get($file));
            $premio->imagen="public/upload/premios/".$imageName;
        }else
        {
            $premio->imagen="";
        }

    	if($premio->save())
    	{
    		return redirect('admin/Premios');
    	}else{
    		return redirect('admin/Premios')->with('error','1');
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

            $file = $request->file('imagen');
            
            if($file)
                {
                    $imageName=$this->NewGuid().".".$file->getClientOriginalExtension();
                    Storage::disk('premios')->put($imageName ,File::get($file));
                    File::Delete($premio->imagen);
                    $premio->imagen="public/upload/premios/".$imageName;

                }

    		if($premio->save())
    		{
    			return redirect('admin/Premios');
    		}else{
    			return redirect('admin/Premios')->with('error','1');
    		}
    	}else{
    		return redirect('admin/Premios')->with('error','404');
    	}
    	


    }

    public function eliminar($id)
    {
    	$premio=Premio::find($id);
    	if($premio)
    	{
    		if($premio->delete())
    		{
    			return redirect('admin/Premios');
    		}else{
    			return redirect('admin/Premios')->with('error','1');
    		}
    	}else{
    		return redirect('admin/Premios')->with('error','404');
    	}
    }

     public function NewGuid() { 
    $s = strtoupper(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
        return $guidText;
    }
}
