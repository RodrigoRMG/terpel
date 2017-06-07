<div class="statusbar-overlay">
      </div>
      <div class="panel-overlay">
      </div>
      <div class="panel panel-left panel-cover panel-control" style="background-color: red;">
      <style type="text/css">
         li{
            border:none!important;
            
          }
          .menuitem{
            color:#FFF!important;
          }
          .anuncio{
            margin-bottom: 20px!important;
          }

      </style>
         <ul>
            <li style="background-color: #FFF;">
                  <center><img src="{{url('public/images/logo2.png')}}" alt="" height="100"></center>
            </li>
            <li >
               <a class="menuitem" href="index.html" onclick="location.href = '{{url('inicio')}}';"><i class="fa fa-home"></i>INICIO</a>
            </li>
            <li><a class="menuitem" href="faq.html"onclick="location.href = '{{url('perfil')}}';" ><i class="fa fa-user-circle"></i>ESTADO DE CUENTA</a></li>
            <li><a class="menuitem" href="catalogo.html" onclick="location.href = '{{url('catalogo')}}';"><i class="fa fa-shopping-basket"></i>CATALOGO</a></li>
            <li><a class="menuitem" href="terminos.html" onclick="location.href = '{{url('terminos')}}';"><i class="fa fa-edit"></i>TERMINOS Y CONDICIONES</a></li>

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


            <li><a class="menuitem" href="terminos.html" onclick="location.href = '{{url('carrito')}}';"><i class="fa fa-shopping-cart"></i>CARRITO ({{$totalcarrito}})</a></li>
            <li><a class="close-panel menuitem" onclick="location.href = '{{url('logout')}}';"><i class="fa fa-sign-out"></i>CERRAR</a></li>
         </ul>
      </div>