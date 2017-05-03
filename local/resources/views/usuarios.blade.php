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
            
            
             @if(session()->has('msg'))

      <div class="panel panel-success">
                      <div class="panel-heading">{{session('msg')}}</div>
                    
                    </div>
      @endif
                <div class="panel panel-default" align="right">
                <div style="margin-top: 20px;margin-bottom: 20px;">
                <a class="btn btn-info" href="{{url('admin/cargarUsuarios')}}">Cargar archivo</a>
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
                                        @if($usuario->tipo_usuario==1)
                                        <td>Vendedor</td>
                                        @endif

                                        @if($usuario->tipo_usuario==2)
                                         <td>Dependiente</td>
                                        @endif

                                        @if($usuario->tipo_usuario==3)
                                         <td>Supervisor</td>
                                        @endif

                                        @if($usuario->tipo_usuario==4)
                                         <td>Administrador</td>
                                        @endif

                                        @if($usuario->tipo_usuario==5)
                                         <td>Super admin</td>
                                        @endif

                                        
                                        <td>
                                        <a href="{{url('admin/modificarUsuario')}}/{{$usuario->cedula}}" class="btn btn-info">Detalles</a>
                                        <a href="{{url('admin/eliminarUsuario')}}/{{$usuario->cedula}}" class="btn btn-danger" onClick="return confirm('¿Está seguro de eliminar el usuario?')">Eliminar</a>
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
