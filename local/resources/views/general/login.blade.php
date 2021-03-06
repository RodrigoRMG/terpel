<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Iniciar sesión</title>

	<link rel="stylesheet" href="{{url('public/css/bootstrap/bootstrap.css')}}" /> 

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>

    <style type="text/css">
      .form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    background-color: transparent;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 14px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
.btn-primary{
background-color: red!important;
}
label{
  color:red!important;
}


    </style>



</head>
<body>	
<img src="{{url('public/images/banner2.png')}}" width="100%">
<div class="banner">
</div>
<div class="container">

    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            
            <div class="account-wall">
                    <div align="center" style="margin-top: -50px;margin-bottom:-40px">
                      <img  src="{{url('public/images/logo.png')}}" width="60%" alt="">
                    </div>
                    <h1 class="text-center login-title">Para ingresar digite su usuario y clave secreta</h1>
                <form class="form-signin" method="post" action="">
                @if(session()->has('error'))
                <div class="panel panel-danger">
                  <div class="panel-heading">{{session('error')}}</div>
                </div>
                @endif
                <label>Usuario</label>
                <input type="text" name="usuario" class="form-control" required autofocus>
                <label>Clave</label>
                <input type="password" name="password" class="form-control" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Ingresar</button>
                <P class="pull-right need-help"><br>¿Has olvidado tu clave? llámanos al 62896900  </P><span class="clearfix"></span>
                </form>
            </div>
        </div>
    </div>
</div>

    
	
    
    
    
	<script src="{{url('public/js/jquery/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
    <script src="{{url('public/js/plugins/underscore/underscore-min.js')}}"></script>

    <script src="{{url('public/js/bootstrap/bootstrap.min.js')}}"></script>
    
    <script src="{{url('public/js/globalize/globalize.min.js')}}"></script>
    
    <script src="{{url('public/js/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>
    

    

</body>
</html>
