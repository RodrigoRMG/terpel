
@extends('movil/layout')

@section('title', 'Estado de cuenta')

@section('content')
           
      


            <div class="pages">
               <div class="page" data-page="home">
                  <div class="page-content">
                     <div class="slider-slick app-pages">
                     @if(session()->has('msg'))

      @if(session('msg')=='ok')

      <h3 style="color: green;">Felicidades, tu compra esta siendo procesada</h3>

      @else
       <h3 style="color: red;">Tu compra no pudo ser procesada, intentalo nuevamente</h3>

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
    <div class="data-table data-table-init card">
    <table class="table">
    <thead>
        <tr>
        <th>Cantidad</th>
        <th>Premio</th>
        <th>Puntos necesarios</th>
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
        echo "<td><a  onClick='location.href=\"".url('eliminarCarrito')."/".$id['id']."\"' class='btn btn-danger'>Eliminar</a></td>";
        echo "</tr>";
    }
    ?>
    </tbody>
    </table>
    </div>
    <div align="right">
    <a onClick='location.href="{{url('terminarCompra')}}"' class="button button-raised button-fill color-green">Procesar pedido</a>
    </div>
    <?php
}else{
    echo "<br><br><h5>No has agregado nada al carrito</h5>";
}
}else{
    echo "<br><br><h5>No has agregado nada al carrito</h5>";
}
    ?>
                     </div>
                    
                   
                   
                  </div>
               </div>
            </div>


         

     @endsection
