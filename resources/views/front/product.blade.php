@extends('layouts.front')
@section('styles')

<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebPage",
          "@id": "{{ url()->current() }}#webpage",
          "url": "{{ url()->current() }}",
          "name": "Abrasive Products | Flint, Sandpaper, Emery, Aloxide Cloth & Rolls",
          "description": "{{ $product->meta_description ?? 'Explore our full range of industrial abrasives including Flint Paper, Sandpaper, Emery Paper, Emery Roll, and Aloxide Cloth Roll. Request a quote directly from each product page.' }}",
          "keywords": [
            "abrasive products",
            "flint paper",
            "emery roll",
            "sandpaper sheet",
            "aloxide roll supplier"
          ],
          "isPartOf": { "@id": "{{ url('/') }}#website" },
          "about":    { "@id": "{{ url('/') }}#organization" }
        },
        {
          "@type": "BreadcrumbList",
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
              "name": "Product",
              "item": "{{ url()->current() }}"
            }
          ]
        },
        "product": [
        @foreach($products as $product)
        {
          "@type": "Product",
          "@id": "{{ url('product/' . $product->slug) }}#product",
          "name": "{{ $product->title }}",
          "image": "{{$product->main_image}}",
          "description": "{{ Str::limit(strip_tags($product->short_description), 150) }}",
          "url": "{{ url('product/' . $product->slug) }}"
        }
        @endforeach
        ]
        
      ]
    }
    </script>
    
    
 
    
@endsection
@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url('../assets/images/banner/banner1.jpg')">
        <div class="banner-text">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Products</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>

                                    <li class="breadcrumb-item active" aria-current="page">Products</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Banner area end -->

    {{--  <section id="main-container" class="main-container pb-2 ">
        <div class="container">
            <div class="row">
                <div class="row text-center">
                    <div class="col-12">
                        <h1 class="section-sub-title">Our Abrasive Product Range</h1>
                        <p class="section-title"> High-quality abrasive solutions for every industrial and workshop need.
                            Browse our catalog below and request a quote directly from the product detail pages.</p>
                    </div>
                </div>
                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 mb-5 mt-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                          @if ($product->main_image)

                            <img loading="lazy" class="w-100" src="{{ $product->main_image->getUrl() }}"
                                alt="{{$product->title}}">
                                @else
                                <img src="{{ asset('assets/images/services/service2.jpg') }}" alt="{{ $product->title }}">
                                @endif
                        </div>
                        <div class="d-flex">
                             <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon1.png') }}"
                                    alt="service-icon">
                            </div> 
                            <div class="ts-service-info">
                                <h2 class="service-box-title"><a href="{{route('product', $product->slug)}}" title="{{$product->title}}">{{ $product->title }}</a></h2>
                                <p> {{ $product->sort_description }}</p>
                                <a class="btn btn-primary mt-2" href="{{route('product', $product->slug)}}" title="{{$product->title}}" aria-label="service-details">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                

            </div>
        </div>
    </section> --}}<!-- Main container end -->
    <section id="main-container" class="main-container pb-2">
        <div class="container">
      
          <!-- Section Header -->
          <div class="row text-center mb-4">
            <div class="col-12">
              <h1 class="section-sub-title">Our Abrasive Product Range</h1>
              <p class="section-title">
                High-quality abrasive solutions for every industrial and workshop need.
                Browse our catalog below and request a quote directly from the product detail pages.
              </p>
            </div>
          </div>
      
          <!-- Product Grid -->
          <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-5">
              <div class="ts-service-box h-100">
                <div class="ts-service-image-wrapper mb-3">
                  @if ($product->main_image)
                    <img loading="lazy" class="w-100" src="{{ $product->main_image->getUrl() }}" alt="{{ $product->title }}">
                  @else
                    <img class="w-100" src="{{ asset('assets/images/services/service2.jpg') }}" alt="{{ $product->title }}">
                  @endif
                </div>
                <div class="d-flex">
                  {{-- Optional Icon: Uncomment if needed --}}
                  {{-- <div class="ts-service-box-img me-3">
                    <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon1.png') }}" alt="icon">
                  </div> --}}
                  <div class="ts-service-info">
                    <h2 class="service-box-title">
                      <a href="{{ route('product', $product->slug) }}" title="{{ $product->title }}">
                        {{ $product->title }}
                      </a>
                    </h2>
                    <p>{{ $product->sort_description }}</p>
                    <a class="btn btn-primary mt-2" href="{{ route('product', $product->slug) }}" title="{{ $product->title }}" aria-label="service-details">
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
      
    <!---inquiry section form-->
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">

                    <h3 class="section-sub-title">Get in Touch with Us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form id="inquiry-form" action="{{ route('save-inquiry') }}" method="POST" role="form" class="inquiry-form">
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
                        <div class="error-container"></div>
                    
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                                </div>
                            </div>
                    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                                </div>
                            </div>
                    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="mobile">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" minlength="10" required value="{{ old('mobile') }}">
                                </div>
                            </div>
                        </div>
                    
                        <!-- Subject and Product of Interest side by side -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <select class="form-control" id="subject" name="subject" required>
                                        <option value="">-- Select Subject --</option>
                                        <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                        <option value="Request a Quote" {{ old('subject') == 'Request a Quote' ? 'selected' : '' }}>Request a Quote</option>
                                        <option value="Request Callback" {{ old('subject') == 'Request Callback' ? 'selected' : '' }}>Request Callback</option>
                                    </select>
                                </div>
                            </div>
                    
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="product_interest">Product of Interest</label>
                                    <select class="form-control" name="product_interest" id="product_interest" required>
                                        <option value="" disabled {{ old('product_interest') ? '' : 'selected' }}>Select a product</option>
                                        <option value="Flint Paper" {{ old('product_interest') == 'Flint Paper' ? 'selected' : '' }}>Flint Paper</option>
                                        <option value="Sandpaper Sheets" {{ old('product_interest') == 'Sandpaper Sheets' ? 'selected' : '' }}>Sandpaper Sheets</option>
                                        <option value="Emery Paper" {{ old('product_interest') == 'Emery Paper' ? 'selected' : '' }}>Emery Paper</option>
                                        <option value="Aloxide Cloth Roll" {{ old('product_interest') == 'Aloxide Cloth Roll' ? 'selected' : '' }}>Aloxide Cloth Roll</option>
                                        <option value="Emery Roll" {{ old('product_interest') == 'Emery Roll' ? 'selected' : '' }}>Emery Roll</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <!-- Optional Quantity Field -->
                        <div class="form-group">
                            <label for="qty">Quantity (optional)</label>
                            <input type="number" class="form-control" name="qty" id="qty" value="{{ old('qty') }}">
                        </div>
                    
                        <div class="form-group">
                            <label for="description">Message</label>
                            <textarea class="form-control" name="description" id="description" rows="6" required>{{ old('description') }}</textarea>
                        </div>
                    
                        <div class="col-lg-12">
                            <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}"></div>
                            <div><input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha"></div>
                            @if ($errors->has('g-recaptcha-response'))
                                <div class="text-danger">
                                    {{ $errors->first('g-recaptcha-response') }}
                                </div>
                            @endif
                        </div>
                    
                        <div class="text-right mt-3">
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
                        </div>
                    </form>
                    
                
                </div>
            </div>
        </div>
    </section>
   
    <!-- inquiry-->
    <section class="call-to-action no-padding mt-5">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">We understand your needs on construction</h3>
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
                            <a href="https://wa.me/1234567890" target="_blank" class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp" style="height: 36px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--inquiry end-->
    <!--model popu-->
    {{-- <div class="modal fade enquiry-modal" id="callbackModal" tabindex="-1" role="dialog" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title">Prefer a Call?</h5>
                    </div>

                    <button type="button" class="custom-close" data-bs-dismiss="modal" aria-label="Close">✖</button>
                </div>
                <div class="modal-body">
                    <form name="form1" id="form1" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone"
                                placeholder="Enter your phone number" required>
                        </div>


                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Request Callback</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!--end popup model-->
    @include('front.pop-modal')
@endsection
