<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios as Usuario;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Eds as EDS;

class AsesoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

      $usuarios=Usuario::where('tipo_usuario','=',4)->get();
    	return view('asesores')->with('usuarios',$usuarios);
    }


    public function agregar()
    {
      $eds=EDS::all();
    	return view('agregarAsesor')->with('eds',$eds);
    }

    public function postAgregar(Request $request)
    {
    	$premio=new Usuario;
    	$premio->usuario=$request->cedula;
    	$premio->password=Hash::make($request->cedula);
    	$premio->cedula=$request->cedula;
    	$premio->nombres=$request->nombre;
    	$premio->apellidos=$request->apellido;
    	$premio->email=$request->email;
        $premio->telefono=$request->telefono;
        $premio->eds=$request->eds;
        $premio->asesor="";
        $premio->tipo_usuario=4;
        if($premio->save())
        {
          return redirect('admin/Asesores');
      }else{
          return redirect('admin/Asesores')->with('error','1');
      }
  }

  public function modificar($id)
  {
    $eds=EDS::all();
   $usuario=Usuario::find($id);
   return view('agregarAsesor')->with('usuario',$usuario)->with('eds',$eds);
}

public function postModificar(Request $request)
{

   $usuario=Usuario::find($request->usuario);
   if($usuario)
   {
      $usuario->nombres=$request->nombre;
      $usuario->apellidos=$request->apellido;
      $usuario->email=$request->email;
        $usuario->telefono=$request->telefono;
        $usuario->eds=$request->eds;

      if($usuario->save())
      {
         return redirect('admin/Asesores');
     }else{
         return redirect('admin/Asesores')->with('error','1');
     }
 }else{
  return redirect('admin/Asesores')->with('error','404');
}



}

public function eliminar($id)
{
    if(Auth::user()->usuario==$id)
    {
        return redirect('admin/Asesores')->with('error','No puedes eliminarte');
    }else 
    {
    	$usuario=Usuario::find($id);
    	if($usuario)
    	{
        if($usuario->tipo_usuario>4)
        {
          return redirect('admin/Asesores')->with('error','No puedes eliminar a un super administrador');
    
        }
    		else if($usuario->delete())
    		{
    			return redirect('admin/Asesores');
    		}else{
    			return redirect('admin/Asesores')->with('error','1');
    		}
    	}else{
    		return redirect('admin/Asesores')->with('error','404');
    	}
    }
}



}
