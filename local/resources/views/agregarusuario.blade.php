@extends('layout')

@section('title', 'Usuarios')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">

        @if(isset($usuario))

          <div class="page-header"><h1>Modificar usuario</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="{{url('admin/modificarUsuario')}}">
                          <input type="hidden" name="usuario" value="{{$usuario->cedula}}"> 
                            
                            <div class="form-group has-feedback">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <label class="control-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre"  data-bv-field="firstName" value="{{$usuario->nombres}}"></div>
                                    <div class="col-lg-6">
                                      <label class="control-label">Apellidos</label>
                                        <input type="text" class="form-control" name="apellido" data-bv-field="lastName" value="{{$usuario->apellidos}}">

                                 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group has-feedback">
                                <label class="control-label">Cédula</label>
                                <input type="text" class="form-control" name="cedula" data-bv-field="username"  value="{{$usuario->cedula}}" readonly>
                                </div>
    
                            <div class="form-group has-feedback">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" data-bv-field="email"  value="{{$usuario->email}}">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" data-bv-field="email"  value="{{$usuario->telefono}}">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">EDS</label>
                                <input type="text" class="form-control" name="eds" data-bv-field="email"  value="{{$usuario->eds}}">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Asesor</label>
                                <input type="text" class="form-control" name="asesor" data-bv-field="email"  value="{{$usuario->asesor}}">
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Tipo de usuario</label>
                                <select class="form-control" name="tipousuario">

                                @if($usuario->tipo_usuario==1)
                                <option value="1" selected>Vendedor de pista</option>
                                @else
                                <option value="1">Vendedor de pista</option>
                                @endif

                                @if($usuario->tipo_usuario==2)
                                <option value="2" selected>Dependiente de tienda</option>
                                @else
                                <option value="2">Dependiente de tienda</option>
                                @endif

                                @if($usuario->tipo_usuario==3)
                                <option value="3" selected>Supervisor</option>
                                @else
                                <option value="3">Supervisor</option>
                                @endif

                                @if($usuario->tipo_usuario==4)
                                <option value="4" selected>Administrador</option>
                                @else
                                <option value="4">Administrador</option>
                                @endif
                                
                                </select>
                            </div>

                            <hr class="dotted">
                            
                            <div class="form-group" align="right">
                            <a href="{{url('admin/Usuarios')}}" class="btn btn-danger" id="resetBtn">Cancelar</a>
                                <button type="submit" class="btn btn-info" id="resetBtn">Guardar</button>
                            </div>
                            </form>
                        
                        
                        </div>
                    </div>
            
            </div>
            </div>           
        

        @else
          <div class="page-header"><h1>Agregar usuario</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="{{url('admin/agregarUsuario')}}">
                            
                            <div class="form-group has-feedback">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <label class="control-label">Nombre</label>
                                    <input type="text" class="form-control" name="nombre"  data-bv-field="firstName"></div>
                                    <div class="col-lg-6">
                                      <label class="control-label">Apellidos</label>
                                        <input type="text" class="form-control" name="apellido" data-bv-field="lastName">

                                 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group has-feedback">
                                <label class="control-label">Cédula</label>
                                <input type="text" class="form-control" name="cedula" data-bv-field="username">
                                </div>
    
                            <div class="form-group has-feedback">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" data-bv-field="email">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" data-bv-field="email">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">EDS</label>
                                <input type="text" class="form-control" name="eds" data-bv-field="email">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Asesor</label>
                                <input type="text" class="form-control" name="asesor" data-bv-field="email">
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Tipo de usuario</label>
                                <select class="form-control" name="tipousuario">
                                <option value="1">Vendedor de pista</option>
                                <option value="2">Dependiente de tienda</option>
                                <option value="3">Supervisor</option>
                                <option value="4">Administrador</option>
                                </select>
                            </div>

                            <hr class="dotted">
                            
                            <div class="form-group" align="right">
                            <a href="{{url('admin/Usuarios')}}" class="btn btn-danger" id="resetBtn">Cancelar</a>
                                <button type="submit" class="btn btn-info" id="resetBtn">Guardar</button>
                            </div>
                            </form>
                        
                        
                        </div>
                    </div>
            
            </div>
            </div>           
        
        @endif
          
          
        
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
    
    </section>

@endsection
