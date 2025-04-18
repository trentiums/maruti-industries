@extends('layouts.front')
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

    <section id="main-container" class="main-container pb-2 ">
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
                            {{-- <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('assets/images/icon-image/service-icon1.png') }}"
                                    alt="service-icon">
                            </div> --}}
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
    </section><!-- Main container end -->

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


                    <form id="inquiry-form" action="#" method="post" role="form">
                        <div class="error-container"></div>

                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-name" id="name"
                                        name="name" required>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-email" id="email"
                                        name="email" required>
                                </div>
                            </div>


                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company">Company Name</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject <span class="text-danger">*</span></label>
                                    <select class="form-control" id="subject" name="subject" required>
                                        <option value="">-- Select Subject --</option>
                                        <option value="General Inquiry">General Inquiry</option>
                                        <option value="Request a Quote">Request a Quote</option>
                                        <option value="Request Callback">Request Callback</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="product">Product of Interest</label>
                            <select class="form-control" id="product" name="product">
                                <option value="">-- Optional --</option>
                                <option value="Flint Paper">Flint Paper</option>
                                <option value="Sandpaper">Sandpaper</option>
                                <option value="Emery Paper">Emery Paper</option>
                                <option value="Aloxide Roll">Aloxide Roll</option>
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message" rows="6" required></textarea>
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
                        <div class="call-to-action-btn">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#callbackModal">
                                Request a Callback
                            </a>
                            <a href="#inquiry-form" class="btn btn-primary">Send Inquiry</a>
                            <a href="https://wa.me/1234567890" target="_blank">
                                <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--inquiry end-->
    <!--model popu-->
    <div class="modal fade enquiry-modal" id="callbackModal" tabindex="-1" role="dialog" aria-hidden="true"
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
    </div>
    <!--end popup model-->
@endsection
