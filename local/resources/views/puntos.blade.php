@extends('layout')

@section('title', 'Puntos')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
          

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-12">
              @if(isset($fechaCarga))
              <div class="page-header"><h1>Punto cargados ({{$fechaCarga}})</h1>
              @else
              <div class="page-header"><h1>Puntos</h1>
              @endif

            

             @if(session()->has('error'))

      <div class="panel panel-danger">
                      <div class="panel-heading">{{session('error')}}</div>
                    
                    </div>
      @endif

            </div>
            
            
             @if(session()->has('msg'))

      <div class="panel panel-success">
                      <div class="panel-heading">{{session('msg')}}</div>
                    
                    </div>
      @endif

      
                <div class="panel panel-default" >




                <div style="margin-top: 20px;margin-bottom: 20px;margin-right: 20px;" align="right">

            <form method="post" action="{{url('admin/Puntos')}}">
                <div class="col-md-3" align="left">
                        <label>Fecha de carga</label>
                        <select class="form-control" required name='fecha'>
                            <option value="">Seleccione...</option>
                            @foreach($fechas as $fecha)
                            <option value="{{$fecha->fecha}}">{{$fecha->fecha}}</option>
                            @endforeach
                        </select>
                </div>
                <div class="col-md-2">
                  <br>
                  <button class="btn btn-success" type="submit">Consultar</button>
                </div>
            </form>
            <br>


                @if(isset($fechaCarga))
                <script type="text/javascript">
                    function pregunta()
                    {
                        return confirm('Aviso: Todoso los puntos de este día serán eliminados');
                    }
                </script>
                <a class="btn btn-danger" href="{{url('admin/eliminarCarga')}}/{{$fechaCarga}}" onClick="return pregunta()">Eliminar carga</a>
                @endif
      
                <a class="btn btn-info" href="{{url('admin/cargarPuntos')}}">Cargar archivo</a>
                </div>
                 
                
                    <div class="panel-body">


                    @if(isset($resultados))

                    
                         <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>Cédula</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>EDS</th>
                                    <th>Puntos asignados</th>
                                </tr>
                            </thead>
                            <tbody>

                            @if(isset($resultados))
                                @foreach($resultados as $resultado)

                                <?php 
                                $usuario=DB::table('usuarios')->where('usuario','=',$resultado->usuario)->first();

                                ?>
                                @if($usuario)
                                    <tr>
                                        <td>{{$usuario->cedula}}</td>
                                        <td>{{$usuario->nombres}}</td>
                                        <td>{{$usuario->apellidos}}</td>
                                        <td>{{$usuario->eds}}</td>
                                        <td>{{$resultado->puntos}}</td>
                                    </tr>
                                    @endif
                                @endforeach
                            @endif
                                
                             
                            </tbody>
                        </table>
                        @else


                        @endif

                    </div>
                </div>
            </div>
            </div>           
        
        
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
    
    </section>

@endsection
