<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .nav-link {
      position: relative;
      z-index: 1;
      transition: color 0.3s ease;
      color: #000; /* default text color */
    }
  
    .nav-link:hover,
    .nav-link:focus,
    .nav-item:hover .nav-link {
      color: #ffb600 !important; /* Maruti Industries red */
    }
  
    .dropdown-menu {
      position: absolute;
      z-index: 1050;
      background-color: #fff;
      border: 1px solid #ddd;
    }
  
    .dropdown-menu a.dropdown-item:hover {
      background-color: #f8f9fa;
      color: #ffb600;
    }
  </style>
  
  <meta charset="utf-8">
  <title>{{ $data['meta_title'] }}</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="{{ $data['meta_description'] }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name=author content="Themefisher">
  <meta name=generator content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon-->
  <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- CSS-->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/plugins/bootstrap/bootstrap.min.css')}}">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
  <!-- Animation -->
 <link rel="stylesheet" href="{{asset('assets/css/style.css')}}"> 
  <!-- slick Carousel -->
  <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/slick/slick-theme.css')}}">
  <!-- Colorbox -->
  {{-- <link rel="stylesheet" href="{{asset('assets/plugins/colorbox/colorbox.css')}}"> --}}
  <!-- Template styles-->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

@yield('styles')
</head>
<body>
@include('partials.front.header')
@yield('content')
@include('partials.front.footer')
<!-- Javascript Files
 -->
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- initialize jQuery Library -->
  <script src="{{asset('assets/plugins/jQuery/jquery.min.js')}}"></script>
  <!-- Bootstrap jQuery -->
  <script src="{{asset('assets/plugins/bootstrap/bootstrap.min.js')}}" defer></script>
  <!-- Slick Carousel -->
  <script src="{{asset('assets/plugins/slick/slick.min.js')}}"></script>
  <script src="{{asset('assets/plugins/slick/slick-animation.min.js')}}"></script>
  <!-- Color box -->
  <script src="{{asset('assets/plugins/colorbox/jquery.colorbox.js')}}"></script>
  <!-- shuffle -->
  <script src="{{asset('assets/plugins/shuffle/shuffle.min.js')}}" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="{{asset('assets/plugins/google-map/map.js')}}" defer></script>

  <!-- Template custom -->
  <script src="{{asset('assets/js/script.js')}}"></script>
  <!--request Quote-->

  <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelector('a[href="#inquiry-form"]').addEventListener("click", function(e) {
            e.preventDefault();
            document.querySelector("#inquiry-form").scrollIntoView({
                behavior: "smooth"
            });
        });
    });
    </script>

  <!--browser to product-->
  <script>
    document.addEventListener("DOMContentLoaded", function () {
      document.querySelector('slider.btn').addEventListener('click', function (event) {
        event.preventDefault();
        document.querySelector('#ts-features').scrollIntoView({
          behavior: 'smooth'
        });
      });
    });
  </script>
  <!-- Bootstrap JS -->


  </div><!-- Body inner end -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
  <!--validation-->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('assets/js/jquery-validation.js') }}"></script>

  @yield('scripts')
</body>

</html>

