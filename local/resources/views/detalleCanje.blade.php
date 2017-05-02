@extends('layout')

@section('title', 'Detalle Canje')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">

        @if(isset($compra))

          <div class="page-header"><h1>Detalle del canje</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                      
                        <div class="panel-body">
                        <?php $usuario=DB::table('usuarios')->where('cedula','=',$compra->usuario)->first();?>

                            
                            <h3>Usuario</h3>     
                            <div class="form-group has-feedback">
                                <label class="control-label">Nombre completo</label>
                                <input type="text" class="form-control" name="cedula" data-bv-field="username"  value="{{$usuario->nombres}} {{$usuario->apellidos}}" readonly>
                                </div>                       
                            <div class="form-group has-feedback">
                                <label class="control-label">Cédula</label>
                                <input type="text" class="form-control" name="cedula" data-bv-field="username"  value="{{$usuario->cedula}}" readonly>
                                </div>
    
                            <div class="form-group has-feedback">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" data-bv-field="email"  value="{{$usuario->email}}" readonly>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Teléfono</label>
                                <input type="text" class="form-control" name="telefono" data-bv-field="email"  value="{{$usuario->telefono}}" readonly>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">EDS</label>
                                <input type="text" class="form-control" name="eds" data-bv-field="email"  value="{{$usuario->eds}}" readonly>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Asesor</label>
                                <input type="text" class="form-control" name="asesor" data-bv-field="email"  value="{{$usuario->asesor}}" readonly>
                            </div>


                            <hr class="dotted">
                            <h3>Premio canjeado</h3>
                             <?php $premio=DB::table('premios')->where('id','=',$compra->premio)->first();?>
                            <div class="form-group has-feedback">
                                <label class="control-label">Titulo</label>
                                <input type="text" class="form-control" name="asesor" data-bv-field="email"  value="{{$premio->titulo}}" readonly>
                            </div>

                            <div class="form-group has-feedback">
                                <label class="control-label">Descripcion</label>
                                <textarea class="form-control" readonly="">{{$premio->descripcion}} </textarea>
                            </div>

                            <div class="form-group has-feedback">
                            <img src="{{url($premio->imagen)}}" width="100%">
                            </div>


                            <div class="form-group" align="right">
                            <a href="{{url('admin/canjesPendientes')}}" class="btn btn-danger" id="resetBtn">Cancelar</a>
                            <a href="{{url('admin/terminarCanje')}}/{{$compra->id}}" class="btn btn-info" onClick="return confirm('¿Está seguro de desea terminar el proceso?')" id="resetBtn">Terminar</a>
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
