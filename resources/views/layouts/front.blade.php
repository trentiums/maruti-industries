<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <title>{{ $data['meta_title'] }}</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ $data['meta_description'] }}">
    {{-- <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1" /> --}}
    <meta property="og:title" content="{{ $data['meta_title'] }}">
    <meta property="og:description" content="{{ $data['meta_description'] }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ route('home') }}/assets/images/maruti-industries-logo-header.png">
    <meta property="og:image:secure_url" content="{{ route('home') }}/assets/images/maruti-industries-logo-header.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Maruti Industries">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta name="description" content="{{ $data['meta_description'] }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Maruti Industries">
    <meta name="google-site-verification" content="-4N_eovriWB1kr_gOqoK1d5hoLKBhmpk-XChVzhk6FQ" />
    <!-- Favicon-->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS-->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick-theme.css') }}">
    <!----mycss--->
    <link rel="stylesheet" href="{{asset('assets/css/custome.css')}}">
    <!-- Colorbox -->
    {{-- <link rel="stylesheet" href="{{asset('assets/plugins/colorbox/colorbox.css')}}"> --}}
    <!-- Template styles-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="canonical" href="{{url()->current()}}"/>
    @yield('styles')
    <script type="application/ld+json">
  {
    "@type": "Organization",
    "@id": "{{ url('/') }}#organization",
    "name": "{{ config('app.name', 'EmeryRoll.in') }}",
    "url": "{{ url('/') }}",
    "logo": "{{asset('assets/images/maruti-industries-logo-header.png')}}",
    "description":"{{ $data['meta_description'] }}" ,
    "sameAs": [],
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "tel:{{config('settings.tel_code')}}",
      "contactType": "Customer Service",
      "areaServed": "IN"
    }
  }
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-62RDW6S0VM"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-62RDW6S0VM');
</script>
</head>
<body>
    @include('partials.front.header')
    @yield('content')
    @include('partials.front.footer')
    <!-- Javascript Files
 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- initialize jQuery Library -->
    <script src="{{ asset('assets/plugins/jQuery/jquery.min.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('assets/plugins/bootstrap/bootstrap.min.js') }}" defer></script>
    <!-- Slick Carousel -->
    <script src="{{ asset('assets/plugins/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick-animation.min.js') }}"></script>
    <!-- Color box -->
    <script src="{{ asset('assets/plugins/colorbox/jquery.colorbox.js') }}"></script>
    <!-- shuffle -->
    <script src="{{ asset('assets/plugins/shuffle/shuffle.min.js') }}" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="{{ asset('assets/plugins/google-map/map.js') }}" defer></script>

    <!-- Template custom -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!--request Quote-->
  <!--myjs---->
  <script src="{{ asset('assets/js/myjs.js') }}"></script>


    </div><!-- Body inner end -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!--validation-->
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="{{ asset('assets/js/jquery-validation.js') }}"></script>

    @yield('scripts')
</body>

</html>
