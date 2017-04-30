	<aside class="left-panel">
    		
            <div class="user text-center">
                  <img src="{{url('public/images/user.png')}}" width="100%">
                  <h4 class="user-name">{{ucfirst(Auth::user()->nombres)}}</h4>
                  

            </div>
            
            
            
            <nav class="navigation">
            	<ul class="list-unstyled">
                	<li><a href="{{url('admin/inicio')}}"><span class="nav-label">Inicio</span></a></li>
                  <li><a href="{{url('admin/Usuarios')}}"><span class="nav-label">Usuarios</span></a></li>
                  <li><a href="{{url('admin/Premios')}}"><span class="nav-label">Premios</span></a></li>
                  <li><a href="{{url('admin/inicio')}}"><span class="nav-label">Puntos</span></a></li>
                  <li><a href="{{url('admin/admin/reportes')}}"><span class="nav-label">Reportes</span></a></li>
                  <li><a href="{{url('inicio')}}"><span class="nav-label">Configuración</span></a></li>
                  <li><a href="{{url('logout')}}"><span class="nav-label">Cerrar sesión</span></a></li>


                  
                </ul>
            </nav>
            
    </aside>