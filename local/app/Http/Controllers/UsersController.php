<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios as Usuario;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Eds as EDS;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
      if(Auth::user()->tipo_usuario==4)
      {
        $usuarios=Usuario::where('asesor','=',Auth::user()->usuario)->get();
      }else{
        $usuarios=Usuario::all();
      }
    	
    	return view('usuarios')->with('usuarios',$usuarios);
    }


    public function agregar()
    {
      $eds=EDS::all();
      $asesores=Usuario::where('tipo_usuario','=',4)->get();
    	return view('agregarusuario')->with('eds',$eds)->with('asesores',$asesores);
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
        $premio->tipo_usuario=$request->tipousuario;
        if($premio->save())
        {
          return redirect('admin/Usuarios');
      }else{
          return redirect('admin/Usuarios')->with('error','1');
      }
  }

  public function modificar($id)
  {
     $asesores=Usuario::where('tipo_usuario','=',4)->get();
   $usuario=Usuario::find($id);
   return view('agregarusuario')->with('usuario',$usuario)->with('asesores',$asesores);
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
        $usuario->asesor=$request->asesor;
        $usuario->tipo_usuario=$request->tipousuario;

      if($usuario->save())
      {
         return redirect('admin/Usuarios');
     }else{
         return redirect('admin/Usuarios')->with('error','1');
     }
 }else{
  return redirect('admin/Usuarios')->with('error','404');
}



}

public function eliminar($id)
{
    if(Auth::user()->usuario==$id)
    {
        return redirect('admin/Usuarios')->with('error','No puedes eliminarte');
    }else 
    {
    	$usuario=Usuario::find($id);
    	if($usuario)
    	{
        if($usuario->tipo_usuario>4)
        {
          return redirect('admin/Usuarios')->with('error','No puedes eliminar a un super administrador');
    
        }
    		else if($usuario->delete())
    		{
    			return redirect('admin/Usuarios');
    		}else{
    			return redirect('admin/Usuarios')->with('error','1');
    		}
    	}else{
    		return redirect('admin/Usuarios')->with('error','404');
    	}
    }
}

public function cargarUsuarios()
{
  return view('cargarUsuarios');
}

public function postcargarUsuarios(){
    $tipo = $_FILES['archivo']['type'];
 
    $tamanio = $_FILES['archivo']['size'];
     
    $archivotmp = $_FILES['archivo']['tmp_name'];
    $lineas = file($archivotmp);
    $i=0;
    foreach ($lineas as $linea_num => $linea)
    { 
       if($i != 0) 
       { 
           $datos = explode(";",$linea);
     
           $nombres = trim($datos[0]);
           $apellidos = trim($datos[1]);
           $cedula = trim($datos[2]);
           $email = trim($datos[3]);
           $cargo = trim($datos[4]);
           $telefono = trim($datos[5]);
           $eds = trim($datos[6]);
           $asesor = trim($datos[7]);

           $usuario=Usuario::where('cedula','=',$cedula)->first();
           if(!$usuario)
           {
            $usuario=new Usuario;
            $usuario->usuario=$cedula;
            $usuario->password=Hash::make($cedula);
            $usuario->cedula=$cedula;
            $usuario->nombres=$nombres;
            $usuario->apellidos=$apellidos;
            $usuario->email=$email;
            $usuario->telefono=$telefono;
            $usuario->eds=$eds;
            $usuario->asesor=$asesor;

            if($cargo=="VENDEDOR")
            {
              $usuario->tipo_usuario=1;
            }
            else if($cargo=="DEPENDIENTE")
            {
              $usuario->tipo_usuario=2;
            }
            else if($cargo=="SUPERVISOR")
            {
              $usuario->tipo_usuario=3;
            }
            else if($cargo=="ADMINISTRADOR")
            {
              $usuario->tipo_usuario=4;
            }else{
              $usuario->tipo_usuario=1;
            }

            $usuario->save();

           }
           
       }
       $i++;
    }

    return redirect('admin/Usuarios')->with('msg','Los usuarios han sido cargados correctamente');
}
}
