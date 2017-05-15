
@extends('movil/layout')

@section('title', 'Estado de cuenta')

@section('content')
           
      


            <div class="pages">
               <div class="page" data-page="home">
                  <div class="page-content">
                 

                      <div class="row" style="margin-top: 60px">
                       @if(session()->has('respuesta'))
                      @if(session('respuesta')=="si")
                    
                           <div > <h5 style="color:green;">El producto ha sido agregado al carrito</h5></div>
                          
                         
                      @else
                            <div><h5 style="color:red;">No cuentas con los puntos suficientes para cajear este premio</h5></div>
                          
                      @endif
                  @endif



                       <div class="col-100">
                        <center><h5>{{$premio->titulo}}</h5></center>
                        @if($premio->imagen!="")
                         <img src="{{url($premio->imagen)}}" width="100%">
                         @endif

                          <h5>{{$premio->descripcion}}</h5>
                <h5>Puntos necesarios: {{$premio->puntos}}</h5>
                <p><a onClick="location.href='{{url('catalogo')}}'" class="button button-raised button-fill color-red">Regresar</a></p>
                <p><a href="" class="button button-raised button-fill color-green" onClick="pregunta()">Agregar al carrito</a></p>

                <script type="text/javascript">
                function pregunta(){
                    if(confirm('¿Estás seguro que deseas cambiar tus puntos por este premio?'))
                    {
                     location.href="{{url('canjearPremio')}}/{{$premio->id}}";
                    }
                }
            </script>


                      </div>

                      </div>     
                   
                  </div>
               </div>
            </div>


         

     @endsection
