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
                                    <!--  <li class="breadcrumb-item"><a href="#">Company</a></li> -->
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <!--    <h2 class="section-title"></h2> -->
                    <h3 class="section-sub-title">Get in Touch with Us</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">


                    <form id="inquiry-form" action="#" method="post" role="form">
                        <div class="error-container"></div>

                        <div class="row">
                            <!-- Name -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control form-control-name" id="name"
                                        name="name" required>
                                </div>
                            </div>

                            <!-- Email -->
                            <!-- <div class="col-md-4">
                        <div class="form-group">
                          <label for="email">Email <span class="text-danger">*</span></label>
                          <input type="email" class="form-control form-control-email" id="email" name="email" required>
                        </div>
                      </div> -->
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control form-control-email" id="email"
                                        name="email" required>
                                </div>
                            </div>


                            <!-- Phone -->
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Company -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="company">Company Name</label>
                                    <input type="text" class="form-control" id="company" name="company">
                                </div>
                            </div>

                            <!-- Subject Dropdown -->
                            <div class="col-md-6 mt-2">
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

                        <!-- Product of Interest -->
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

                        <!-- Message -->
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control form-control-message" name="message" id="message" rows="6" required></textarea>
                        </div>

                        <!-- Submit -->
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
            <!--/ Title row end -->

            <div class="row">
                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fas fa-map-marker-alt mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Visit Our Office</h4>
                            <p> B, Phase, No 1, 313/8, GIDC Naroda, Ahmedabad, Gujarat 382330<br>
                                Working-Hours:Mon–Sat, 9:00 AM – 7:00 PM
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
                            <p><a href="mailto:marutinaroda@gmail.com">marutinaroda@gmail.com</a></p>
                        </div>
                    </div>
                </div><!-- Col 2 end -->

                <div class="col-md-4">
                    <div class="ts-service-box-bg text-center h-100">
                        <span class="ts-service-icon icon-round">
                            <i class="fa fa-phone-square mr-0"></i>
                        </span>
                        <div class="ts-service-box-content">
                            <h4>Call Us</h4>
                            <p><a href="tel:+919974348216">(+91) 9974348216</a></p>
                        </div>
                    </div>
                </div><!-- Col 3 end -->


            </div><!-- 1st row end -->

            <div class="gap-60"></div>

            <!-- <div class="google-map">
            <div  id="map" class="map" data-latitude="40.712776" data-longitude="-74.005974" data-marker="images/marker.png" data-marker-name="Constra"></div>
          </div>
            -->
            <div class="mt-5 shadow-sm rounded-3 overflow-hidden">
                <iframe class="w-100" style="height: 300px; border:0;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3670.3321815209983!2d72.66688997477209!3d23.084932713999184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e80d0a0d40001%3A0xf528f2bb8e7f33d5!2sB%2C%20Phase%2C%20No%201%2C%20313%2F8%2C%20GIDC%20Naroda%2C%20Ahmedabad%2C%20Gujarat%20382330!5e0!3m2!1sen!2sin!4v1744113101222!5m2!1sen!2sin"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
            <!-- Content row -->
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
                        <div class="call-to-action-btn">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#callbackModal">
                                Request a Callback
                            </a>
                            <a href="#inquiry-form" class="btn btn-primary">Send Inquiry</a>
                            <a href="https://wa.me/1234567890" target="_blank">
                                <img src="{{asset('assets/images/whatsapp.png')}}" alt="WhatsApp">
                            </a>

                        </div>
                    </div><!-- col end -->
                </div><!-- row end -->
            </div><!-- Action style box -->
        </div><!-- Container end -->
    </section>
    <!--call back form-->
    <div class="modal fade enquiry-modal" id="callbackModal" tabindex="-1" role="dialog" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title">Prefer a Call?</h5>
                    </div>
                    <!--  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
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
                        <!--        <div class="mb-3">
                 <label for="preferred-time" class="form-label">Preferred Time</label>
                 <select class="form-control" id="preferred-time">
                   <option value="" disabled selected>Select a preferred time</option>
                   <option value="anytime">Anytime</option>
                   <option value="morning">Morning</option>
                   <option value="afternoon">Afternoon</option>
                   <option value="evening">Evening</option>
                 </select>
               </div>  -->
                        <!--   <div class="mb-3">
                 <label for="message" class="form-label">Message</label>
                 <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
               </div> -->
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
@endsection
