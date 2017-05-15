
 @extends('movil/layout')

@section('title', 'Catalogo')

@section('content')
      
            <div class="pages">
               <div class="page" data-page="home">
                  <div class="page-content">
                     <div class="slider-slick app-pages">
                     </div>
                    
                     <div class="portfolio app-section app-bg-dark">
                        <div class="container">
                           <div class="app-title">
                              <h4>CATALOGO</h4>
                              
                           </div>
                           <ul class="portfolio-filter">
                              
                              <li data-filter="1">Tecnologia</li>
                              <li data-filter="2">Supermercado</li>
                              <li data-filter="3">Turismo</li>
                              <li data-filter="4">Otros</li>
                              <li data-filter="all" class="active">Todos</li>
                           </ul>
                           <div class="portfolio-item">
                              <div class="row">


                               @foreach($premios as $premio)
                               <div class="col-100 filtr-item" data-category="{{$premio->categoria}}"><a href="" onClick="location.href='{{url('detallePremio')}}/{{$premio->id}}'"><img src="{{url($premio->imagen)}}" alt=""></a></div>
                               @endforeach
                              </div>
                           </div>
                        </div>
                     </div>
                    
                     
                   
                  </div>
               </div>
            </div>
           @endsection
