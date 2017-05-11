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
		<a href="{{url('catalogo')}}" class="activemenu"><i class="fa  fa-shopping-basket"></i> CATÁLOGO </a>
		<a href="{{url('terminos')}}" ><i class="fa fa-edit"></i> TÉRMINOS Y <span style="margin-left:25px;">CONDICIONES</span></a>
        @if(Auth::user()->tipo_usuario>2)
       <a href="{{url('admin')}}" ><i class="fa fa-home"></i> ASESOR</a>
        @endif
        
	</div>
</div>
<div class="col-md-9" >
<div class="row" style="margin-top: 80px;color:#000!important;">
	<div class="col-md-12">
            <div class="row profile">
                <div class="col-md-12 text-center">
                <h1 style="font-weight: 800!important">CATÁLOGO</h1>
                </div>
            </div>
            <div class="row profile">
                
                <div class="col-md-2 ">
                <a href="#" class="btncatalogo" onClick="categoriaCatalogo(1)">Tecnología</a>
                </div>
                <div class="col-md-2" style="margin-right: 40px;">
                <a href="#" class="btncatalogo" onClick="categoriaCatalogo(2)">Supermercado</a>
                </div>
                <div class="col-md-2 ">
                <a href="#" class="btncatalogo"  onClick="categoriaCatalogo(3)">Turismo</a>
                </div>
                <div class="col-md-2">
                <a href="#" class="btncatalogo"  onClick="categoriaCatalogo(4)">Otros</a>
                </div>
                <div class="col-md-2">
                <a href="#" class="btncatalogo"  onClick="categoriaCatalogo(5)">Todas</a>
                </div>
            </div>

            <style type="text/css">
                .leimage {
 
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

              
            <div class="row profile">
            <?php $c=0;?>

            @foreach($premios as $premio)
            <?php $c++;?>

            <div class="col-md-6 valcat cat{{$premio->categoria}}" style="margin-top: 50px;padding-left: 0px!important">
            @if($premio->imagen!="")
            <a href="{{url('detallePremio')}}/{{$premio->id}}"><img class="leimage" src="{{url($premio->imagen)}}" width="95%"></a>
            <h4>Puntos necesarios: {{$premio->puntos}}</h4>
            @endif
            
            </div>

            @if($c==2)
            <div class="clearfix"></div>
            <?php $c=0;?>
            @endif
            @endforeach
            
            </div>
</div>
</div>
</div>


<script src="{{url('public/js/jquery/jquery-1.9.1.min.js')}}" type="text/javascript"></script>

	<script type="text/javascript">
    
    $('.btncatalogo').click(function() {
    $('.btncatalogo').removeClass("btncatalogoactive");
    $(this).toggleClass('btncatalogoactive');

});
     
    </script>

	    <script type="text/javascript">

        function categoriaCatalogo(categoria)
        {
            switch(categoria)
            {
                case 1:
                $('.cat1').show();
                $('.cat2').hide();
                $('.cat3').hide();
                $('.cat4').hide();
                break;
                
                case 2:
                $('.cat1').hide();
                $('.cat2').show();
                $('.cat3').hide();
                $('.cat4').hide();
                
                break;

                case 3:
                $('.cat1').hide();
                $('.cat2').hide();
                $('.cat3').show();
                $('.cat4').hide();

                break;

                case 4:
                $('.cat1').hide();
                $('.cat2').hide();
                $('.cat3').hide();
                $('.cat4').show();

                break;
                case 5:
                $('.cat1').show();
                $('.cat2').show();
                $('.cat3').show();
                $('.cat4').show();

                break;
            }
            var c=0;
            $( ".valcat" ).each(function( index ) {
               if($( this ).is(":visible"))
               {
                c++;
               }
                
            });

            if(c<3)
            {
                $('.clearfix').hide();
            }else{
                $('.clearfix').show();
            }
            

        }
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
