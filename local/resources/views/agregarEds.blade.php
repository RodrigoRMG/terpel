@extends('layout')

@section('title', 'EDS')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">

        @if(isset($eds))

        <div class="page-header"><h1>Modificar EDS</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="{{url('admin/modificarEds')}}" >
                          <input type="hidden" name="id" value="{{$eds->id}}">

                
    
                            <div class="form-group has-feedback">
                                <label class="control-label">Descripción del EDS</label>
                                <textarea name="descripcion" class="form-control" required>{{$eds->descripcion}}</textarea>
                            </div>
                              
                            <hr class="dotted">
                            
                            <div class="form-group" align="right">
                            <a href="{{url('Premios')}}" class="btn btn-danger" id="resetBtn">Cancelar</a>
                                <button type="submit" class="btn btn-info" id="resetBtn">Guardar</button>
                            </div>
                            </form>
                        
                        
                        </div>
                    </div>
            
            </div>
            </div>   

        @else

        <div class="page-header"><h1>Agregar EDS</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="{{url('admin/agregarEds')}}">

    
                            <div class="form-group has-feedback">
                                <label class="control-label">Descripcón del EDS</label>
                                <textarea name="descripcion" class="form-control" required></textarea>
                            </div>
                         
             
                          
                              
                            <hr class="dotted">
                            
                            <div class="form-group" align="right">
                            <a href="{{url('admin/Premios')}}" class="btn btn-danger" id="resetBtn">Cancelar</a>
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
