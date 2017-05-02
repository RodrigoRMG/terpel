@extends('layout')

@section('title', 'Canjes pendientes')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
          

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-12">

            <div class="page-header"><h1>Canjes pendientes</h1>

             @if(session()->has('error'))

      <div class="panel panel-danger">
                      <div class="panel-heading">{{session('error')}}</div>
                    
                    </div>
      @endif

            </div>
            
            
             
                <div class="panel panel-default" align="right">
                <div style="margin-top: 20px;margin-bottom: 20px;">
               
                </div>
                
                    <div class="panel-body">

                    
                         <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>Usuario</th>
                                    <th>Premio</th>
                                    <th>Fecha</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            @if(isset($compras))
                                @foreach($compras as $compra)
                                    <tr>
                                    <?php $usuario=DB::table('usuarios')->where('cedula','=',$compra->usuario)->first();?>

                                        <td>{{$usuario->nombres}} {{$usuario->apellidos}}</td>
                                        <?php $premio=DB::table('premios')->where('id','=',$compra->premio)->first();?>
                                        
                                       
                                        <td>{{$premio->titulo}}</td>
                                        <td>{{$compra->created_at}}</td>
                                        <td>
                                        <a href="{{url('admin/detallesCanje')}}/{{$compra->id}}" class="btn btn-info">Detalles</a>
                                        <a href="{{url('admin/terminarCanje')}}/{{$compra->id}}" class="btn btn-danger" onClick="return confirm('¿Está seguro que desea terminar el proceso?')">Terminar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                                
                             
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            </div>           
        
        
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
    
    </section>

@endsection
