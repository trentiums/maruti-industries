@extends('layouts.front')
@section('styles')
    <style>
        .use-case-item {
            background-color: #ffffff;
           
            padding: 10px 15px;
            
            border-radius: 8px;
            
            margin-bottom: 10px;  /* Spacing between items */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
           
            display: flex;
          
            align-items: center;
           
        }
    </style>
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
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{route('product')}}">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$product->title}}</li>
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
                        @if($product->main_image)
                        <img class="img-fluid" src="{{ $product->main_image->getUrl() }}">
                        @else
                        <img src="{{ asset('assets/images/services/service2.jpg')}}" alt="img">
                        @endif
                     
                    </div>
                    <div class="product-description mt-3">
                        <h3 class="column-title"> {{$product->title}}</h3>
                        <p>  {!!$product->description !!}</p>
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
                            <form action="{{ route('save-inquiry') }}" method="POST" id="inquiry-form" class="inquiry-form">
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
                                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name" name="name" required value="{{ old('name') }}">
                                    </div>
                            
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                        <input type="email" class="form-control form-control-sm" id="email" name="email" required value="{{ old('email') }}">
                                    </div>
                            
                                    <div class="col-md-6">
                                        <label for="mobile" class="form-label">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="mobile" name="mobile" minlength="10" maxlength="10" required value="{{ old('mobile') }}">
                                    </div>
                            
                                    <div class="col-md-6">
                                        <label for="qty">Quantity (optional)</label>
                                        <input type="number" class="form-control" name="qty" id="qty" value="{{ old('qty') }}">
                                    </div>
                            
                                    <div class="col-md-12">
                                        <label for="description" class="form-label">Message</label>
                                        <textarea class="form-control form-control-sm" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                                    </div>
                            
                                    <div class="col-lg-12">
                                        <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}"></div>
                                        <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">
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
                               
                                <a class="gallery-popup" href="{{ $gallery->url }}"  aria-label="{{$product->title}}">
                                    <img class="img-fluid" src="{{ $gallery->url }}"  alt="{{$product->title}}">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>

                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            {{-- //<a href="projects-single.html">Capital Teltway Building</a> --}}
                                        </h3>
                                        <p class="project-cat">{{$product->title}}</p>
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


    <!--usecases-->
    <section id="common-applications" class="common-applications py-5">
        <div class="container">
            <h2 class="text-center mb-4">Common Applications</h2>
            <div class="row">
                <!-- Wood Sanding -->
                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/automation.jfif" alt="Wood Sanding" class="mb-2" width="50">
                        <h4>Wood Sanding</h4>
                    </div>
                </div>

                <!-- Metal Polishing -->
                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/automation.jfif" alt="Metal Polishing" class="mb-2" width="50">
                        <h4>Metal Polishing</h4>
                    </div>
                </div>

                <!-- Automotive Bodywork -->
                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/automation.jfif" alt="Automotive Bodywork" class="mb-2" width="50">
                        <h4>Automotive Bodywork</h4>
                    </div>
                </div>

                <!-- Stainless Steel Finishing -->
                <div class="col-md-4 mt-3">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/steel.jfif" alt="Stainless Steel Finishing" class="mb-2" width="50">
                        <h4>Stainless Steel Finishing</h4>
                    </div>
                </div>

                <!-- Paint Preparation -->
                <div class="col-md-4 mt-3">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/paintroller.jfif" alt="Paint Preparation" class="mb-2" width="50">
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
                @if ($k % 2 == 0)
                <div class="card"> 
                  <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        {{ $faq->question }}
                      </button>
                    </h2>
                  </div>
      
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#construction-accordion">
                    <div class="card-body">
                        {{ $faq->answer }}
                    </div>
                  </div>
                </div>
                @endif
                @endforeach
                {{-- <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What are the first aid requirements for sites?
                      </button>
                    </h2>
                  </div>
                  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                    <div class="card-body">
                      Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.
                      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com
                      matat.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header p-0 bg-transparent" id="headingThree">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What is an appointed person?
                      </button>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#construction-accordion">
                    <div class="card-body">
                      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                      industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                      scrambled it to make a type specimen book.
                    </div>
                  </div>
                </div> --}}
              </div>
              <!--/ Accordion end -->
      
              <div class="gap-40"></div>
     
            </div>
      
           
          </div>
      @endif
        </div>
      </section>
    <!--technical spacification-->
{{--     <section id="technical-specifications" class="technical-specifications py-5">
        <div class="container">
            <h2 class="text-center mb-4 text-dark">Technical Specifications</h2>
            <div class="table-responsive">
                <table class="table table-bordered text-center shadow">
                    <thead class="bg-warning text-dark">
                        <tr>
                            <th>Parameter</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light text-dark">
                        <tr>
                            <td>Grain Type</td>
                            <td>Silicon Carbide / Aloxide</td>
                        </tr>
                        <tr>
                            <td>Backing</td>
                            <td>C-weight Paper / Cloth Roll</td>
                        </tr>
                        <tr>
                            <td>Bond</td>
                            <td>Resin Over Resin / Glue</td>
                        </tr>
                        <tr>
                            <td>Grit Size Range</td>
                            <td>60 – 2000</td>
                        </tr>
                        <tr>
                            <td>Available Forms</td>
                            <td>Sheets, Rolls</td>
                        </tr>
                        <tr>
                            <td>Widths Available</td>
                            <td>100mm / 230mm / Custom</td>
                        </tr>
                        <tr>
                            <td>Water Resistance</td>
                            <td>Yes (for waterproof products)</td>
                        </tr>
                        <tr>
                            <td>Application Surface</td>
                            <td>Metal, Wood, Paint, Plastic</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
 --}}


    <!--related products-->
  {{--   <section id="related-products" class="related-products-section py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h3 class="text-center mb-4">You Might Also Be Interested In</h3>
            <div class="row justify-content-center">

                <!-- Product Card 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{assset('assets/images/projects/project2.jpg')}}" class="card-img-top" alt="Emery Paper">
                        <div class="card-body text-center">
                            <h5 class="card-title">Emery Paper</h5>
                            <a href="product_details.html" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{asset('assets/images/projects/project3.jpg')}}" class="card-img-top" alt="Aloxide Roll">
                        <div class="card-body text-center">
                            <h5 class="card-title">Aloxide Roll</h5>
                            <a href="product.html" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 (Optional) -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{asset('assets/images/projects/project4.jpg')}}" class="card-img-top" alt="Flint Paper">
                        <div class="card-body text-center">
                            <h5 class="card-title">Flint Paper</h5>
                            <a href="product_details.html" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section> --}}
@endsection
