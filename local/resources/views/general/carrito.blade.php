@extends('general/layout')

@section('title', 'Bienvenido')

@section('content')


@include('general.header')


<div class="row" style="background-color: #FFF!important;">
<div class="col-md-3">
<div id="mySidenav" class="sidenav">
<img src="{{url('public/images/logo2.png')}}" width="100%">

		<a href="{{url('inicio')}}" ><i class="fa fa-home"></i> INICIO</a>
        <a href="{{url('perfil')}}"><i class="fa fa-user-circle-o"></i> ESTADO DE CUENTA</a>
        <a href="{{url('catalogo')}}"><i class="fa  fa-shopping-basket"></i> CATÁLOGO </a>
        <a href="{{url('public')}}/reglas-del-juego.pdf" download><i class="fa  fa-check-square"></i> REGLAS DEL JUEGO</a>
        <a href="{{url('terminos')}}" ><i class="fa fa-edit"></i> TÉRMINOS Y <span style="margin-left:25px;">CONDICIONES</span></a>
        @if(Auth::user()->tipo_usuario>2)
       <a href="{{url('admin')}}" ><i class="fa fa-home"></i> ASESOR</a>
        @endif
	</div>
</div>
<div class="col-md-9" >
<div class="row" style="margin-top: 25px;color:#000!important;">
<img src="{{url('public/images/banner3.jpg')}}" width="105%" style="margin-left: -75px!important;">
	<div class="col-md-12">
    <div class="row profile">
    <div class="col-md-11">
    <h1>Carrito de compras</h1><br>

    @if(session()->has('msg'))

      @if(session('msg')=='ok')

      <div class="panel panel-success">
                      <div class="panel-heading">Felicidades, tu compra esta siendo procesada</div>
                    
                    </div>

      @else

      <div class="panel panel-danger">
                      <div class="panel-heading">Tu compra no pudo ser procesada, intentalo nuevamente</div>
                    
                    </div>

      @endif

      @endif
            
            
             




    <?php
    if(!isset($_SESSION)) {
                        session_start();
                    }
    if(isset($_SESSION['cart']))
    {
    if(count($_SESSION['cart'])>0){

    ?>
    <table class="table">
    <thead>
        <tr>
        <th>Cantidad</th>
        <th>Premio</th>
        <th>Puntos necesarios</th>
        <th></th>
        <th></th>
        </tr>
    </thead>
    <tbody>
    <?php

    foreach($_SESSION['cart'] as $id){
        //print_r($id);

        echo "<tr>";
        echo "<td>".$id['cantidad']."</td>";
        echo "<td>".$id['nombre']."</td>";
        echo "<td>".$id['puntos']."</td>";
        echo "<td><img src='".$id['imagen']."' width='150'></td>";
        echo "<td><a href='".url('eliminarCarrito')."/".$id['id']."' class='btn btn-danger'>Eliminar</a></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
    </table>
    <div align="right" style="margin-top: 80px;margin-bottom: 80px;">
    <a href="{{url('terminarCompra')}}" class="btn btn-info">Procesar pedido</a>
    </div>
    <?php
}else{
    echo "<h3>No has agregado nada al carrito</h3>";
}
}else{
    echo "<h3>No has agregado nada al carrito</h3>";
}
    ?>
              </div>
            </div>

        
	</div>
	
</div>
</div>
</div>




	
<script src="{{url('public/js/jquery/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
	    <script type="text/javascript">
    	    function htmlbodyHeightUpdate(){
		var height3 = $( window ).height()
		var height1 = $('.nav').height()+50
		height2 = $('.main').height()
		if(height2 > height3){
			$('html').height(Math.max(height1,height3,height2)+10);
			$('body').height(Math.max(height1,height3,height2)+10);
		}
		else
		{
			$('html').height(Math.max(height1,height3,height2));
			$('body').height(Math.max(height1,height3,height2));
		}
		
	}
	$(document).ready(function () {
		htmlbodyHeightUpdate()
		$( window ).resize(function() {
			htmlbodyHeightUpdate()
		});
		$( window ).scroll(function() {
			height2 = $('.main').height()
  			htmlbodyHeightUpdate()
		});
	});
    </script>

      <script src="{{url('public/js/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('public/js/plugins/datatables/DT_bootstrap.js')}}"></script>
    <script src="{{url('public/js/plugins/datatables/jquery.dataTables-conf.js')}}"></script>


@endsection
