@extends('layout')

@section('title', 'Premios')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
          

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-12">

            <div class="page-header"><h1>Premios</h1>

            </div>
            
            
             
                <div class="panel panel-default" align="right">
                <div style="margin-top: 20px;margin-bottom: 20px;">
                <a class="btn btn-primary" href="{{url('agregarPremio')}}">Agrega premio</a>
                </div>
                
                    <div class="panel-body">

                    
                         <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="basic-datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Premio</th>
                                    <th>Puntos necesarios</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                            @if(isset($premios))
                                @foreach($premios as $premio)
                                    <tr class="odd gradeX">
                                        <td>{{$premio->id}}</td>
                                        <td>{{$premio->titulo}}</td>
                                        <td>{{$premio->puntos}}</td>
                                        <td class="col-md-3">
                                        <a href="{{url('modificarPremio')}}/{{$premio->id}}" class="btn btn-info">Detalles</a>
                                        <a href="{{url('eliminarPremio')}}/{{$premio->id}}" class="btn btn-danger" onClick="return confirm('¿Está seguro de eliminar el premio?')">Eliminar</a>
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
