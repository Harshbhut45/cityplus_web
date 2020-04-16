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

    <!-- DashForge CSS -->
    <link rel="stylesheet" href="{{ ('/css/custom.css') }}">

    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

     <!-- vendor css -->
     <link href="{{ asset('lib/select2/css/select2.min.css') }}" rel="stylesheet">
     <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    
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
      {{-- <div id="navbarMenu" class="navbar-menu-wrapper">
     
          <ul class="nav navbar-menu">
          <li class="nav-item "><a href="\test" class="nav-link"><i data-feather="box"></i> Test</a></li>
          <li class="nav-item "><a href="\test1" class="nav-link"><i data-feather="box"></i> Test1</a></li>
        
          </ul> --}}
     

        <div class="navbar-right">
          <div class="form-group ">
            
            <select class="select2" name="country">
              <img class='nasaLogo' src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/4579/NASA_meatball.png'/>
                <option disabled selected value>Select City</option>
                <option value="AF" data-capital="Kabul">Rajkot</option>
                  <option value="AX" data-capital="Mariehamn">Jamnagar</option>
              
            </select>
          </div>
        </div>
      </div><!-- nav-wrapper -->
    </header>



  
          <div class=" @stack('content-class') ">
            <div class="@stack('container-class') ">
              @yield('breadcrumb')
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


      <script>

$(document).ready(function(){
  
  $(".Modern-Slider").slick({
    autoplay:true,
    autoplaySpeed:10000,
    speed:600,
    slidesToShow:1,
    slidesToScroll:1,
    pauseOnHover:false,
    dots: true,
    pauseOnDotsHover:true,
    cssEase:'linear',
   // fade:true,
    draggable:false,
    prevArrow:'<button class="PrevArrow"></button>',
    nextArrow:'<button class="NextArrow"></button>', 
  });
  
})



//   home-slider-2

$(document).ready(function(){
$(".SlickCarousel").slick({
  rtl:false, // If RTL Make it true & .slick-slide{float:right;}
  autoplay:false, 
  autoplaySpeed:5000, //  Slide Delay
  speed:800, // Transition Speed
  slidesToShow:4, // Number Of Carousel
  slidesToScroll:4, // Slide To Move 
  pauseOnHover:false,
  appendArrows:$(".Container .Head .Arrows"), // Class For Arrows Buttons
  prevArrow:'<span class="Slick-Prev"></span>',
  nextArrow:'<span class="Slick-Next"></span>',
  easing:"linear",
  responsive:[
    {breakpoint:991,settings:{
      slidesToShow:3,
      slidesToScroll:3,
    }},
    {breakpoint:641,settings:{
      slidesToShow:2,
      slidesToScroll:2,
    }},
    {breakpoint:481,settings:{
      slidesToShow:1,
      slidesToScroll:1,
    }},
  ],
})
})


</script>
      
    
            </body>
      </html>