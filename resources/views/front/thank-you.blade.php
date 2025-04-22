<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    .thank-you-fullscreen {
      height: 100vh;
      width: 100%;
      background-color: #f4f4f4;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      box-sizing: border-box;
      text-align: center;
    }

    .thank-you-container {
      max-width: 700px;
    }

    .thank-you-fullscreen h2 {
      color: #1a1a1a;
      font-size: 36px;
      margin-bottom: 20px;
    }

    .thank-you-fullscreen p {
      font-size: 18px;
      color: #555;
      line-height: 1.6;
    }

    .thank-you-links {
      margin-top: 30px;
      font-size: 16px;
      color: #333;
    }

    .thank-you-links p {
      font-weight: bold;
      margin-bottom: 10px;
    }

    .thank-you-links ul {
      list-style: none;
      padding: 0;
    }

    .thank-you-links li {
      margin: 8px 0;
    }

    .thank-you-links a {
      color: #007bff;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .thank-you-links a:hover {
      color: #0056b3;
    }

    .thank-you-button {
      margin-top: 40px;
    }

    .thank-you-button .btn-primary,
    .thank-you-button .btn-warning {
      padding: 12px 30px;
      font-size: 16px;
      border-radius: 5px;
      text-decoration: none;
      display: inline-block;
      transition: background-color 0.3s ease;
    }

    .thank-you-button .btn-primary {
      background-color: #007bff;
      color: #fff;
    }

    .thank-you-button .btn-primary:hover {
      background-color: #0056b3;
    }

    .thank-you-button .btn-warning {
      background-color: #ffc107;
      color: #000;
    }

    .thank-you-button .btn-warning:hover {
      background-color: #e0a800;
    }

    .thank-you-links i {
      margin-right: 8px;
    }
  </style>

 {{--  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Maruti Industries</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">

  <!-- Favicon
  ================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
  ================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">
</head> --}}

<body>

  <section id="thank-you" class="thank-you-fullscreen">
    <div class="thank-you-container">
      <h2>Thank You for Your Inquiry!</h2>
      <p>
        We appreciate your interest in <strong>Maruti Industries</strong>. Our team has received your message and will get back to you shortly with the best solution for your industrial needs.
      </p>

      <div class="thank-you-links">
        <p>In the meantime, you can:</p>
        <ul>
          <li><a href="{{route('product')}}"><i class="fas fa-box"></i>Explore Our Products</a></li>
          <li><a href="{{route('about-us')}}"><i class="fas fa-industry"></i>Learn About Maruti Industries</a></li>
          <li><a href="{{route('contact-us')}}"><i class="fas fa-phone-alt"></i>Contact Us Again</a></li>
        </ul>
      </div>

      <div class="thank-you-button">
        <a href="{{route('home')}}" class="btn btn-warning">Back to Home</a>
      </div>
    </div>
  </section>

</body>

</html>
