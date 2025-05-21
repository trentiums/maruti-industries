@extends('layouts.front')
@section('styles')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebSite",
          "@id": "{{ url('/') }}#website",
          "url": "{{ url('/') }}",
          "name": "{{ config('app.name', 'Maruti Industries') }}",
          "description": "Leading supplier of abrasive products – Flint Paper, Sandpaper, Emery Paper, Aloxide Cloth Rolls, Emery Rolls. Request a quote or callback today.",
          "keywords": [
            "flint paper supplier",
            "abrasive rolls",
            "emery paper quote",
            "buy sandpaper in bulk",
            "aloxide roll manufacturer"
          ],
          
        },
        {
          "@type": "WebPage",
          "@id": "{{ url('/') }}#webpage",
          "url": "{{ url('/') }}",
          "name": "Industrial Abrasive Products | Flint, Sandpaper, Emery & Aloxide Rolls",
          "isPartOf": {
            "@id": "{{ url('/') }}#website"
          },
          "about": {
            "@id": "{{ url('/') }}#organization"
          },
          "description": "Leading supplier of abrasive products – Flint Paper, Sandpaper, Emery Paper, Aloxide Cloth Rolls, Emery Rolls. Request a quote or callback today."
        }
      ]
    }
    </script>    
   
        
@endsection
@section('content')
    <div class="banner-carousel banner-carousel-2 mb-0">
        <div class="banner-carousel-item" style="background-image:url('../assets/images/home-banner-image-new.jpg')">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text">
                        <h3 class="box-slide-sub-title">“Industrial Abrasive Solutions for Every Application”</h3>
                        <p class="box-slide-description">Flint Paper, Sandpaper, Emery Paper, Aloxide Rolls, and more –
                            Delivered
                            Across India.</p>
                        <a href="javascript:void(0)" class="btn btn-primary me-2 mb-2" data-bs-toggle="modal"
                            data-bs-target="#callbackModal">
                            Request Callback
                        </a>
                        <a href="#ts-features" class=" btn btn-primary mb-2 ">Browse Products </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
 


    <section id="ts-features" class="ts-features pb-2">
        <div class="container">
            <!-- Section Heading -->
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h1 class="section-sub-title">Our Core Abrasive Products</h1>
                </div>
            </div>
    
            <!-- Products Grid -->
            <div class="row g-4">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6">
                    <div class="ts-service-box h-100 d-flex flex-column">
                        
                        <!-- Product Image -->
                        <div class="ts-service-image-wrapper mb-3">
                            <a href="{{ route('product', $product->slug) }}" title="{{ $product->title }}">
                            @if($product->main_image)
                                <img loading="lazy" class="w-100" src="{{ $product->main_image->getUrl() }}" alt="{{ $product->title }}">
                            @else
                                <img class="w-100" src="{{ asset('assets/images/services/service2.jpg') }}" alt="{{ $product->title }}">
                            @endif
                            </a>
                        </div>
    
                        <!-- Inline Content -->
                        <div class="d-flex align-items-start">
                            
                            <div class="ts-service-info">
                                <h3 class="service-box-title mb-2">
                                    <a href="{{ route('product', $product->slug) }}" title="{{ $product->title }}">
                                        {{ $product->title }}
                                    </a>
                                </h3>
                                <p class="mb-3">{{ $product->sort_description }}</p>
                                <a class="btn btn-primary" href="{{ route('product', $product->slug) }}" title="{{ $product->title }}">
                                    View Details
                                </a>
                            </div>
                        </div>
    
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    
    <!-- Service end -->
    <section id="ts-service-area" class="ts-service-area pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h3 class="section-sub-title">Why work with us?</h3>
                </div>
            </div>
    
            <div class="row align-items-center py-0">
                <!-- Left Column -->
                <div class="col-lg-4 mt-4">
                    <div class="ts-service-box d-flex mb-4">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/industrial-grade-abrasive-materials.png') }}" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info ps-3">
                            <h3 class="service-box-title">Industrial-Grade Abrasive Materials</h3>
                        </div>
                    </div>
    
                    <div class="ts-service-box d-flex mb-4">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/bulk-supply-across-india.png') }}" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info ps-3">
                            <h3 class="service-box-title">Bulk Supply Across India</h3>
                        </div>
                    </div>
    
                    <div class="ts-service-box d-flex mb-4">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/custom-sizes-grit-options.png') }}" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info ps-3">
                            <h3 class="service-box-title">Custom Sizes & Grit Options</h3>
                        </div>
                    </div>
                </div>
    
                <!-- Center Image -->
                <div class="col-lg-4 text-center mt-4 mb-4">
                    <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/why-work-with-us.png') }}"
                        alt="service-avatar-image" height="100px" width="200px">
                </div>
    
                <!-- Right Column -->
                <div class="col-lg-4 mt-4">
                    <div class="ts-service-box d-flex mb-4">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/quick-turnaround-times.png') }}" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info ps-3">
                            <h3 class="service-box-title">Quick Turnaround Times</h3>
                        </div>
                    </div>
    
                    <div class="ts-service-box d-flex mb-4">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/technical-support-available.png') }}" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info ps-3">
                            <h3 class="service-box-title">Technical Support Available</h3>
                        </div>
                    </div>
    
                    <div class="ts-service-box d-flex mb-4">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/safety-management.png') }}" alt="service-icon" height="60px" width="60px">
                        </div>
                        <div class="ts-service-box-info ps-3">
                            <h3 class="service-box-title">Safety Management</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--inquiry form-->
    @include('front.inquiry')
  
    

    <section id="facts" class="facts-area dark-bg py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h3 class="section-sub-title text-white">Serving Multiple Industries</h3>
                </div>
            </div>
            <div class="facts-wrapper">
                <div class="row justify-content-center">

                    
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/automotive.png') }}"
                                alt="Automotive">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Automotive</h3>
                        </div>
                    </div>

                  
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/wood-working.png') }}"
                                alt="Woodworking">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Woodworking</h3>
                        </div>
                    </div>

               
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/metal-fabrication.png') }}"
                                alt="Metal Fabrication">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Metal Fabrication</h3>
                        </div>
                    </div>

                   
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/construction.png') }}"
                                alt="Construction">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Construction</h3>
                        </div>
                    </div>

                
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/retail-tools- hardware.png') }}"
                                alt="Retail Tools & Hardware">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Retail Tools & Hardware</h3>
                        </div>
                    </div>

                   
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/marine-industry.png') }}"
                                alt="Marine Industry">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Marine Industry</h3>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <!--blog section-->


      <section id="main-container" class="main-container pb-2">
        <div class="container">
          <div class="row text-center mb-4">
            <div class="col-12">
              <h1 class="section-sub-title">Abrasive Tips & Industry Insights</h1>
            </div>
          </div>
      
          <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
              <div class="ts-service-box w-100 d-flex flex-column">
                <div class="ts-service-image-wrapper">
                    <a href="{{ route('blog', $blog->slug) }}" title="{{ $blog->title }}">
                  @if ($blog->main_image && $blog->main_image->getUrl())
                    <img loading="lazy" class="w-100" src="{{ $blog->main_image->getUrl() }}" alt="{{ $blog->title }}">
                  @else
                    <img class="w-100" src="{{ asset('assets/images/team/team2.jpg') }}" alt="{{ $blog->title }}" height="210px" width="350px">
                  @endif
                    </a>
                </div>
                <div class="ts-service-info p-3 d-flex flex-column flex-grow-1">
                  <h2 class="service-box-title mb-2">
                    <a href="{{ route('blog', $blog->slug) }}" title="{{ $blog->title }}">
                      {{ $blog->title }}
                    </a>
                  </h2>
                  <p>{{ $blog->sort_description }}</p>
                  <div>
                    <a class="btn btn-primary mt-2" href="{{ route('blog', $blog->slug) }}" title="{{ $blog->title }}">
                      Read More
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      
      
      
    <!--blog end-->
    <section class="content  no-padding mb-5">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h3 class="column-title">What Our Clients Say</h3>
  
              <div id="testimonial-slide" class="testimonial-slide">
                <div class="item">
                  <div class="quote-item">
                    <span class="quote-text">
                        "Maruti Industries has been our go-to for sanding and polishing materials. Their emery papers are perfect for the fine finishing our premium furniture demands. The durability and grit quality are unmatched."
                    </span>
  
                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('assets/images/Testimonials-02.jpg')}}"
                        alt="testimonial" >
                      <div class="quote-item-info">
                        <h3 class="quote-author">Anita Deshmukh</h3>
                      </div>
                    </div>
                  </div>
                </div>

  
                <div class="item">
                  <div class="quote-item">
                    <span class="quote-text">
                        "We've used a variety of abrasives in our garage, but nothing matches the performance of Maruti's sandpapers. They cut cleanly and last longer, especially during bodywork and paint prep."
                    </span>
  
                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('assets/images/Testimonials-01.jpg')}}"
                        alt="testimonial">
                      <div class="quote-item-info">
                        <h3 class="quote-author"> Vikram Solanki</h3>
                      
                      </div>
                    </div>
                  </div>
                </div>
   
  
                <div class="item">
                  <div class="quote-item">
                    <span class="quote-text">
                        "Surface prep is everything in our line of work, and Maruti Industries delivers every time. Their aloxide rolls are essential in achieving a smooth, weld-ready finish on metal sheets."
                    </span>
  
                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="{{asset('assets/images/Testimonials-03.jpg')}}"
                        alt="testimonial">
                      <div class="quote-item-info">
                        <h3 class="quote-author">Suresh Nair</h3>
               
                      </div>
                    </div>
                  </div>
                </div>
           
  
              </div>
              <!--/ Testimonial carousel end-->
            </div><!-- Col end -->
  
            <div class="col-lg-6 mt-5 mt-lg-0">
  
              <h3 class="column-title">Happy Clients</h3>
  
              <div class="row all-clients">
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                    <img loading="lazy" class="img-fluid" src="{{asset('assets/images/happy-clients-1.png')}}"
                        alt="clients-logo" />
                  </figure>
                </div>
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                    <img loading="lazy" class="img-fluid" src="{{asset('assets/images/happy-clients-2.png')}}"
                        alt="clients-logo" />
                  </figure>
                </div>
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                   <img loading="lazy" class="img-fluid" src="{{asset('assets/images/happy-clients-3.png')}}"
                        alt="clients-logo" />
                  </figure>
                </div>
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                    <img loading="lazy" class="img-fluid" src="{{asset('assets/images/happy-clients-4.png')}}"
                        alt="clients-logo" />
                  </figure>
                </div>
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                    <img loading="lazy" class="img-fluid" src="{{asset('assets/images/happy-clients-5.png')}}"
                        alt="clients-logo" />
                  </figure>
                </div>
  
                <div class="col-sm-4 col-6">
                  <figure class="clients-logo">
                    <img loading="lazy" class="img-fluid" src="{{asset('assets/images/clients/client6.png')}}"
                        alt="clients-logo" />
                  </figure>
                </div>
  
              </div>
  
            </div>
          </div>
      
        </div>
     
      </section>
    <!--/ News end -->
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
    </section>
    @include('front.pop-modal')
    @endsection
