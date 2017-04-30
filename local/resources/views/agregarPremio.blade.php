@extends('layout')

@section('title', 'Premios')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">

        @if(isset($premio))

        <div class="page-header"><h1>Modificar premio</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="{{url('admin/modificarPremio')}}"  enctype="multipart/form-data">
                          <input type="hidden" name="id" value="{{$premio->id}}">

                            <div class="form-group has-feedback">
                                <label class="control-label">Título del premio</label>
                                <input value="{{$premio->titulo}}" type="text" class="form-control" name="titulo">
                            </div>
    
                            <div class="form-group has-feedback">
                                <label class="control-label">Descrión del premio</label>
                                <textarea name="descripcion" class="form-control">{{$premio->descripcion}}</textarea>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Categoría</label>
                                <select class="form-control" name="categoria">
                                @if($premio->categoria==1)
                                 <option value="1" selected>Tecnología</option>
                                @else
                                 <option value="1">Tecnología</option>
                                @endif
                                @if($premio->categoria==2)
                                <option value="2" selected>Supermercado</option>
                                @else
                                <option value="2">Supermercado</option>
                                @endif
                                @if($premio->categoria==3)
                                 <option value="3" selected>Turismo</option>
                                @else
                                 <option value="3">Turismo</option>
                                @endif
                                @if($premio->categoria==4)
                                <option value="4" selected>Otros</option>
                                @else
                                <option value="4">Otros</option>
                                @endif
                                   
                                    
                                   
                                    
                                </select>
                            </div>


                            <div class="form-group has-feedback">
                                <label class="control-label">puntos necesarios</label>
                                <input value="{{$premio->puntos}}" type="number" class="form-control" name="puntos">
                            </div>
                            <div class="form-group has-feedback">
                            @if($premio->imagen!="")
                            <img src="{{url($premio->imagen)}}" width="100%">
                            @endif
                                <label class="control-label">Imagen</label>
                                <input type="file" class="form-control" name="imagen">
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

        <div class="page-header"><h1>Agregar premio</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="{{url('admin/agregarPremio')}}"  enctype="multipart/form-data">

                            <div class="form-group has-feedback">
                                <label class="control-label">Título del premio</label>
                                <input type="text" class="form-control" name="titulo">
                            </div>
    
                            <div class="form-group has-feedback">
                                <label class="control-label">Descrión del premio</label>
                                <textarea name="descripcion" class="form-control"></textarea>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Categoría</label>
                                <select class="form-control" name="categoria">
                                    <option value="1">Tecnología</option>
                                    <option value="2">Supermercado</option>
                                    <option value="3">Turismo</option>
                                    <option value="4">Otros</option>
                                </select>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">puntos necesarios</label>
                                <input type="number" class="form-control" name="puntos">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Imagen</label>
                                <input type="file" class="form-control" name="imagen">
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
