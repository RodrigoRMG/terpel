@extends('general/layout')

@section('title', 'Bienvenido')

@section('content')
@include('general.header')


<div class="row" style="background-color: #FFF!important;">
<div class="col-md-3">
<div id="mySidenav" class="sidenav">
<img src="{{url('public/images/logo2.png')}}" width="100%">

		<a href="{{url('inicio')}}" ><i class="fa fa-home"></i> INICIO</a>
        <a href="{{url('perfil')}}" ><i class="fa fa-user-circle-o"></i> ESTADO DE CUENTA</a>
        <a href="{{url('catalogo')}}"><i class="fa fa-shopping-basket"></i> CATÁLOGO </a>
        <a href="{{url('terminos')}}"  class="activemenu"><i class="fa fa-edit"></i> TÉRMINOS Y <span style="margin-left:25px;">CONDICIONES</span></a>
        @if(Auth::user()->tipo_usuario>2)
       <a href="{{url('admin')}}" ><i class="fa fa-home"></i> ASESOR</a>
        @endif
	</div>
</div>
<div class="col-md-9" >
<div class="row" style="margin-top: 80px;color:#000!important;">
	<div class="col-md-12">
    <h1>TÉRMINOS Y CONDICIONES</h1>
    <img src="{{url('public/images/terminos.gif')}}" width="100%">
	</div>
	
</div>
</div>
</div>




	

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


@endsection
