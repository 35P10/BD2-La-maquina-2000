<!DOCTYPE html>
<html lang="">
<head>
    <title>@yield('title')-My Csm </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="routeName" content="{{Route::currentRouteName() }}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ url('/static/css/admin.css?v'.time())}}">
    
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/e923340576.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
        <!-- Development version -->
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.js"></script>

    <!-- Production version -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    
    
    <script src="{{url('/static/libs/ckeditor/ckeditor.js')}}"></script>
    <script src="{{url('/static/js/admin.js')}}"></script>
    
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>

</head>

<body>
   
   <div class="wrapper">
       <div class="col1">@include('admin.sidebar')</div>
       <div class="col2">
           <nav class="navbar navbar-expand-lg shadow">
              <div class="collapse navbar-collapse">
                 <ul class="navbar-nav">
                     <li class="nav item">
                         <a href ="{{url('/admin')}}" class="nav-link"><i class="fas fa-home"></i>Dashboard</a>
                     </li>
                 </ul>
                  
              </div>
               
           </nav>
       <div class="page">
           <div class="container-fluid">
               <nav arial-label="breadcrumb shadow">
                   <ol class="breadcrumb">
                       <li class="breadcrumb-item">
                           <a href="{{url('/admin')}}"><i class="fas fa-home"></i>Dasboard</a>
                       </li>
                       @section('breadcrumb')
                       @show
                   </ol>
               </nav>
           </div>
           
            @if(Session::has('message'))
                <div class="container">
                    <div class="alert alert-{{Session::get('typealert')}} mtop16" style="display:block;margin-bottom:16px;">
                    {{Session::get('message')}}
                    @if ($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
             @endif
                <script>
                    $('.alert').slideDown();
                    setTimeout(function(){ $('.alert').slideUp(); },10000);
                </script>
           
           
           
       </div>
       </div>
       @endif
       
       @section('content')
       @show
   </div>
    
</body>
</html>
