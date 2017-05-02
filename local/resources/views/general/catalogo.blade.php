@extends('general/layout')

@section('title', 'Bienvenido')

@section('content')
<style type="text/css">
	
	    body,html{
        height: 100%;
        background-color: #FFF!important;
    }

    /* remove outer padding */
    .main .row{
        padding: 0px;
        margin: 0px;
    }

    /*Remove rounded coners*/

    nav.sidebar.navbar {
        border-radius: 0px;
        background-color: red!important;

    }

    nav.sidebar, .main{
        -webkit-transition: margin 200ms ease-out;
        -moz-transition: margin 200ms ease-out;
        -o-transition: margin 200ms ease-out;
        transition: margin 200ms ease-out;
    }

    /* Add gap to nav and right windows.*/
    .main{
        padding: 10px 10px 0 10px;
    }

    /* .....NavBar: Icon only with coloring/layout.....*/

    /*small/medium side display*/
    @media (min-width: 768px) {

        /*Allow main to be next to Nav*/
        .main{
            position: absolute;
            width: calc(100% - 40px); /*keeps 100% minus nav size*/
            margin-left: 40px;
            float: right;
        }

        /*lets nav bar to be showed on mouseover*/
        nav.sidebar:hover + .main{
            margin-left: 200px;
        }

        /*Center Brand*/
        nav.sidebar.navbar.sidebar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
            margin-left: 0px;
        }
        /*Center Brand*/
        nav.sidebar .navbar-brand, nav.sidebar .navbar-header{
            text-align: center;
            width: 100%;
            margin-left: 0px;
        }

        /*Center Icons*/
        nav.sidebar a{
            padding-right: 13px;
            color: #FFF!important;
        }

        /*adds border top to first nav box */
        nav.sidebar .navbar-nav > li:first-child{
            border-top: 1px #e5e5e5 solid;
        }

        /*adds border to bottom nav boxes*/
        nav.sidebar .navbar-nav > li{
            border-bottom: 1px #e5e5e5 solid;
        }

        /* Colors/style dropdown box*/
        nav.sidebar .navbar-nav .open .dropdown-menu {
            position: static;
            float: none;
            width: auto;
            margin-top: 0;
            background-color: transparent;
            border: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }

        /*allows nav box to use 100% width*/
        nav.sidebar .navbar-collapse, nav.sidebar .container-fluid{
            padding: 0 0px 0 0px;
        }

        /*colors dropdown box text */
        .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
            color: #777;
        }

        /*gives sidebar width/height*/
        nav.sidebar{
            width: 200px;
            height: 100%;
            margin-left: -160px;
            float: left;
            z-index: 8000;
            margin-bottom: 0px;
        }

        /*give sidebar 100% width;*/
        nav.sidebar li {
            width: 100%;
        }

        /* Move nav to full on mouse over*/
        nav.sidebar:hover{
            margin-left: 0px;
        }
        /*for hiden things when navbar hidden*/
        .forAnimate{
            opacity: 0;
        }
    }

    /* .....NavBar: Fully showing nav bar..... */

    @media (min-width: 1330px) {

        /*Allow main to be next to Nav*/
        .main{
            width: calc(100% - 200px); /*keeps 100% minus nav size*/
            margin-left: 200px;
        }

        /*Show all nav*/
        nav.sidebar{
            margin-left: 0px;
            float: left;
        }
        /*Show hidden items on nav*/
        nav.sidebar .forAnimate{
            opacity: 1;
        }
    }

    nav.sidebar .navbar-nav .open .dropdown-menu>li>a:hover, nav.sidebar .navbar-nav .open .dropdown-menu>li>a:focus {
        color: #CCC;
        background-color: transparent;
    }

    nav:hover .forAnimate{
        opacity: 1;
    }
    section{
        padding-left: 15px;
    }
    .menuprincipal{
    	background-color: #000;
    	color: #FFF;
    	height: 40px;
    	padding-top: 10px;

    }
    .carrito{
    	margin-left: 20px;
    }
</style>
<div class="row menuprincipal" style="position: fixed;width: 100%;z-index: 999;">
<div class="col-md-2">Bienvenid(a) {{ucfirst(Auth::user()->nombres)}} {{ucfirst(Auth::user()->apellidos)}}</div>
				<div class="col-md-2">
					Asesor: {{ucfirst(Auth::user()->asesor)}}
				</div>
				<div class="col-md-2" style="content: "|";>
					Nombre EDS: {{Auth::user()->eds}}
				</div>
				<div class="col-md-2">

				</div>
				<div class="col-md-2" >
					Contacto
				</div>
				<div class="col-md-2 ">

					 <a href="logout" style="color:#FFF;">Cerrar sesión</a>
					<i class="fa fa-shopping-basket carrito" style="font-size: 20px!important"></i> 
					<span class="button__badge">4</span>
				</div>
			</div>


<div class="row" style="background-color: #FFF!important;">
<div class="col-md-3">
<div id="mySidenav" class="sidenav">
<img src="{{url('public/images/logo2.png')}}" width="100%">

		<a href="{{url('inicio')}}" ><i class="fa fa-home"></i> INICIO</a>
		<a href="{{url('perfil')}}" ><i class="fa fa-user-circle-o"></i> PERFIL</a>
		<a href="{{url('catalogo')}}" class="activemenu"><i class="fa  fa-shopping-basket"></i> CATÁLOGO </a>
		<a href="{{url('terminos')}}" ><i class="fa fa-edit"></i> TÉRMINOS Y <span style="margin-left:25px;">CONDICIONES</span></a>
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

            <div class="col-md-6 cat{{$premio->categoria}}" style="margin-top: 50px;">
            @if($premio->imagen!="")
            <a href="{{url('detallePremio')}}/{{$premio->id}}"><img class="leimage" src="{{url($premio->imagen)}}" width="80%"></a>
            <p class="letext">Puntos necesarios: {{$premio->puntos}}</p>
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
