@extends('layouts.front')
@section('styles')
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "ContactPage",
          "@id": "{{ url('/contact-us') }}#contactpage",
          "url": "{{ url('/contact-us') }}",
          "name": "Contact Us | Request a Quote for Abrasive Products",
          "description": "Get in touch with us to inquire about Flint Paper, Emery Rolls, Sandpaper, and more. Request a callback, ask for a quote, or message us on WhatsApp.",
          "keywords": [
            "abrasive supplier contact",
            "flint paper quote",
            "request callback",
            "emery paper inquiry",
            "sandpaper supplier India"
          ],
          "isPartOf": {
            "@id": "{{ url('/') }}#website"
          },
          "mainEntity": {
            "@type": "Organization",
            "@id": "{{ url('/') }}#organization"
          }
        },
        {
          "@type": "BreadcrumbList",
          "@id": "{{ url('/contact-us') }}#breadcrumb",
          "itemListElement": [
            {
              "@type": "ListItem",
              "position": 1,
              "name": "Home",
              "item": "{{ url('/') }}"
            },
            {
              "@type": "ListItem",
              "position": 2,
              "name": "Contact Us",
              "item": "{{ url('/contact-us') }}"
            }
          ]
        }
      ]
    }
    </script>
@endsection
@section('content')
    <!--breadcrum-->
    <div id="banner-area" class="banner-area" style="background-image:url('../assets/images/banner-image-contact-us.jpg')">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Contact</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="section-sub-title">Get in Touch with Us</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">

                    <form id="inquiry-form" class="inquiry-form" action="{{ route('save-inquiry') }}" method="post"
                        role="form">
                        @csrf

                        @if ($errors->count() > 0)
                            <div class="alert alert-danger alert-block">
                                <ul class="list-unstyled">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <input type="hidden" name="page_url" value="{{ url()->current() }}">

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control" name="name" placeholder="Enter your name" type="text"
                                        required value="{{ old('name') }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Email </label>
                                    <input class="form-control" name="email" placeholder="Enter your email" type="email"
                                        required value="{{ old('email') }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input class="form-control" name="mobile" placeholder="Enter your phone number"
                                        type="text" maxlength="10" minlength="10" required value="{{ old('mobile') }}">
                                </div>

                                <div class="form-group mb-3">
                                    <label>Product of Interest </label>
                                    <select class="form-control" name="product_interest" required>
                                        <option value="">-- Select Product --</option>
                                        <option value="Flint Paper"
                                            {{ old('product_interest') == 'Flint Paper' ? 'selected' : '' }}>Flint Paper
                                        </option>
                                        <option value="Sandpaper Sheets"
                                            {{ old('product_interest') == 'Sandpaper Sheets' ? 'selected' : '' }}>Sandpaper
                                            Sheets</option>
                                        <option value="Emery Paper"
                                            {{ old('product_interest') == 'Emery Paper' ? 'selected' : '' }}>Emery Paper
                                        </option>
                                        <option value="Aloxide Cloth Roll"
                                            {{ old('product_interest') == 'Aloxide Cloth Roll' ? 'selected' : '' }}>Aloxide
                                            Cloth Roll</option>
                                        <option value="Emery Roll"
                                            {{ old('product_interest') == 'Emery Roll' ? 'selected' : '' }}>Emery Roll
                                        </option>
                                    </select>
                                </div>



                            </div>


                            <div class="col-md-6 d-flex flex-column justify-content-between">
                                <div class="form-group mb-3">
                                    <label>Subject </label>
                                    <select class="form-control" id="subject" name="subject" required>
                                        <option value="">-- Select Subject --</option>
                                        <option value="General Inquiry"
                                            {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry
                                        </option>
                                        <option value="Request a Quote"
                                            {{ old('subject') == 'Request a Quote' ? 'selected' : '' }}>Request a Quote
                                        </option>
                                        <option value="Request Callback"
                                            {{ old('subject') == 'Request Callback' ? 'selected' : '' }}>Request Callback
                                        </option>
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Message</label>
                                    <textarea class="form-control" name="description" placeholder="Enter your message" rows="8">{{ old('description') }}</textarea>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}">
                                    </div>
                                    <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                    <input type="hidden" name="bot" value="bot">
                                    <input type="hidden" name="bot_capture" value="">
                                    @if ($errors->has('g-recaptcha-response'))
                                        <div class="text-danger mt-1">
                                            {{ $errors->first('g-recaptcha-response') }}
                                        </div>
                                    @endif
                                </div>



                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <button class="btn btn-primary solid blank px-4 py-2" type="submit">Send Message</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">Reaching our Office</h2>
                    <h3 class="section-sub-title">Find Our Location</h3>
                </div>
            </div>

            <div class="row">
              
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <a href="https://maps.app.goo.gl/HnCaAkovKL3rWvXd8" target="_blank" rel="noopener noreferrer">
                            <span class="ts-service-icon icon-round">
                                <i class="fas fa-map-marker-alt mr-0"></i>
                            </span>
                        </a>
                        <div class="ts-service-box-content">
                            <h4>Visit Our Office</h4>
                            <a href="https://maps.app.goo.gl/HnCaAkovKL3rWvXd8" target="_blank"
                                rel="noopener noreferrer">
                                <p>{{ config('settings.address') }}</p>
                            </a>
                        </div>
                    </div>
                </div>

         
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <a href="https://mail.google.com/mail/?view=cm&to={{ config('settings.email') }}" target="_blank"
                            rel="noopener noreferrer" title="Send Email via Gmail">
                            <span class="ts-service-icon icon-round">
                                <i class="fas fa-envelope mr-0"></i>
                            </span>
                        </a>
                        <div class="ts-service-box-content">
                            <h4>Email Us</h4>
                            <p>
                                <a href="https://mail.google.com/mail/?view=cm&to={{ config('settings.email') }}"
                                    target="_blank" rel="noopener noreferrer" class="text-break"
                                    title="Send Email via Gmail">
                                    {{ config('settings.email') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>

      
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <a href="tel:{{ config('settings.tel_code') }}" target="_blank" rel="noopener noreferrer">
                            <span class="ts-service-icon icon-round">
                                <i class="fa fa-phone-square mr-0"></i>
                            </span>
                        </a>
                        <div class="ts-service-box-content">
                            <h4>Call Us</h4>
                            <p>
                                <a href="tel:{{ config('settings.tel_code') }}" target="_blank"
                                    rel="noopener noreferrer" title="Call Us">
                                    {{ config('settings.mobile_number') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="gap-60"></div>

            <div class="mt-5 shadow-sm rounded-3 overflow-hidden">
                <iframe class="w-100" style="height: 300px; border:0;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.3321815209983!2d72.66688997477209!3d23.084932713999184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e80d0a0d40001%3A0xf528f2bb8e7f33d5!2sB%2C%20Phase%2C%20No%201%2C%20313%2F8%2C%20GIDC%20Naroda%2C%20Ahmedabad%2C%20Gujarat%20382330!5e0!3m2!1sen!2sin!4v1744113101222!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </section>
    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Have a question about grit, quantity or pricing?</h3>
                        </div>
                    </div>
                    <div class="col-md-6 text-center text-md-right mt-3 mt-md-0">
                        <div
                            class="call-to-action-btn d-flex flex-column flex-md-row justify-content-center justify-content-md-end align-items-center gap-2">
                            <a href="javascript:void(0)"
                                class="btn btn-warning fw-bold text-white text-uppercase py-2 px-4 d-flex align-items-center justify-content-center"
                                data-bs-toggle="modal" data-bs-target="#callbackModal">
                                Request Callback
                            </a>
                            <a href="#inquiry-form"
                                class="btn btn-warning fw-bold text-white text-uppercase py-2 px-4 d-flex align-items-center justify-content-center">
                                Send Inquiry
                            </a>
                            <a href="https://wa.me/{{ config('settings.wp_number') }}" target="_blank"
                                class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp"
                                    style="height: 36px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.pop-modal')
@endsection
