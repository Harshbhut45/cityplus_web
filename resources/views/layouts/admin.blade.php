<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap-link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="ThemePixels">
    
    <title>@stack('title')</title>

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

     <!-- vendor css -->
     <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
     <link href="https://pagecdn.io/lib/easyfonts/hind-vadodara.css" rel="stylesheet" />
    
     <!-- custom CSS -->
    <link rel="stylesheet" href="{{ ('/css/custom.css') }}">
    
    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashforge.css') }}">

    <!-- slider-CSS -->
    <link href="https://googledrive.com/host/0B1RR6fhjI2QROGt0MTFoVkhMdUk/fonts.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css">
   
    
   
    
  </head>
  <body>

    <header class="navbar navbar-header navbar-header-fixed">
      <div class="container">
      <a href="" id="sidebarMenuOpen" class="burger-menu"><i data-feather="arrow-left"></i></a>
      <div class="navbar-brand">
        <a href="#" class="df-logo">CITY PLUS</a>
      </div><!-- navbar-brand -->
     
        <div class="navbar-right">
          <div class="navbar-image__icon">
          <img src='images\aim.png'>
          <div class="form-group ">
            <select class="select2" name="country">
                <option disabled selected value>રાજકોટ</option>
                <option class="select2" >રાજકોટ</option>
            </select>
            </div>
          </div>
        </div>
      </div><!-- nav-wrapper -->
    </header>

          <div class=" @stack('content-class') ">
            <div class="@stack('container-class') ">
              @yield('content')
             </div>
          </div>
        
        <script src="{{ asset('lib/feather-icons/feather.min.js') }}"></script>
{{-- select-2 --}}
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
      <script src="{{ asset('assets/js/select2.js') }}"></script>
<!-- slider-js --> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
    <script src="{{ asset('js/slider.js') }}"></script>

  </body>
</html>