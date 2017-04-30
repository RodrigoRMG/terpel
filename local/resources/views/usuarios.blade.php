@extends('layout')

@section('title', 'Usuarios')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
          

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-12">

            <div class="page-header"><h1>Usuarios</h1>

             @if(session()->has('error'))

      <div class="panel panel-danger">
                      <div class="panel-heading">{{session('error')}}</div>
                    
                    </div>
      @endif

            </div>
            
            
             
                <div class="panel panel-default" align="right">
                <div style="margin-top: 20px;margin-bottom: 20px;">
                <a class="btn btn-primary" href="{{url('admin/agregarUsuario')}}">Agrega usuario</a>
                </div>
                
                    <div class="panel-body">

                    
                         <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>Cédula</th>
                                    <th>Nombre</th>
                                    <th>Apellidos</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Cargo</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            @if(isset($usuarios))
                                @foreach($usuarios as $usuario)
                                    <tr>
                                        <td>{{$usuario->cedula}}</td>
                                        <td>{{$usuario->nombres}}</td>
                                        <td>{{$usuario->apellidos}}</td>
                                        <td>{{$usuario->email}}</td>
                                        <td>{{$usuario->telefono}}</td>
                                        <td>{{$usuario->tipo_usuario}}</td>
                                        <td>
                                        <a href="{{url('modificarUsuario')}}/{{$usuario->cedula}}" class="btn btn-info">Detalles</a>
                                        <a href="{{url('eliminarUsuario')}}/{{$usuario->cedula}}" class="btn btn-danger" onClick="return confirm('¿Está seguro de eliminar el usuario?')">Eliminar</a>
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
