
 @extends('movil/layout')

@section('title', 'Bienvenido')

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
                                 <div class="entry">
                                    <h1 style="text-align: center;width: 80%;margin-left: 10%;line-height:35px!important;font-weight: 900;"> BIENVENIDOS A ECHALE GANAS</h1>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="offers">
                        <div class="container">
                           <div class="row">
                              <div class="col-100 anuncio">
                                 <div class="entry">
                                    <img src="{{url('public/anuncios/1.jpg')}}" width="100%">
                                 </div>
                              </div>
                              <div class="col-100 anuncio">
                                 <div class="entry">
                                   <img src="{{url('public/anuncios/2.jpg')}}" width="100%">
                                 </div>
                              </div>
                              <div class="col-100 anuncio">
                                 <div class="entry">
                                   <img src="{{url('public/anuncios/3.jpg')}}" width="100%">
                                 </div>
                              </div>
                           </div>
                     </div>
                     <div class="portfolio-item">
                     <div class="row">
                                 <div class="col-50 filtr-item" data-category="1, 2"></div>
                                 <div class="col-50 filtr-item" data-category="2, 3"></div>
                              </div>
                              
                     </div>
                  </div>
               </div>
            </div>
         </div>
     @endsection
