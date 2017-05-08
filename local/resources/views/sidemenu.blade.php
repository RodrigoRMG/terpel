	<aside class="left-panel">
    		
            <div class="user text-center">
                  <img src="{{url('public/images/user.png')}}" width="100%">
                  <h4 class="user-name">{{ucfirst(Auth::user()->nombres)}}</h4>
                  

            </div>
            
            
            
            <nav class="navigation">
            	<ul class="list-unstyled">
              @if(Auth::user()->tipo_usuario==5)
                	<li><a href="{{url('admin/inicio')}}"><span class="nav-label">Inicio</span></a></li>
                  @endif
                  @if(Auth::user()->tipo_usuario==5 || Auth::user()->tipo_usuario==4 || Auth::user()->tipo_usuario==3)
                  <li><a href="{{url('admin/Usuarios')}}"><span class="nav-label">Usuarios</span></a></li>
                  @endif

                  @if(Auth::user()->tipo_usuario==5)
                  <li><a href="{{url('admin/Premios')}}"><span class="nav-label">Premios</span></a></li>
                  @endif

                  @if(Auth::user()->tipo_usuario==5)
                  <li><a href="{{url('admin/Puntos')}}"><span class="nav-label">Puntos</span></a></li>
                  @endif

                  @if(Auth::user()->tipo_usuario==5)
                  <li><a href="{{url('admin/canjesPendientes')}}"><span class="nav-label">Canjes pendientes</span></a></li>
                  @endif

                  <li><a href="{{url('logout')}}"><span class="nav-label">Cerrar sesión</span></a></li>


                  
                </ul>
            </nav>
            
    </aside>