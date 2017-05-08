<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;


class LoginController extends Controller
{
    public function login()
    {
    	return view('login');
    }

    public function postLogin(Request $request)
    {


    	if (Auth::attempt(['usuario' => $request->usuario, 'password' => $request->password])) {
           if(Auth::user()->tipo_usuario<3)
           {
            Auth::logout();
            Session::flush();
            return redirect('/');
           }else{
            return redirect()->intended('admin/inicio');
           }
            

        }else{
        	return redirect('admin/login')->with('error','Usuario o contraseña incorrectos');
        }
    }

     public function logingeneral()
    {
        return view('general/login');
    }

    public function postLogingeneral(Request $request)
    {
         $usuario=str_replace("-","",$request->usuario);

        if (Auth::attempt(['usuario' => $usuario, 'password' => $request->password])) {
           
            return redirect()->intended('inicio');
        }else{
            return redirect('login')->with('error','Usuario o contraseña incorrectos');
        }
    }


    public function logout()
    {
    	Auth::logout();
        Session::flush();
    	return redirect('/');
    }
}
