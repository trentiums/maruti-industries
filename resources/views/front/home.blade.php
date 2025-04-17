@extends('layouts.front')
@section('content')
    <div class="banner-carousel banner-carousel-2 mb-0">
        <div class="banner-carousel-item" style="background-image:url('../assets/images/slider-main/bg4.jpg')">
            <div class="container">
                <div class="box-slider-content">
                    <div class="box-slider-text">
                        <h3 class="box-slide-sub-title">“Industrial Abrasive Solutions for Every Application”</h3>
                        <p class="box-slide-description">Flint Paper, Sandpaper, Emery Paper, Aloxide Rolls, and more –
                            Delivered
                            Across India.</p>
                        <a href="#" class="btn btn-primary me-2 mb-2" data-bs-toggle="modal"
                            data-bs-target="#callbackModal">
                            Request Callback
                        </a>
                        <a href="#ts-features" class=" btn btn-primary mb-2 ">Browse Products </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--call back form-->
    <div class="modal fade enquiry-modal" id="callbackModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Prefer a Call?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"
                                style="max-height: 150px; overflow-y: auto;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Request Callback</button>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <!--call back end-->

    <section id="ts-features" class="ts-features pb-2">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h1 class="section-sub-title">Our Core Abrasive Products</h1>
                </div>
            </div>
            <div class="row">
                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            @if($product->main_image)
                       <img loading="lazy" class="w-100" src="{{ $product->main_image->getUrl() }}" alt="{{ $product->title }}">
                       @else
                        <img src="{{asset('assets/images/services/service2.jpg')}}" alt="{{ $product->title }}">
                        @endif   
                    </div>
                        <div class="d-flex">
                           {{--  <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon1.png') }}"
                                    alt="service-icon" />
                            </div> --}}
                            <div class="ts-service-info">
                                <h3 class="service-box-title"><a href="{{route('product', $product->slug)}}"
                                    title="{{$product->title}}"> {{ $product->title }} </a></h3>
                                   <p>
                                    {{$product->sort_description}}
                                   </p>
                                <a class="btn btn-primary mt-2" href="{{route('product', $product->slug)}}" title="{{$product->title}}">
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



    <section id="ts-service-area" class="ts-service-area pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">

                    <h3 class="section-sub-title">why work with us?</h3>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon1.png') }}"
                                alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#"> Industrial-Grade Abrasive Materials</a></h3>

                        </div>
                    </div><!-- Service 1 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon2.png') }}"
                                alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Bulk Supply Across India</a></h3>

                        </div>
                    </div><!-- Service 2 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon3.png') }}"
                                alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Custom Sizes & Grit Options</a></h3>

                        </div>
                    </div>

                </div>

                <div class="col-lg-4 text-center">
                    <img loading="lazy" class="img-fluid" src="{{ asset('assets/images/services/service-center.jpg') }}"
                        alt="service-avater-image" height="100px" width="200px">
                </div>

                <div class="col-lg-4 mt-5">
                    <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon4.png') }}"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Quick Turnaround Times</a></h3>

                            </div>
                        </div><!-- Service 4 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy"
                                    src="{{ asset('assets/images/icon-image/service-icon5.png') }}"alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Technical Support Available</a></h3>

                            </div>
                        </div><!-- Service 5 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon6.png') }}"
                                    alt="service-icon")">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Safety Management</a></h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- Service end -->
    <!--inquiry form-->

    <!--end inquiry-->
    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row text-center">
                <div class="col-12">
                    <h3 class="section-sub-title">Need a Quote for Your Next Bulk Order?</h3>
                </div>
            </div>
            <!--/ Title row end -->
            <div class="row">
                <div class="col-md-12">

                    <form id="inquiry-form" action="#" method="post" role="form">
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-name" name="name" id="name"
                                        placeholder="Enter your name" type="text" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-email" name="email" id="email"
                                        placeholder="Enter your email" type="email" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-phone" name="phone" id="phone"
                                        placeholder="Enter your phone number" type="tel" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Select Product <span class="text-danger">*</span></label>
                                    <select class="form-control" name="product" id="product" required>
                                        <option value="" disabled selected>Select a product</option>
                                        <option value="Flint Paper">Flint Paper</option>
                                        <option value="Sandpaper Sheets">Sandpaper Sheets</option>
                                        <option value="Emery Paper">Emery Paper</option>
                                        <option value="Aloxide Cloth Roll">Aloxide Cloth Roll</option>
                                        <option value="Emery Roll">Emery Roll</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Product Quantity</label>
                                    <input class="form-control" name="quantity" id="quantity"
                                        placeholder="Enter quantity" type="number" min="1" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Message <span class="text-danger">*</span></label>
                            <textarea class="form-control form-control-message" name="message" id="message" placeholder="Enter your message"
                                rows="5" required></textarea>
                        </div>

                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Inquiry</button>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>

    <section id="facts" class="facts-area dark-bg py-5">
        <div class="container">
            <div class="row text-center mb-4">
                <div class="col-12">
                    <h3 class="section-sub-title text-white">Serving Multiple Industries</h3>
                </div>
            </div>
            <div class="facts-wrapper">
                <div class="row justify-content-center">

                    <!-- Item 1 -->
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/fact1.png') }}"
                                alt="Automotive">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Automotive</h3>
                        </div>
                    </div>

                    <!-- Item 2 -->
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/fact2.png') }}"
                                alt="Woodworking">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Woodworking</h3>
                        </div>
                    </div>

                    <!-- Item 3 -->
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/fact3.png') }}"
                                alt="Metal Fabrication">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Metal Fabrication</h3>
                        </div>
                    </div>

                    <!-- Item 4 -->
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/fact4.png') }}"
                                alt="Construction">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Construction</h3>
                        </div>
                    </div>

                    <!-- Item 5 (NEW) -->
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/fact4.png') }}"
                                alt="Retail Tools & Hardware">
                        </div>
                        <div class="ts-facts-content text-center">
                            <h3 class="ts-facts-title text-white">Retail Tools & Hardware</h3>
                        </div>
                    </div>

                    <!-- Item 6 (Optional Bonus Example) -->
                    <div class="col-lg-2 col-md-4 col-sm-6 ts-facts mb-4">
                        <div class="ts-facts-img mb-2">
                            <img loading="lazy" src="{{ asset('assets/images/icon-image/fact4.png') }}"
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

    <section id="main-container" class="main-container pb-2 ">
        <div class="container">
            <div class="row">
                
                <div class="row text-center">
                    <div class="col-12">
                        <h1 class="section-sub-title">Abrasive Tips & Industry Insights</h1>
                    </div>
                </div>
                @foreach ($blogs as $blog)
                <div class="col-lg-4 col-md-6 mb-5 mt-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            @if ($blog->main_image && $blog->main_image->getUrl())
                            <img loading="lazy" class="w-100" src="{{ $blog->main_image->getUrl() }}"
                                alt="{{ $blog->title }} img">
                                @else
                                <img src="{{asset('assets/images/team/team2.jpg')}}" alt="{{ $blog->title }} img">
                                @endif
                        </div>
                        <div class="d-flex">

                            <div class="ts-service-info">
                                <h2 class="service-box-title"><a href="{{route('blog',$blog->slug)}}" title="{{$blog->title}}">{{$blog->title}}</a></h2>
                                <p>{{ $blog->sort_description }}</p>
                                <a class="btn btn-primary mt-2" href="{{route('blog',$blog->slug)}}" title="{{$blog->title}}">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div><!-- Service1 end -->
                </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6 mb-5 mt-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{ asset('assets/images/team/team2') }}.jpg"
                                alt="service-image">
                        </div>
                        <div class="d-flex">

                            <div class="ts-service-info">
                                <h2 class="service-box-title"><a href="blog.html">Flint Paper</a></h2>
                                <p>High-adhesion</p>
                                <a class="btn btn-primary mt-2" href="blog.html" aria-label="service-details">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-5 mt-5">
                    <div class="ts-service-box">
                        <div class="ts-service-image-wrapper">
                            <img loading="lazy" class="w-100" src="{{ asset('assets/images/team/team4') }}.jpg"
                                alt="service-image">
                        </div>
                        <div class="d-flex">

                            <div class="ts-service-info">
                                <h2 class="service-box-title"><a href="blog.html">Flint Paper</a></h2>
                                <p>High-adhesion</p>
                                <a class="btn btn-primary mt-2" href="blog.html" aria-label="service-details">
                                    Read More
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div><!-- Conatiner end -->
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
                                    Question ran over her cheek When she reached the first hills of the Italic Mountains,
                                    she had a last
                                    view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                    Village and the
                                    subline of her own road.
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb"
                                        src="{{ asset('assets/images/clients/testimonial1.png') }}" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Gabriel Denis</h3>
                                        <span class="quote-subtext">Chairman, OKT</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 1 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                    done idunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion
                                    ullamco laboris
                                    nisi aliquip consequat.
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb"
                                        src="{{ asset('assets/images/clients/testimonial2.png') }}" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Weldon Cash</h3>
                                        <span class="quote-subtext">CFO, First Choice</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 2 end -->

                        <div class="item">
                            <div class="quote-item">
                                <span class="quote-text">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                    done idunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion
                                    ullamco laboris
                                    nisi ut commodo consequat.
                                </span>

                                <div class="quote-item-footer">
                                    <img loading="lazy" class="testimonial-thumb"
                                        src="{{ asset('assets/images/clients/testimonial3.png') }}" alt="testimonial">
                                    <div class="quote-item-info">
                                        <h3 class="quote-author">Minter Puchan</h3>
                                        <span class="quote-subtext">Director, AKT</span>
                                    </div>
                                </div>
                            </div><!-- Quote item end -->
                        </div>
                        <!--/ Item 3 end -->

                    </div>
                    <!--/ Testimonial carousel end-->
                </div><!-- Col end -->

                <div class="col-lg-6 mt-5 mt-lg-0">

                    <h3 class="column-title">Happy Clients</h3>

                    <div class="row all-clients">
                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid"
                                        src="{{ asset('assets/images/clients/client1.png') }}" alt="clients-logo" /></a>
                            </figure>
                        </div><!-- Client 1 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid"
                                        src="{{ asset('assets/images/clients/client2.png') }}" alt="clients-logo" /></a>
                            </figure>
                        </div><!-- Client 2 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid"
                                        src="{{ asset('assets/images/clients/client3.png') }}" alt="clients-logo" /></a>
                            </figure>
                        </div><!-- Client 3 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid"
                                        src="{{ asset('assets/images/clients/client4.png') }}" alt="clients-logo" /></a>
                            </figure>
                        </div><!-- Client 4 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid"
                                        src="{{ asset('assets/images/clients/client5.png') }}" alt="clients-logo" /></a>
                            </figure>
                        </div><!-- Client 5 end -->

                        <div class="col-sm-4 col-6">
                            <figure class="clients-logo">
                                <a href="#!"><img loading="lazy" class="img-fluid"
                                        src="{{ asset('assets/images/clients/client6.png') }}" alt="clients-logo" /></a>
                            </figure>
                        </div><!-- Client 6 end -->

                    </div><!-- Clients row end -->

                </div><!-- Col end -->

            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Content end -->
    <!--/ News end -->
    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Have a question about grit, quantity, or pricing? Let’s talk.</h3>
                        </div>
                    </div><!-- Col end -->
                    <!--
          
                <div class="call-to-action-btn">
                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#callbackModal">
                        Request Callback
                      </a>
                      <a href="#inquiry-form" class="btn btn-primary">Send Inquiry</a>
                      <a href="https://wa.me/1234567890" target="_blank">
                        <img src="images/whatsapp.png" alt="WhatsApp" >
                      </a>
                      
                </div>
            </div> --><!-- col end -->
                    <div class="col-md-6 text-center text-md-right mt-3 mt-md-0 gap-5">
                        <div
                            class="call-to-action-btn d-flex flex-column flex-md-row justify-content-center justify-content-md-end">
                            <a href="#" class="btn btn-primary mb-2 mb-md-0 me-md-2" data-bs-toggle="modal"
                                data-bs-target="#callbackModal">
                                Request Callback
                            </a>
                            <a href="#inquiry-form" class="btn btn-primary mb-2 mb-md-0 me-md-2">
                                Send Inquiry
                            </a>
                            <a href="https://wa.me/1234567890" target="_blank">
                                <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp"
                                    class="mt-2 mt-md-0" />
                            </a>
                        </div>
                    </div>

                </div><!-- row end -->
            </div><!-- Action style box -->
        </div><!-- Container end -->
    </section>
@endsection
