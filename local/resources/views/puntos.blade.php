@extends('layout')

@section('title', 'Puntos')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
          

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-12">

            <div class="page-header"><h1>Cargar puntos</h1>

             @if(session()->has('error'))

      <div class="panel panel-danger">
                      <div class="panel-heading">{{session('error')}}</div>
                    
                    </div>
      @endif

            </div>
            
            
             <h4>Por favor seleccione un archivo de tipo CSV para cargar los puntos de los usuarios registrados.</h4>
             <h4> El formato para el archivo debe ser el siguiente:<br>
             CEDULAS;TIPO DE OPERACIÓN;PUNTOS;MES;FECHA ;CARGO;NOMBRE;APELLIDO;EDS
             </h4>
                <div class="panel panel-default" align="right">
                <div style="margin-top: 20px;margin-bottom: 20px;">
              
                </div>

                
                    <div class="panel-body">

                    <form method="post" action="{{url('admin/cargarPuntos')}}" enctype="multipart/form-data">
                    <input type="file" name="archivo" class="form-control"><br><br>
                    <input type="submit" value="Cargar archivo" class="btn btn-primary">
                    </form>
                    </div>
                </div>
            </div>
            </div>           
        
        
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
    
    </section>

@endsection
