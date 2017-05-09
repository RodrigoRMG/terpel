<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Contáctanos</h4>
      </div>
      <div class="modal-body">
        <p><h3><a href="tel:62896900" style="color:#000;text-decoration: none;">Teléfono: 6289-6900</a></h3></p>
        <p><h3><a href="mailto:echaleganas@terpel.com" style="color:#000;text-decoration: none;">Email: echaleganas@terpel.com</a></h3></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
 <?php 

$puntos=DB::table('puntos')->where('usuario','=',Auth::user()->cedula)->get();
$compras=DB::table('compras')->where('usuario','=',Auth::user()->cedula)->get();

 ?>

                <?php $pts=0;?>
                @foreach($puntos as $punto)
                <?php $pts+=$punto->puntos;?>
                @endforeach

                <?php $ptscanjeados=0;?>
                @foreach($compras as $compra)
                <?php $ptscanjeados+=$compra->total_puntos;?>
                @endforeach



<div class="row menuprincipal" style="position: fixed;width: 100%;z-index: 999;">
<div class="col-md-8"><span style="padding-right:5em">Bienvenid(a) {{ucfirst(Auth::user()->nombres)}} {{ucfirst(Auth::user()->apellidos)}} ({{$pts-$ptscanjeados}} pts)</span>

<span style="padding-right:2em"> Asesor: {{ucfirst(Auth::user()->asesor)}} </span> 

<span>Nombre EDS: {{Auth::user()->eds}}</span></div>
			
				
				<div class="col-md-2" style="margin-left:100px;">
                    <a href="#" data-toggle="modal" data-target="#myModal" style="color:#FFF;text-decoration: none;">Contáctanos</a> &nbsp;&nbsp;|
                </div>
                <div class="col-md-2 " style="margin-left: -120px;">

                    <a href="logout" style="color:#FFF;">Cerrar sesión</a>
                    <i class="fa fa-shopping-basket carrito" style="font-size: 20px!important"></i> 
                    <span class="button__badge">4</span>
                </div>
			</div>