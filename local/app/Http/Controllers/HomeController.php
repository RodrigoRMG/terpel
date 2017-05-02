<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('principal');
    }

    public function canjesPendientes()
    {
        $compras=Compra::where('status','=',0)->get();
        return view('canjesPendientes')->with('compras',$compras);
    }

    public function detalleCanje($id)
    {
         $compra=Compra::find($id);
        return view('detalleCanje')->with('compra',$compra);

    }

    public function terminarCanje($id)
    {
        $compra=Compra::find($id);
        $compra->status=1;
        $compra->save();
        return redirect('admin/canjesPendientes');
    }
}
