
 @extends('movil/layout')

@section('title', 'Catalogo')

@section('content')
      <div class="views">
         <div class="view view-main">
            <div class="navbar" style="background-color: #000!important;">
               <div class="navbar-inner">
                  <div class="left site-title">
                  <div class="navbar-icon">
                  	<a href="#" class="link open-panel" ><i style="color:#FFF!important;" class="fa fa-bars"></i></a>

                  </div>
                  
                     <a href="index-2.html">
                        <h1 style="color:#FFF!important;">Gregorio Hernandez</h1>
                     </a>
                  </div>
                  <div class="right navbar-icon" style="margin-right: 15px;background-color: red;border: 2px #000 solid;border-radius: 10px;padding-left: 10px;padding-right: 10px">
                  	50000 pts
                  </div>
               </div>
            </div>
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
                              <li data-filter="3">Otros</li>
                              <li data-filter="all" class="active">Todos</li>
                           </ul>
                           <div class="portfolio-item">
                              <div class="row">
                                 <div class="col-50 filtr-item" data-category="1, 2"><a href="img/portfolio1.jpg" data-lightbox="image-1"><img src="img/portfolio1.jpg" alt=""></a></div>
                                 <div class="col-50 filtr-item" data-category="2, 3"><a href="img/portfolio2.jpg" data-lightbox="image-1"><img src="img/portfolio2.jpg" alt=""></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-50 filtr-item" data-category="3, 3"><a href="img/portfolio3.jpg" data-lightbox="image-1"><img src="img/portfolio3.jpg" alt=""></a></div>
                                 <div class="col-50 filtr-item" data-category="3, 1"><a href="img/portfolio4.jpg" data-lightbox="image-1"><img src="img/portfolio4.jpg" alt=""></a></div>
                              </div>
                              <div class="row">
                                 <div class="col-50 filtr-item" data-category="2"><a href="img/portfolio5.jpg" data-lightbox="image-1"><img src="img/portfolio5.jpg" alt=""></a></div>
                                 <div class="col-50 filtr-item" data-category="2, 1"><a href="img/portfolio6.jpg" data-lightbox="image-1"><img src="img/portfolio6.jpg" alt=""></a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                    
                     
                   
                  </div>
               </div>
            </div>
         </div>
      </div>
           @endsection
