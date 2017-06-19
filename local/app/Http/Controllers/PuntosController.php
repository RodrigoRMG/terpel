<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;
use App\Puntos;
use DB;

class PuntosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$fechas=DB::select('select date(created_at) as fecha from puntos group by date(created_at)');
    	return view('puntos')->with('fechas',$fechas);

    }

    public function postPuntos()
    {
    	$fecha=$_POST['fecha'];
    	$fechas=DB::select('select date(created_at) as fecha from puntos group by date(created_at)');
    	$resultado=DB::select("select usuario,sum(puntos) as puntos from puntos where date(created_at)='".$fecha."' group by usuario");
    	return view('puntos')->with('resultados',$resultado)->with('fechas',$fechas)->with('fechaCarga',$fecha);

    }

    public function eliminarCarga($fecha)
    {
    	DB::select("delete from puntos where date(created_at)='".$fecha."'");
    	return redirect('admin/Puntos');
    }

    public function getCargarPuntos()
    {
    	return view('cargarPuntos');
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
		       }
		       
		   }
		   $i++;
		}

		return redirect('admin/Puntos');
    }
}
