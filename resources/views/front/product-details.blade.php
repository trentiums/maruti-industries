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
              "name": "{{ $product->name }} | Industrial Abrasive Supplier | Request a Quote",
              "description": "High-quality {{ $product->name }} available in custom sizes & grits. Used in {{ $product->application }}. Get pricing and availability today.",
              "isPartOf": {
                "@id": "{{ url('/') }}#website"
              },
              "about": {
                "@id": "{{ url('/') }}#organization"
              },
              "keywords": [
                "buy {{ strtolower($product->name) }}",
                "industrial {{ strtolower($product->name) }}",
                "{{ strtolower($product->name) }} manufacturer India",
                "abrasive supplier",
                "{{ strtolower($product->name) }} roll"
              ]
            },
            {
                "@type": "FAQPage",
                "mainEntity": [
                  @foreach($product->faqs as $faq)
                  {
                    "@type": "Question",
                    "name": "{{ $faq->question }}",
                    "acceptedAnswer": {
                      "@type": "Answer",
                      "text": "{{ strip_tags($faq->answer) }}"
                    }
                  }@if (!$loop->last),@endif
                  @endforeach
                ]
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
                  "name": "{{ $product->name }}",
                  "item": "{{ url()->current() }}"
                }
              ]
            }
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
                                    <li class="breadcrumb-item"><a href="{{ route('product') }}">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $product->title }}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Banner area end -->
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-8">
                    <div class="product-image">
                        @if ($product->main_image)
                            <img class="img-fluid" src="{{ $product->main_image->getUrl() }}">
                        @else
                            <img src="{{ asset('assets/images/services/service2.jpg') }}" alt="img">
                        @endif

                    </div>
                    <div class="product-description mt-3">
                        <h3 class="column-title"> {{ $product->title }}</h3>
                        <p> {!! $product->description !!}</p>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4">

                    <!-- Product Information -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="card-title text-center text-warning mb-4">Product Information</h4>
                            {!! $product->features !!}
                            {{--    <table class="table table-bordered align-middle">

                                <tbody class="bg-light text-dark">
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Abrasive Type	</th>
                                        <td>Aluminum Oxide</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Backing Type</th>
                                        <td>Cloth (J-Weight, X-Weight)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Grit Range</th>
                                        <td>36 to 320</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Forms Available</th>
                                        <td>Rolls (standard or custom widths)</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Waterproof</th>
                                        <td>Light wet use supported</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Bond</th>
                                        <td>Resin over Resin</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Application </th>
                                        <td>Metal, Wood, Paint, Plastics</td>
                                    </tr>
                                </tbody>
                            </table>  --}}
                        </div>
                    </div>

                    <!-- Inquiry Form -->
                    <div class="card shadow-sm bg-light">
                        <div class="card-body p-4">
                            <h4 class="text-center text-warning fw-bold mb-4">Inquiry Form</h4>
                            <form action="{{ route('save-inquiry') }}" method="POST" id="inquiry-form"
                                class="inquiry-form">
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

                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name"
                                            name="name" required value="{{ old('name') }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control form-control-sm" id="email"
                                            name="email" required value="{{ old('email') }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Phone <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="mobile"
                                            name="mobile" minlength="10" maxlength="10" required
                                            value="{{ old('mobile') }}">
                                    </div>

                                    <div class="col-md-6">
                                        <label for="qty">Quantity</label>
                                        <input type="number" class="form-control" name="qty" id="qty"
                                            value="{{ old('qty') }}">
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Message</label>
                                        <textarea class="form-control form-control-sm" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                                    </div>

                                    {{--  <div class="col-md-12">
                                        <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}"></div>
                                        <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                        @if ($errors->has('g-recaptcha-response'))
                                            <div class="text-danger">
                                                {{ $errors->first('g-recaptcha-response') }}
                                            </div>
                                        @endif
                                    </div>  --}}
                                    <div class="mb-3">
                                        <div class="d-flex justify-content-center">
                                            <div style="width: 100%; max-width: 100%; overflow: hidden;">
                                                <div style="transform: scale(0.77); transform-origin: 0 0;">
                                                    <div class="g-recaptcha"
                                                        data-sitekey="{{ config('settings.captcha_site_key') }}"></div>
                                                </div>
                                                <input type="hidden" name="bot" value="bot">
                                                <input type="hidden" name="bot_capture" value="">
                                            </div>
                                        </div>
                                        @if ($errors->has('g-recaptcha-response'))
                                            <div class="text-danger">
                                                {{ $errors->first('g-recaptcha-response') }}
                                            </div>
                                        @endif
                                    </div>


                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary w-100 mt-2">Request a Quote</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--gallery-->
    <section id="project-area" class="project-area solid-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">

                    <h3 class="section-sub-title">My Work Gallery</h3>
                </div>
            </div>


            <div class="row">
                <div class="col-12">

                    <div class="row shuffle-wrapper">
                        <div class="col-1 shuffle-sizer"></div>
                        @foreach ($product->gallery as $gallery)
                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                                <div class="project-img-container">

                                    <a class="gallery-popup" href="{{ $gallery->url }}"
                                        aria-label="{{ $product->title }}">
                                        <img class="img-fluid" src="{{ $gallery->url }}" alt="{{ $product->title }}">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>

                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                {{-- //<a href="projects-single.html">Capital Teltway Building</a> --}}
                                            </h3>
                                            <p class="project-cat">{{ $product->title }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!--end gallery-->



    <section id="common-applications" class="common-applications py-5">
        <div class="container">
            <h2 class="text-center mb-4">Common Applications</h2>
            <div class="row">

                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="{{ asset('assets/images/wood-working.png') }}" alt="Wood Sanding" class="mb-2"
                            width="50">
                        <h4>Wood Sanding</h4>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="{{ asset('assets/images/metal-fabrication.png') }}" alt="Metal Polishing"
                            class="mb-2" width="50">
                        <h4>Metal Polishing</h4>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src={{ asset('assets/images/metal-fabrication.png') }} alt="Automotive Bodywork"
                            class="mb-2" width="50">
                        <h4>Automotive Bodywork</h4>
                    </div>
                </div>


                <div class="col-md-4 mt-3">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="{{ asset('assets/images/metal-fabrication.png') }}" alt="Stainless Steel Finishing"
                            class="mb-2" width="50">
                        <h4>Stainless Steel Finishing</h4>
                    </div>
                </div>


                <div class="col-md-4 mt-3">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="{{ asset('assets/images/metal-fabrication.png') }}" alt="Paint Preparation"
                            class="mb-2" width="50">
                        <h4>Paint Preparation</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!----faqs---->


    <section id="main-container" class="main-container">
        <div class="container">
            @if (count($product->faqs) > 0)
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="border-title border-left mar-t0">FAQ’s</h3>

                        <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                            @foreach ($product->faqs as $k => $faq)
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="heading{{ $k }}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                                data-target="#collapse{{ $k }}" aria-expanded="false"
                                                aria-controls="collapse{{ $k }}">
                                                {{ $faq->question }}
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapse{{ $k }}" class="collapse"
                                        aria-labelledby="heading{{ $k }}"
                                        data-parent="#construction-accordion">
                                        <div class="card-body">
                                            {{ $faq->answer }}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!--/ Accordion end -->

                        <div class="gap-40"></div>
                    </div>
                </div>
            @endif
        </div>
    </section>


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
                            <a href="https://wa.me/1234567890" target="_blank" class="d-flex align-items-center">
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
