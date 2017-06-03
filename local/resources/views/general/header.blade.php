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
@if(Auth::user()->terminos==0)
<script type="text/javascript">
    $(window).on('load',function(){
        $('#terminosyc').modal('show');
    });
</script>
@endif

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Contáctanos</h4>
      </div>
      <div class="modal-body">
        <p><h3><a href="tel:62896900" style="color:#000;text-decoration: none;">Teléfono: 6289-6900</a></h3></p>
        <p><h3><a href="mailto:echaleganas@terpel.com" style="color:#000;text-decoration: none;">Email: echaleganas@terpel.com</a></h3></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="terminosyc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Términos y condiciones</h4>
      </div>
      <form action="{{url('aceptoTerminos')}}" methos="get">
      <div class="modal-body">

      <img src="{{url('public/images/terminos.gif')}}" width="100%">
      <br><br>

      <label><h4>He leído y aceptado los téminos y condiciones 
      <input type="checkbox" value="1" required></h4></label>
      </div>
      <div class="modal-footer">
        <input type="submit" name="" class="btn btn-info" value="Guardar">
      </div>
      </form>
    </div>
  </div>
</div>


 <?php 

$puntos=DB::table('puntos')->where('usuario','=',Auth::user()->cedula)->get();
$compras=DB::table('compras')->where('usuario','=',Auth::user()->cedula)->get();

$eds=DB::table('eds')->where('id','=',Auth::user()->eds)->first();
$asesor=DB::table('usuarios')->where('usuario','=',Auth::user()->asesor)->first();
 ?>

                <?php $pts=0;?>
                @foreach($puntos as $punto)
                <?php $pts+=$punto->puntos;?>
                @endforeach

                <?php $ptscanjeados=0;?>
                @foreach($compras as $compra)
                <?php $ptscanjeados+=$compra->total_puntos;?>
                @endforeach



<div class="row menuprincipal" style="position: fixed;width: 102%;z-index: 999;">
<div class="col-md-8"><span style="padding-right:5em; margin-left: 20px;" >Bienvenid(a) {{ucfirst(Auth::user()->nombres)}} {{ucfirst(Auth::user()->apellidos)}} <b>{{$pts-$ptscanjeados}} pts</b></span>



<span style="padding-right:2em"> @if($asesor)Asesor: {{ucfirst($asesor->nombres)}} {{ucfirst($asesor->apellidos)}}@endif</span> 


<span>@if($eds)Nombre EDS: {{$eds->descripcion}}@endif</span></div>

			
				
				<div class="col-md-2" style="margin-left:100px;">
                    <a href="#" data-toggle="modal" data-target="#myModal" style="color:#FFF;text-decoration: none;">Contáctanos</a> &nbsp;&nbsp;|
                </div>
                <div class="col-md-2 " style="margin-left: -120px;">

                    <a href="logout" style="color:#FFF;">Cerrar sesión</a>
                   <a href="{{url('carrito')}}" style="color:#FFF;"> <i class="fa fa-shopping-basket carrito" style="font-size: 20px!important"></i> 

                   <?php 
                   
                   $totalcarrito=0;
                   if(!isset($_SESSION)) {
                        session_start();
                    }


                   if(isset($_SESSION['cart']))
                    {
                    if(count($_SESSION['cart'])>0){
                        foreach($_SESSION['cart'] as $id){
                            $totalcarrito+=$id['cantidad'];
                        }
                    }
                }

                   ?>
                    <span class="button__badge">{{$totalcarrito}}</span></a>
                </div>
			</div>