<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title')</title>


  <link rel="stylesheet" href="{{url('public/css/bootstrap/bootstrap.css')}}" /> 
  <link rel="stylesheet" href="{{url('public/css/plugins/calendar/calendar.css')}}" />
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="{{url('public/css/app/app.v1.css')}}" />


</head>
<body>

  @include('sidemenu')
  @yield('content')


  <script src="{{url('public/js/jquery/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
  <script src="{{url('public/js/plugins/underscore/underscore-min.js')}}"></script>

  <script src="{{url('public/js/bootstrap/bootstrap.min.js')}}"></script>


  <script src="{{url('public/js/globalize/globalize.min.js')}}"></script>


  <script src="{{url('public/js/plugins/nicescroll/jquery.nicescroll.min.js')}}"></script>


  <script src="{{url('public/js/plugins/DevExpressChartJS/dx.chartjs.js')}}"></script>
  <script src="{{url('public/js/plugins/DevExpressChartJS/world.js')}}"></script>

  <script src="{{url('public/js/plugins/DevExpressChartJS/demo-charts.js')}}"></script>
  <script src="{{url('public/js/plugins/DevExpressChartJS/demo-vectorMap.js')}}"></script>
  
  <script src="{{url('public/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
  <script src="{{url('public/js/plugins/sparkline/jquery.sparkline.demo.js')}}"></script>
  <script src="{{url('public/js/angular/todo.js')}}"></script>
  <script src="{{url('public/js/plugins/calendar/calendar.js')}}"></script>
  <script src="{{url('public/js/plugins/calendar/calendar-conf.js')}}"></script>
  <script src="{{url('public/js/app/custom.js" type="text/javascript')}}"></script>


   <script src="{{url('public/js/plugins/datatables/jquery.dataTables.js')}}"></script>
    <script src="{{url('public/js/plugins/datatables/DT_bootstrap.js')}}"></script>
    <script src="{{url('public/js/plugins/datatables/jquery.dataTables-conf.js')}}"></script>



</body>

<!-- Mirrored from freakpixels.com/portfolio/brio/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Apr 2017 13:51:40 GMT -->
</html>
