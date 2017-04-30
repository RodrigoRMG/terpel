@extends('layout')

@section('title', 'Bienvenido')

@section('content')

   <section class="content">
      
  
        <!-- Header Ends -->
        
        
        <div class="warper container-fluid">
          
            <div class="page-header"><h1>Bienvenido(a) {{ucfirst(Auth::user()->nombres)}} <br></h1></div>


            
        
        
            
        </div>
        <!-- Warper Ends Here (working area) -->
        
        
    
    </section>

@endsection
