<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


       <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
       <link rel="stylesheet" href="/resources/demos/style.css">
       <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
       <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
<script>
    $( function() {
      $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 100000,
        values: [ 25000, 30000 ],
        slide: function( event, ui ) {
          $( "#amount" ).val(ui.values[ 0 ]);
          $( "#amount2" ).val(ui.values[ 1 ]);
        }
      });
      $( "#amount" ).val($( "#slider-range" ).slider( "values", 0 ));
     $( "#amount2" ).val($( "#slider-range" ).slider( "values", 1 ));
    } );
    </script>
       <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
       <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
       <script>
            $(document).ready(function() {
                       $('#ptr_occupation').select2({
                    placeholder: 'Select atleast one'});
                   });
            $(document).ready(function() {
                       $('#ptr_family').select2({
                    placeholder: 'Select atleast one'});
            });
       </script>
       <!-- Fonts -->
       <link rel="dns-prefetch" href="//fonts.gstatic.com">
       <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

       <!-- Styles -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   </head>
<body>
<div id="app">
    <main class="body-content">

        <nav class="navbar ms-navbar">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="{{url('admin/dashboard')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       Filter Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/0'>Female</a>
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/1'>Male</a>
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/Joint_family'>Joint Family</a>
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/Nuclear_family'>Nuclear Family</a>
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/Private_job'>Private Job</a>
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/Gvnt_job'>Gvnt Job</a>
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/Business'>Business</a>
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/No'>Not Manglik</a>
                            <a class="dropdown-item" href='{{url('admin/dashboard')}}/Yes'>Manglik</a>
                      </div>
                    </li>
                    <li class="nav-item">
                        <a class="media fs-14 p-2" href="{{url('admin/logout')}}"><span><i class="flaticon-shut-down mr-2"></i> Logout</span></a>
                    </li>
                  </ul>

            </nav>



        </nav>
        <div class="ms-content-wrapper">
            @section('content')
            @show
        </div>
      </main>
</div>
</body>
</html>
