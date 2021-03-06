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
        <a href="{{url('public')}}/reglas-del-juego.pdf" download><i class="fa  fa-check-square"></i> REGLAS DEL JUEGO</a>
        <a href="{{url('terminos')}}" ><i class="fa fa-edit"></i> TÉRMINOS Y <span style="margin-left:25px;">CONDICIONES</span></a>
        @if(Auth::user()->tipo_usuario>2)
       <a href="{{url('admin')}}" ><i class="fa fa-home"></i> ASESOR</a>
        @endif
	</div>
</div>
<div class="col-md-9" >
<div class="row" style="margin-top: 40px;color:#000!important;">
<img src="{{url('public/images/banner3.png')}}" width="105%" style="margin-left: -75px!important;">
	<div class="col-md-12" style="margin-top: 40px;">

    <?php $anos=DB::select('select YEAR(created_at) as valor from compras group by YEAR(created_at)');?>

   



    <label>INICIO</label>
    Año
    <select  class="for-control">
    <option>Todos</option>
         @foreach($anos as $ano)
         <option value="{{$ano->valor}}">{{$ano->valor}}</option>
        @endforeach
    </select> 

    Mes
    <select class="for-control">
    <option>Todos</option>
        <option>Enero</option> <option>Ferebro</option> <option>Marzo</option> <option>Abril</option> <option>Mayo</option> <option>Junio</option> <option>Julio</option> <option>Agosto</option> <option>Septiembre</option> <option>Octubre</option> <option>Noviembre</option> <option>Diciembre</option>

    </select>
    <input type="submit" value="Filtrar">

    <table class="table  table-striped table-bordered" >
    <thead>
        <td>Periodo</td>
        <td>Acumulado</td>
        <td>Canjeado</td>
        <td>Diferencia</td>
    </thead>

     <?php $grantotal=0;
     $encontrados=0;
     ?>
    
    @foreach($anos as $ano)

   

    @for($c=1;$c<=12;$c++)
    <?php $puntos=DB::select("select *  from puntos where month(created_at)='".$c."' and YEAR(created_at)='".$ano->valor."' and usuario='".Auth::user()->cedula."'");?>
                <?php $pts=0;?>
                @foreach($puntos as $punto)
                <?php $pts+=$punto->puntos;?>
                @endforeach
    
    <?php $compras=DB::select("select * from compras where month(created_at)='".$c."' and YEAR(created_at)='".$ano->valor."'and usuario='".Auth::user()->cedula."'");?>
                <?php $ptscanjeados=0;?>
                @foreach($compras as $compra)
                <?php $ptscanjeados+=$compra->total_puntos;?>
                @endforeach


        @if($ptscanjeados>0 || $pts>0)
         <tr>
        <td>
        <?php
        switch($c)
        {
        case '1':
        echo "Enero";
        break;
        case '2':
        echo "Febrero";
        break;
        case '3':
        echo "Marzo";
        break;
        case '4':
        echo "Abril";
        break;
        case '5':
        echo "Mayo";
        break;
        case '6':
        echo "Junio";
        break;
        case '7':
        echo "Julio";
        break;
        case '8':
        echo "Agosto";
        break;
        case '9':
        echo "Septiembre";
        break;
        case '10':
        echo "Octubre";
        break;
        case '11':
        echo "Noviembre";
        break;
        case '12':
        echo "Diciembre";
        break;
        default:
        echo $c;
        break;
    }
        ?>
        {{$ano->valor}}</td>

        @if($pts>0)
        <td>{{$grantotal+$pts}}</td>
        @else
        <td>{{$grantotal}}</td>
        @endif

        <td>{{$ptscanjeados}}</td>

        @if($pts>0)
        <td>{{($grantotal+$pts)-$ptscanjeados}}</td>
        @else
        <td>{{$grantotal-$ptscanjeados}}</td>
        @endif
        
        </tr>
         <?php 
        $grantotal=$pts-$ptscanjeados;
        $encontrados++;
        ?>
        
        @endif

       



    @endfor

    @endforeach


        
    

    @if($encontrados==0)
    <tr>
    <td colspan="4">No hay movimientos registrados</td>
    </tr>
    @endif

    

   

    </table>

    <?php $puntos=DB::select("select *  from puntos where usuario='".Auth::user()->cedula."'");?>
                <?php $pts=0;?>
                @foreach($puntos as $punto)
                <?php $pts+=$punto->puntos;?>
                @endforeach
    
   <?php $compras=DB::select("select * from compras where usuario='".Auth::user()->cedula."'");?>
                <?php $ptscanjeados=0;?>
                @foreach($compras as $compra)
                <?php $ptscanjeados+=$compra->total_puntos;?>
                @endforeach


    <table class="table">
     <tr>
        <td align="right">Total puntos acumulados</td>
        <td>{{$pts}} </td>
    </tr>

    <tr>
        <td align="right"><a href="estadoCuenta">Total puntos canjeados</a></td>
        <td>{{$ptscanjeados}}</td>
    </tr>

    <tr>
        <td align="right">Total puntos disponibles</td>
        <td>{{$pts-$ptscanjeados}}</td>
    </tr>
    </table>

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
