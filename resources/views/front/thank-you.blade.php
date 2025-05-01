@extends('layouts.front')
@section('styles')
<style>
  .header-get-a-quote {
      display: none;
    }
    </style>
@endsection
@section('content')
 <section id="thank-you" class="thank-you-fullscreen" style="background-image: url('{{ asset('assets/images/maruti-industries-background.jpg') }}'); background-size: cover; background-position: center;">
  <div class="thank-you-container text-center">
     
      <div class="thank-you-logo">
          <img src="{{ asset('assets/images/maruti-industries-logo-header.png') }}" alt="Maruti Industries Logo" class="img-fluid" style="max-width: 200px; margin-bottom: 20px;">
      </div>

      <h2>Thank You for Your Inquiry!</h2>
      <p>
          We appreciate your interest in <strong>Maruti Industries</strong>. Our team has received your message and will get back to you shortly with the best solution for your industrial needs.
      </p>

      <div class="thank-you-links">
          <p>In the meantime, you can:</p>
          <ul>
              <li><a href="{{ route('product') }}"><i class="fas fa-box"></i>Explore Our Products</a></li>
              <li><a href="{{ route('about-us') }}"><i class="fas fa-industry"></i>Learn About Maruti Industries</a></li>
              <li><a href="{{ route('contact-us') }}"><i class="fas fa-phone-alt"></i>Contact Us Again</a></li>
          </ul>
      </div>
      <div class="thank-you-cta">
       
        <a href="tel:{{config('settings.tel_code')}}"class="btn btn-success me-2 aria" label="Phone">
            <i class="fas fa-phone"></i> Call Us
        </a>
        
        <a href="https://wa.me/9974348216" class="btn btn-success" aria-label="WhatsApp" target="_blank">
            <i class="fab fa-whatsapp"></i> WhatsApp
        </a>
    </div>
      <div class="thank-you-button">
          <a href="{{ route('home') }}" class="btn btn-warning">Back to Home</a>
      </div>

  </div>
 </section>
@endsection
