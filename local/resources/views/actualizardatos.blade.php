@extends('layout')

@section('title', 'Bienvenido')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
            <div class="page-header"><h1>Actualizar datos</h1></div>

            <div class="row" style="margin-bottom: 100px;">
            <div class="col-md-6">
            
            <div class="panel panel-default">
                        <div class="panel-heading">Rellena todos los campos</div>
                        <div class="panel-body">
                        
                        
                          <form method="post" class="validator-form bv-form" action="#" novalidate="novalidate"><button type="submit" class="bv-hidden-submit" style="display: none; width: 0px; height: 0px;"></button>
                            
                            <div class="form-group has-feedback">
                              <div class="row">
                                  <div class="col-lg-6">
                                      <label class="control-label">Nombre</label>
                                    <input type="text" class="form-control" name="firstName"  data-bv-field="firstName"></div>
                                    <div class="col-lg-6">
                                      <label class="control-label">Apellidos</label>
                                        <input type="text" class="form-control" name="lastName" data-bv-field="lastName">

                                 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group has-feedback">
                                <label class="control-label">Cédula</label>
                                <input type="text" class="form-control" name="username" data-bv-field="username">
                                </div>
    
                            <div class="form-group has-feedback">
                                <label class="control-label">Email</label>
                                <input type="text" class="form-control" name="email" data-bv-field="email">
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label">Teléfono</label>
                                <input type="text" class="form-control" name="email" data-bv-field="email">
                            </div>
                          
                              
                            <hr class="dotted">
                            
                            <div class="form-group" align="right">
                                <button type="button" class="btn btn-info" id="resetBtn">Guardar</button>
                            </div>
                            </form>
                        
                        
                        </div>
                    </div>
            
            </div>
            </div>           
        
        
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
    
    </section>

@endsection
