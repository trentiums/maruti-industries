@extends('layouts.front')
@section('content')
    <!--breadcrum-->
    <div id="banner-area" class="banner-area" style="background-image:url('../assets/images/banner/banner1.jpg')">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Contact</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                  
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
            <div class="row text-center">
                <div class="col-12">
                  
                    <h3 class="section-sub-title">Get in Touch with Us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">


                  {{--   <form id="inquiry-form" action="{{ route('save-inquiry') }}" method="post" role="form">
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
                                    <input type="text" class="form-control form-control-name" id="name" name="name" required value="{{ old('name') }}">
                                </div>
                            </div>
                    
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-email" id="email" name="email" required value="{{ old('email') }}">
                                </div>
                            </div>
                    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone" maxlength="10" minlength="10" required value="{{ old('mobile') }}">
                                </div>
                            </div>
                        </div>
                    
                        <div class="row">
                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject <span class="text-danger">*</span></label>
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
                                    <label for="subject">Subject <span class="text-danger">*</span></label>
                                    <select class="form-control" id="subject" name="subject" required>
                                        <option value="">-- Select Subject --</option>
                                        <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                                        <option value="Request a Quote" {{ old('subject') == 'Request a Quote' ? 'selected' : '' }}>Request a Quote</option>
                                        <option value="Request Callback" {{ old('subject') == 'Request Callback' ? 'selected' : '' }}>Request Callback</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    

                    
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message" rows="6" required>{{ old('message') }}</textarea>
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
                    </form> --}}
                    <form id="inquiry-form" action="{{ route('save-inquiry') }}" method="post" role="form">
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
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="subject">Subject <span class="text-danger">*</span></label>
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
                                        <option value="">-- Select Product --</option>
                                        <option value="Flint Paper" {{ old('product_interest') == 'Flint Paper' ? 'selected' : '' }}>Flint Paper</option>
                                        <option value="Sandpaper Sheets" {{ old('product_interest') == 'Sandpaper Sheets' ? 'selected' : '' }}>Sandpaper Sheets</option>
                                        <option value="Emery Paper" {{ old('product_interest') == 'Emery Paper' ? 'selected' : '' }}>Emery Paper</option>
                                        <option value="Aloxide Cloth Roll" {{ old('product_interest') == 'Aloxide Cloth Roll' ? 'selected' : '' }}>Aloxide Cloth Roll</option>
                                        <option value="Emery Roll" {{ old('product_interest') == 'Emery Roll' ? 'selected' : '' }}>Emery Roll</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-group">
                            <label for="description">Message</label>
                            <textarea class="form-control" name="description" id="description" rows="6" required>{{ old('description') }}</textarea>
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
                    
                        <div class="text-right mt-3">
                            <button class="btn btn-primary solid blank" type="submit">Send Message</button>
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
                        <span class="ts-service-icon icon-round">
                            <i class="fas fa-map-marker-alt mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Visit Our Office</h4>
                            <p>   {{config('settings.address')}}
                            </p>
                        </div>
                    </div>
                </div><!-- Col 1 end -->



                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-envelope mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Email Us</h4>
                            <p><a href="mailto:{{config('settings.email')}}" title="Email"> {{config('settings.email')}}</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-phone-square mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Call Us</h4>
                            <p><a href="tel:{{config('settings.tel_code')}}" title="Mobile Number">{{config('settings.mobile_number')}}</a></p>
                        </div>
                    </div>
                </div>


            </div><!-- 1st row end -->

            <div class="gap-60"></div>

            <div class="mt-5 shadow-sm rounded-3 overflow-hidden">
                <iframe class="w-100" style="height: 300px; border:0;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.3321815209983!2d72.66688997477209!3d23.084932713999184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e80d0a0d40001%3A0xf528f2bb8e7f33d5!2sB%2C%20Phase%2C%20No%201%2C%20313%2F8%2C%20GIDC%20Naroda%2C%20Ahmedabad%2C%20Gujarat%20382330!5e0!3m2!1sen!2sin!4v1744113101222!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
           
        </div><!-- Conatiner end -->
    </section>
    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Have a question about grit, quantity or pricing? Let’s talk.</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-6 text-center text-md-right mt-3 mt-md-0 gap-5">
                        <div
                            class="call-to-action-btn d-flex flex-column flex-md-row justify-content-center justify-content-md-end">
                            <a href="javascript:void(0)" class="btn btn-primary mb-2 mb-md-0 me-md-2" data-bs-toggle="modal"
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
                </div>
            </div>
        </div><!-- Container end -->
    </section>
    <!--call back form-->
 
    {{--    <div class="modal fade enquiry-modal" id="callbackModal" tabindex="-1" role="dialog" aria-hidden="true"
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
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"
                                style="max-height: 150px; overflow-y: auto;"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Request Callback</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    @include('front.pop-modal')
@endsection
