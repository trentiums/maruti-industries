<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="DC.title" content="VEDANSHICAB" />
    <meta name="geo.region" content="IN-RJ" />
    <meta name="geo.placename" content="Rajasthan" />
    <meta name="geo.position" content="24.5929892;73.7441088" />
    <meta name="ICBM" content="24.5929892, 73.7441088" />
    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/@coreui/coreui@3.2/dist/css/coreui.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" />
    @yield('styles')
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "vedanshicabs.com",
  "image": "https://www.vedanshicabs.com/images/social-packages-logo.png",
  "@id": "https://www.vedanshicabs.com/",
  "url": "https://www.vedanshicabs.com/",
  "telephone": "+91-7878543433",
  "priceRange": "INR",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1/162, Sukher Rd, near Kendriya Vidyalaya, E Class, Housing Board Colony, Pratap Nagar",
    "addressLocality": "Udaipur",
    "postalCode": "313001",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 24.5929892,
    "longitude": 73.7441088
  } ,
  "sameAs": [
    "https://www.facebook.com/vedanshicabs/",
    "https://twitter.com/vedanshicabs",
    "https://www.instagram.com/vedanshicabs/"
  ]
}
</script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-22TFGBT15V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-22TFGBT15V');
    </script>

    <!-- Global site tag (gtag.js) - Google Ads: 409087513 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-409087513"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'AW-409087513');
    </script>
</head>

<body class="header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden login-page">
    <div class="c-app flex-row align-items-center">
        <div class="container">
            @yield("content")
        </div>
    </div>
    @yield('scripts')
</body>

</html>
