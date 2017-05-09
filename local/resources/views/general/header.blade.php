<div class="row menuprincipal" style="position: fixed;width: 100%;z-index: 999;">
<div class="col-md-8"><span style="padding-right:5em">Bienvenid(a) {{ucfirst(Auth::user()->nombres)}} {{ucfirst(Auth::user()->apellidos)}}</span><span style="padding-right:2em"> Asesor: {{ucfirst(Auth::user()->asesor)}} </span> <span>Nombre EDS: {{Auth::user()->eds}}</span></div>
			
				
				<div class="col-md-2" style="margin-left:100px;">
                    <a href="Contacto" style="color:#FFF;">Contáctanos</a> &nbsp;&nbsp;|
                </div>
                <div class="col-md-2 " style="margin-left: -120px;">

                    <a href="logout" style="color:#FFF;">Cerrar sesión</a>
                    <i class="fa fa-shopping-basket carrito" style="font-size: 20px!important"></i> 
                    <span class="button__badge">4</span>
                </div>
			</div>