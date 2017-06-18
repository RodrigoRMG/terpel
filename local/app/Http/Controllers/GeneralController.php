<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premios;
use App\Puntos;
use App\Compra;
use App\Usuarios;
use Illuminate\Support\Facades\Auth;
use Jenssegers\Agent\Agent;
use Mail;


class GeneralController extends Controller
{
    public $agent;

    public function __construct()
    {
        $this->agent=new Agent();
    }

    public function index(){

        $agent=new Agent();


        $premios=Premios::orderBy('created_at', 'desc')->take(4)->get();
          if($agent->isMobile())
          {
            return view('movil/principal')->with('premios',$premios);
          }else{
            return view('general/principal')->with('premios',$premios);
          }
    	
    }
    public function perfil(){

         $agent=new Agent();
        $puntos=Puntos::where('usuario','=',Auth::user()->cedula)->get();
        $compras=Compra::where('usuario','=',Auth::user()->cedula)->get();

        if($agent->isMobile())
        {
            return view('movil/perfil')->with('puntos',$puntos)->with('compras',$compras);
        }else{
          return view('general/perfil')->with('puntos',$puntos)->with('compras',$compras);  
        }
    	
    }
    public function catalogo(){
         $agent=new Agent();

            if(Auth::user()->tipo_usuario==4)
            {
                $premios=Premios::where('disponibilidad','=',0)->orWhere('disponibilidad','=',2)->get();

            }elseif(Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2){

                $premios=Premios::where('disponibilidad','=',0)->orWhere('disponibilidad','=',1)->get();


            }else
            {
                $premios=Premios::all();
       
            }
        

        if($agent->isMobile())
        {
            return view('movil/catalogo')->with('premios',$premios);
        }else{
            return view('general/catalogo')->with('premios',$premios);
        }
    	
    }
    public function terminos(){
         $agent=new Agent();

        if($agent->isMobile())
        {
            return view('movil/terminos');
        }else{
            return view('general/terminos');
        }
    	
    }

    public function detallePremio($id)
    {
        $premio=Premios::find($id);
         $agent=new Agent();

        if($agent->isMobile())
        {
            return view('movil/detallePremio')->with('premio',$premio);
        }else{
            return view('detallePremio')->with('premio',$premio);
        }
        
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
        if($ptstotales>=$premio->puntos)
        {
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


        }


     

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

         $agent=new Agent();

        if($agent->isMobile())
        {
         return view('movil/estadoCuenta');
         }else{
            return view('general/estadoCuenta');
         }
    }

    public function contacto()
    {
         return view('general/contacto');
    }

    public function carrito()
    {
         $agent=new Agent();

        if($agent->isMobile())
        {
        return view('movil/carrito');
        }else{
            return view('general/carrito');
        }
    }

    public function terminarCompra(){

         session_start();
         try{
            $usuario=Usuarios::where('cedula','=',Auth::user()->cedula)->first();

         foreach($_SESSION['cart'] as $item)
         {
            $compra=new Compra;
            $compra->usuario=Auth::user()->cedula;
            $compra->premio=$item['id'];
            $compra->total_puntos=$item['puntos']*$item['cantidad'];
            $compra->cantidad=$item['cantidad'];
            $compra->save();
         }

         $mensaje=view('email')->with('usuario',$usuario)->with('cart',$_SESSION['cart'] );

        Mail::raw('', function ($message) use ($mensaje)
            {
            $message->to('rodrigo_2392@hotmail.com')
                ->from('notificacion@echaleganasterpel.com')
                ->subject('Nuevo canje!')
                ->setBody($mensaje, 'text/html');
            });


        session_destroy();
        return redirect('carrito')->with('msg','ok');
     }catch(Exception $e)
     {
         return redirect('carrito')->with('msg','no');
     }

    }

    public function aceptoTerminos(){
        $usuario=Usuarios::find(Auth::user()->cedula);
        $usuario->terminos=1;
        $usuario->save();

        Auth::user()->terminos=1;
        return redirect('inicio');
    }
}
