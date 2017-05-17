@extends('general/layout')

@section('title', 'Bienvenido')

@section('content')


@include('general.header')


<div class="row" style="background-color: #FFF!important;">
<div class="col-md-3">
<div id="mySidenav" class="sidenav">
<img src="{{url('public/images/logo2.png')}}" width="100%">

		<a href="{{url('inicio')}}" ><i class="fa fa-home"></i> INICIO</a>
        <a href="{{url('perfil')}}"  class="activemenu"><i class="fa fa-user-circle-o"></i> ESTADO DE CUENTA</a>
        <a href="{{url('catalogo')}}"><i class="fa  fa-shopping-basket"></i> CATÁLOGO </a>
        <a href="{{url('terminos')}}" ><i class="fa fa-edit"></i> TÉRMINOS Y <span style="margin-left:25px;">CONDICIONES</span></a>
        @if(Auth::user()->tipo_usuario>2)
       <a href="{{url('admin')}}" ><i class="fa fa-home"></i> ASESOR</a>
        @endif
	</div>
</div>
<div class="col-md-9" >
<div class="row" style="margin-top: 40px;color:#000!important;">
<img src="{{url('public/images/banner3.jpg')}}" width="105%" style="margin-left: -75px!important;">
	<div class="col-md-12">
    <div class="row profile">
    <div class="col-md-11">
    <h1>Total de puntos canjeados</h1><br>
    

    <table class="table datatable table-striped table-bordered" id="basic-datatable">
    <thead>
        <td>Producto</td>
        <td>Valor Ptos</td>
        <td>Fecha de canje</td>
    </thead>
    <?php
    $totalcanejado=0;
    ?>

    @if($compras)
    @foreach($compras as $compra)



    
     <?php $premio=DB::table('premios')->where('id','=',$compra->premio)->first();?>
    <?php 
    $totalcanejado+=$premio->puntos;
    ?>
    <tr>
    
        <td>{{$premio->titulo}}</td>
        <td>{{$premio->puntos}}</td>
        <td>{{$compra->created_at}}</td>
    </tr>
    @endforeach
    @endif
    </table>

    
    <div align="right">
    <h3>{{$totalcanejado}} Ptos. canjeados</h3>
    </div>
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
