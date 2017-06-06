@extends('layout')

@section('title', 'Asesores')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">

        @if(isset($usuario))

          <div class="page-header"><h1>Modificar asesor</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="{{url('admin/modificarAsesor')}}">
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
                                <label class="control-label">Cédula (Usuario y password)</label>
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
                               <select name="eds" class="form-control" multiple="">
                               @foreach($eds as $ed)

                               <?php 
                               $HiddenProducts = explode(',',$usuario->eds);
                                    if (in_array($ed->id, $HiddenProducts)) {
                                      ?>
                                      <option value="{{$ed->id}}" selected="">{{$ed->descripcion}}</option>
                                      <?php
                                    } else {
                                      ?>
                                      <option value="{{$ed->id}}">{{$ed->descripcion}}</option>
                                      <?php
                                    }
                               ?> 

                   
                               
                               @endforeach
                               </select>
                            </div>

            

                            <hr class="dotted">
                            <div class="form-group" align="right">
                            <a href="{{url('admin/Asesores')}}" class="btn btn-danger" id="resetBtn">Cancelar</a>
                                <button type="submit" class="btn btn-info" id="resetBtn">Guardar</button>
                            </div>
                            </form>
                        
                        
                        </div>
                    </div>
            
            </div>
            </div>           
        

        @else
          <div class="page-header"><h1>Agregar asesor</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="{{url('admin/agregarAsesor')}}">
                            
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
                                <label class="control-label">Cédula (Usuario y password)</label>
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
                               <select name="eds" class="form-control" required multiple="">
                               <option value="">Selecciona...</option>
                               @foreach($eds as $ed)
                               <option value="{{$ed->id}}">{{$ed->descripcion}}</option>
                               @endforeach
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
