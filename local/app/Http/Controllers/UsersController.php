<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios as Usuario;
use Illuminate\Support\Facades\Auth;
use Hash;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	$usuarios=Usuario::all();
    	return view('usuarios')->with('usuarios',$usuarios);
    }


    public function agregar()
    {
    	return view('agregarusuario');
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
        $premio->asesor=$request->asesor;
        $premio->tipo_usuario=1;
        if($premio->save())
        {
          return redirect('Usuarios');
      }else{
          return redirect('Usuarios')->with('error','1');
      }
  }

  public function modificar($id)
  {
   $usuario=Usuario::find($id);
   return view('agregarusuario')->with('usuario',$usuario);
}

public function postModificar(Request $request)
{

   $usuario=Usuario::find($request->id);
   if($usuario)
   {
      $usuario->titulo=$request->titulo;
      $usuario->descripcion=$request->descripcion;
      $usuario->puntos=$request->puntos;
      $usuario->categoria=$request->categoria;

      if($usuario->save())
      {
         return redirect('Usuarios');
     }else{
         return redirect('Usuarios')->with('error','1');
     }
 }else{
  return redirect('Usuarios')->with('error','404');
}



}

public function eliminar($id)
{
    if(Auth::user()->usuario==$id)
    {
        return redirect('Usuarios')->with('error','No puedes eliminarte');
    }else{
    	$usuario=Usuario::find($id);
    	if($usuario)
    	{
    		if($usuario->delete())
    		{
    			return redirect('Usuarios');
    		}else{
    			return redirect('Usuarios')->with('error','1');
    		}
    	}else{
    		return redirect('Usuarios')->with('error','404');
    	}
    }
}
}
