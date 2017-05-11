@extends('general/layout')

@section('title', 'Bienvenido')

@section('content')

@include('general.header')

<div class="row" style="background-color: #FFF;margin-top: 40px;">
<div class="col-md-3">
</div>
	<div class="col-md-8 text-center">
	<h1 style="color:#000;font-weight: 900;font-size: 45px!important;margin-bottom: 50px;margin-top: 30px;">BIENVENIDO A ECHALE GANAS</h1>
	</div>
</div>
<div class="row" style="background-color: #FFF!important;margin-top: 50px;">
<div class="col-md-3">
<div id="mySidenav" class="sidenav">
<img src="{{url('public/images/logo2.png')}}" width="100%">

		<a href="{{url('inicio')}}" class="activemenu"><i class="fa fa-home"></i> INICIO</a>
        <a href="{{url('perfil')}}" ><i class="fa fa-user-circle-o"></i> ESTADO DE CUENTA</a>
        <a href="{{url('catalogo')}}" ><i class="fa fa-shopping-basket"></i> CATÁLOGO </a>
        <a href="{{url('terminos')}}" ><i class="fa fa-edit"></i> TÉRMINOS Y <span style="margin-left:25px;">CONDICIONES</span></a>
        @if(Auth::user()->tipo_usuario>2)
       <a href="{{url('admin')}}" ><i class="fa fa-home"></i> ASESOR</a>
        @endif
	</div>
</div>

            <style type="text/css">
                .leimage {
  position: absolute;
  left: 0;
  top: 0;
}
.letext {
  z-index: 100;
  position: absolute;
  color: white;
  font-size: 24px;
  font-weight: bold;
  left: 0;
  top: 10%;
  background-color: rgba(0, 0, 0, .7);
}
            </style>

<div class="col-md-9" style="margin-left: -30px;margin-top:-18px;">
<div class="row">
<div class="col-md-6" >
<img src="{{url('public/anuncios/1.jpg')}}" width="100%">
</div>

<div class="col-md-6" style="margin-left: -30px">
<div class="col-md-12" >
<img src="{{url('public/anuncios/2.jpg')}}" width="100%">
</div>
<div class="col-md-12" style="margin-top: 15px;">
<img src="{{url('public/anuncios/3.jpg')}}" width="100%">
</div>
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
