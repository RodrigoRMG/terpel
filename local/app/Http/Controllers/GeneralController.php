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
        session_start();

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
        //if($ptstotales>=$premio->puntos)
        //{
            /*$compra=new Compra;
            $compra->usuario=Auth::user()->cedula;
            $compra->premio=$premio->id;
            $compra->total_puntos=$premio->puntos;
            $compra->save();
            $respuesta="si";*/

            $idp=$premio->id;
            $nombrep = $premio->titulo;
            $puntosp =$premio->puntos;
            $imagen = $premio->imagen;
             
            // make quantity a minimum of 1
             
            // add new item on array
            $cart_item=array(
                'nombre'=>$nombrep,
                'puntos'=>$puntosp,
                'imagen'=>$imagen,
                'id'=>$idp,
                'cantidad'=>1
            );
             
            /*
             * check if the 'cart' session array was created
             * if it is NOT, create the 'cart' session array
             */
            if(!isset($_SESSION['cart'])){
                $_SESSION['cart'] = array();
            }
             
            // check if the item is in the array, if it is, do not add
            if(array_key_exists($idp, $_SESSION['cart'])){
                $_SESSION['cart'][$idp]['cantidad']+=1;
                // redirect to product list and tell the user it was added to cart
            }
             
            // else, add the item to the array
            else{

                $_SESSION['cart'][$idp]=$cart_item;
            }

            $respuesta="si";


        //}
        return redirect('detallePremio/'.$id)->with('premio',$premio)->with('respuesta',$respuesta);
    }

    public function eliminarCarrito($id)
    {
        session_start();

        if($_SESSION['cart'][$id]['cantidad']>1)
        {
            $_SESSION['cart'][$id]['cantidad']-=1;
        }else{
            unset($_SESSION['cart'][$id]);
        }

        return redirect('carrito');
        
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

    public function carrito()
    {
        return view('general/carrito');
    }
}
