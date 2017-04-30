<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Iniciar sesión</title>

	<link rel="stylesheet" href="{{url('public/css/bootstrap/bootstrap.css')}}" /> 

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{url('public/css/app/app.v1.css')}}" />



</head>
<body>	
    
	
    <div class="container">
    <div class="row " style="margin-top: 10%;">
        <div class="col-lg-6 col-lg-offset-3 ">
        <h3 class="text-center">Iniciar sesión</h3>
            <p class="text-center">Para ingresar, digite su nombre de usuario y clave secreta</p>
        </div>
        </div>
    	<div class="row ">
    	<div class="col-lg-4 col-lg-offset-4 ">
      @if(session()->has('error'))

      <div class="panel panel-danger">
                      <div class="panel-heading">{{session('error')}}</div>
                    
                    </div>
      @endif
        	
            <hr class="clean">
        	<form role="form" method="post" action="{{url('postlogin')}}">
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario">
              </div>
              <div class="form-group input-group">
              	<span class="input-group-addon"><i class="fa fa-key"></i></span>
                <input type="password" name="password" class="form-control"  placeholder="Contraseña">
              </div>
              <div class="form-group" align="right">
                <a href="">¿Has olvidado tu clave?</a>
              </div>
        	  <button type="submit" class="btn btn-purple btn-block">Entrar</button>
            </form>
            <hr>
            
          
        </div>
        </div>
    </div>
    
    
    
	<script src="{{url('public/js/jquery/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{url('public/js/plugins/underscore/underscore-min.js')}}"></script>

    <script src="{{url('public/js/bootstrap/bootstrap.min.js')}}"></script>
    
    <script src="{{url('public/js/globalize/globalize.min.js')}}"></script>
    
    <script src="{{url('public/js/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>

	<script src="{{url('public/js/app/custom.js')}}" type="text/javascript"></script>
    

    

</body>
</html>
