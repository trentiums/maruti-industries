@extends('layouts.front')
@section('styles')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "AboutPage",
          "@id": "{{ url('/about-us') }}#aboutpage",
          "url": "{{ url('/about-us') }}",
          "name": "About Us | Leading Abrasive Products Supplier in India",
          "description": "Learn more about our experience, manufacturing standards, and commitment to quality in delivering Flint Paper, Emery Paper, Sandpaper Rolls, and more.",
          "keywords": [
            "abrasive manufacturer India",
            "about abrasive company",
            "flint paper supplier",
            "emery roll company background"
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
          "@id": "{{ url('/about-us') }}#breadcrumb",
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
              "name": "About Us",
              "item": "{{ url('/about-us') }}"
            }
          ]
        }
      ]
    }
    </script>
    
@endsection
@section('content')
    <!--breadcrum-->
    <div id="banner-area" class="banner-area" style="background-image:url('../assets/images/about-us-banner.jpg')">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading text-center">
                            <h1 class="banner-title">Who We Are</h1>
                            <p class="banner-subtitle text-white">Delivering quality abrasives for industrial precision and
                                long-lasting performance.</p>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                 
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                     </div>
                </div>
            </div>
        </div>

        <!-- Banner area end -->
        <section id="main-container" class="main-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="column-title">Who We Are</h3>
                        <p>
                            <strong>Maruti Industries</strong> is a trusted name in the field of abrasives, dedicated to
                            delivering reliable, high-performance solutions for industries across India. With a focus on
                            quality and consistency, we manufacture and supply a wide range of abrasive products including
                            Flint Paper, Sandpaper, Emery Paper, and Aloxide Rolls.
                        </p>
                        <p>
                            Built on a foundation of innovation and customer satisfaction, our solutions support furniture
                            manufacturers, fabrication units, auto body workshops, paint shops, and construction supply
                            chains. Every product we create is engineered with precision to meet the rigorous demands of
                            industrial finishing and surface preparation.
                        </p>


                    </div><!-- Col end -->

                    <div class="col-lg-6 mt-5 mt-lg-0">

                        <div class="page-slider small-bg">

                            <div class="item"
                                style="background-image:url('../assets/images/about-us-side.jpg')">
                                <div class="container">
                                    <div class="box-slider-content">
                                        <!--  <div class="box-slider-text">
                                <h2 class="box-slide-title">Leadership</h2>
                            </div>  -->
                                    </div>
                                </div>
                            </div><!-- Item 1 end -->

                        </div><!-- Page slider end-->


                    </div><!-- Col end -->
                </div><!-- Content row end -->

            </div><!-- Container end -->
        </section>
        <section id="mission-vision" class="py-5 bg-light">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="section-subtitle">Our Mission & Vision</h2>
                </div>
                <div class="row justify-content-center">

                    <!-- Mission -->
                    <div class="col-md-5 col-sm-12 mb-4">
                        <div class="p-4 shadow rounded h-100 text-center bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('assets/images/icon-mission.png') }}" alt="ourvission"
                                style="height: 50px;">
                            </div>
                            <h4 class="mb-3">Our Mission</h4>
                            <p>To provide superior abrasive products that help manufacturers, craftsmen, and industries
                                achieve precision finishing with reliability and efficiency.</p>
                        </div>
                    </div>

                    <!-- Vision -->
                    <div class="col-md-5 col-sm-12 mb-4">
                        <div class="p-4 shadow rounded h-100 text-center bg-white">
                            <div class="mb-3">
                                <img src="{{ asset('assets/images/icon-vision.png') }}" alt="ourvission"
                                style="height: 50px;">
                            </div>
                            <h4 class="mb-3">Our Vision</h4>
                            <p>To be recognized as the most trusted name in abrasives by delivering unmatched product
                                quality and customer service.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="core-strengths" class="core-strengths-area py-5">
            <div class="container">
                <div class="text-center mb-5">
                    <h1 class="section-subtitle">Our Core Strengths</h1>
                </div>
                <div class="row text-center">

                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="core-box p-4 shadow rounded bg-light h-100">
                            <div class="core-icon mb-3">
                                <img src="{{ asset('assets/images/in-house-quality -control.png') }}" alt="Quality Control"
                                    style="height: 50px;">
                            </div>
                            <h5 class="core-label">In-House Quality Control</h5>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="core-box p-4 shadow rounded bg-light h-100">
                            <div class="core-icon mb-3">
                                <img src="{{ asset('assets/images/bulk-order- capability.png') }}" alt="Bulk Order" style="height: 50px;">
                            </div>
                            <h5 class="core-label">Bulk Order Capability</h5>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="core-box p-4 shadow rounded bg-light h-100">
                            <div class="core-icon mb-3">
                                <img src="{{ asset('assets/images/wide-range-of -grit-sizes.png') }}" alt="Grit Sizes"
                                    style="height: 50px;">
                            </div>
                            <h5 class="core-label">Wide Range of Grit Sizes</h5>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="core-box p-4 shadow rounded bg-light h-100">
                            <div class="core-icon mb-3">
                                <img src="{{ asset('assets/images/timely-dispatch- delivery.png') }}" alt="Delivery"
                                    style="height: 50px;">
                            </div>
                            <h5 class="core-label">Timely Dispatch & Delivery</h5>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="core-box p-4 shadow rounded bg-light h-100">
                            <div class="core-icon mb-3">
                                <img src="{{ asset('assets/images/custom-cut-size- options.png') }}" alt="Custom Cut"
                                    style="height: 50px;">
                            </div>
                            <h5 class="core-label">Custom Cut & Size Options</h5>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="core-box p-4 shadow rounded bg-light h-100">
                            <div class="core-icon mb-3">
                                <img src="{{ asset('assets/images/trusted-by-industrial-clients.png') }} "alt="Trusted Clients"
                                    style="height: 50px;">
                            </div>
                            <h5 class="core-label">Trusted by 100+ Industrial Clients</h5>
                        </div>
                    </div>

                </div> <!-- Row end -->
            </div> <!-- Container end -->
        </section>
        <section id="facts" class="facts-area dark-bg">
            <div class="container">
                <div class="facts-wrapper">
                    <div class="row justify-content-between text-center">

                        <div class="col-lg-2 col-md-4 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('assets/images/sector-served-furniture- manufacturers.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                                <h3 class="ts-facts-title">Furniture Manufacturers</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('assets/images/sector-served-fabrication units.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                                <h3 class="ts-facts-title">Fabrication Units</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('assets/images/sector-served-paint-shops.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                                <h3 class="ts-facts-title">Paint Shops</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('assets/images/sector-served-auto-body -workshops.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                                <h3 class="ts-facts-title">Auto Body Workshops</h3>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-4 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('assets/images/sector-served-construction-supply-chains.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                                <h3 class="ts-facts-title">Construction Supply Chains</h3>
                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- container end -->
        </section>
        @include('front.inquiry')
      
        <section class="call-to-action no-padding">
            <div class="container">
                <div class="action-style-box">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-left">
                            <div class="call-to-action-text">
                                <h3 class="action-title">Request a quote for Flint Paper, Sandpaper or Emery Rolls today.
                                </h3>
                            </div>
                        </div><!-- Col end -->
                        <div class="col-md-6 text-center text-md-right mt-3 mt-md-0">
                            <div class="call-to-action-btn d-flex flex-column flex-md-row justify-content-center justify-content-md-end align-items-center gap-2">
                                <a href="javascript:void(0)" 
                                   class="btn btn-warning fw-bold text-white text-uppercase py-2 px-4 d-flex align-items-center justify-content-center"
                                   data-bs-toggle="modal" 
                                   data-bs-target="#callbackModal">
                                    Request Callback
                                </a>
                                <a href="#inquiry-form" 
                                   class="btn btn-warning fw-bold text-white text-uppercase py-2 px-4 d-flex align-items-center justify-content-center">
                                    Send Inquiry
                                </a>
                                <a href="https://wa.me/{{config('settings.wp_number')}}" target="_blank" class="d-flex align-items-center">
                                    <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp" style="height: 36px;" />
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        @include('front.pop-modal')
    
        @endsection