
 @extends('movil/layout')

@section('title', 'Estado de cuenta')

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
                     <img src="{{url('public/images/terminos.jpg')}}" width="100%">
                     </div>
                    
                   
                   
                  </div>
               </div>
            </div>
         </div>
      </div>

     @endsection
