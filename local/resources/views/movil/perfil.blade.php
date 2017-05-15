
@extends('movil/layout')

@section('title', 'Estado de cuenta')

@section('content')


<div class="pages">
   <div class="page" data-page="home">
      <div class="page-content">
         <div class="slider-slick app-pages">
         </div>
         <div class="offers">
            <div class="container">
               <div class="row">
               <div class="col-100">

                    <?php $pts=0;?>
                    @foreach($puntos as $punto)
                    <?php $pts+=$punto->puntos;?>
                    @endforeach

                    <?php $ptscanjeados=0;?>
                    @foreach($compras as $compra)
                    <?php $ptscanjeados+=$compra->total_puntos;?>
                    @endforeach


                    <div class="data-table data-table-init card">
                    <table>
                       <thead>
                       <tr>
                         <td>Periodo</td>
                         <td>Acumulado</td>
                         <td>Canjeado</td>
                         <td>Diferencia</td>
                         </tr>
                      </thead>
                      <tbody>
                      <tr>
                         <td>Mayo 2017</td>
                         <td>{{$pts}}</td>
                         <td>{{$ptscanjeados}}</td>
                         <td>{{$pts-$ptscanjeados}}</td>
                      </tr>
                    </tbody>
                 </table>
                 </div>

                 <div class="data-table data-table-init card" align="right">
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
    </div>
 </div>
</div>
</div>
@endsection