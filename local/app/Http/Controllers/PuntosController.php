<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Puntos;

class PuntosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	return view('puntos');

    }

    public function cargarPuntos()
    {
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
		 
		       $cedula = trim($datos[0]);
		       $puntos = trim($datos[2]);

		       $usuario=Usuarios::where('cedula','=',$cedula)->first();
		       if($usuario)
		       {
		       	$objpuntos=new Puntos;
		       	$objpuntos->usuario=$cedula;
		       	$objpuntos->puntos=$puntos;
		       	$objpuntos->save();
		       }else{
		       	die($cedula);
		       }
		       
		   }
		   $i++;
		}

		return redirect('admin/Puntos');
    }
}
