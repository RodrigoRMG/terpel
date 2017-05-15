
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

                              <div class="data-table data-table-init card">
                              <table class="table datatable table-striped table-bordered" id="basic-datatable">
                               <thead>
                                   <td>Producto</td>
                                   <td>Valor Ptos</td>
                                   <td>Fecha de canje</td>
                               </thead>
                               <tbody>
                               <?php
                               $totalcanejado=0;
                               ?>

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
                               </tbody>

                               </table>
                               </div>

                               <div align="right">
    <h4>{{$totalcanejado}} Ptos. canjeados</h4>
    </div>
                              </div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
         </div>
     @endsection