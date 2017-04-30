@extends('layout')

@section('title', 'Bienvenido')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
          

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-12">

            <div class="page-header"><h1>Estado de cuenta</h1>
            <p>Estimado cliente, para ver sus puntos acumulados seleccione, en la columna "Acumulados", el periodo que desea ver. Y para ver sus canjes, seleccione,  en la columna "Canjeados", el periodo que desea ver

            </div>
            
            
            
                <div class="panel panel-default">
                    <div class="panel-body">
                    
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" >
                            <thead>
                                <tr>
                                    <th>Periodo</th>
                                    <th>Acumulados</th>
                                    <th>Canjeados</th>
                                    <th>Diferencia</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX">
                                    <td>2017 - Enero</td>
                                    <td>500</td>
                                    <td>0</td>
                                    <td class="center"> 500</td>
                                </tr>
                                 <tr class="odd gradeX">
                                    <td>Total puntos</td>
                                    <td>500</td>
                                    <td>0</td>
                                    <td class="center"> 500</td>
                                </tr>
                             
                            </tbody>
                        </table>
                        <div class="row">
                          <div class="col-sm-12" align="right">
                        <p>Total puntos acumulados: 500</p>
                        <p>Total puntos canjeados: 0</p>
                        <p>Total puntos disponibles: 500</p>
                          </div>
                          </div>

                    </div>
                </div>
            </div>
            </div>           
        
        
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
    
    </section>

@endsection
