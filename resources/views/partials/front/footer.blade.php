<!--footersection-->
<footer id="footer" class="footer bg-overlay mt-5">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 footer-widget footer-about">
                    <a href="{{route('home')}}">
                        <img class="footer-logo" src="{{asset
                        ('assets/images/maruti-industries-logo-footer.png')}}" alt="Constra"
                            width="300px"> </a>
                    <p>  {{config('settings.address')}}</p>
                    <div class="footer-social">
                        <ul>
                            <li><a href=" https://www.facebook.com/share/1f5hMwhzvf/" aria-label="Facebook"
                                    target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                            </li>
                            <li><a href="https://www.instagram.com/maruti_industries_?igsh=MW82cXJldmRvZ2huNg=="
                                    aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>

                            <li><a href="https://wa.me/9974348216" aria-label="WhatsApp" target="_blank"><i
                                        class="fab fa-whatsapp"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Contact Info</h3>
                    <div class="contact-buttons">
                        <div class="mb-2">
                            <a href="https://wa.me/9974348216" class="btn btn-success w-100" aria-label="WhatsApp">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="mailto:{{config('settings.email')}}" class="btn btn-primary w-100" aria-label="Email">
                                <i class="fas fa-envelope"></i> Email
                            </a>
                        </div>
                        <div>
                            <a href="tel:{{config('settings.tel_code')}}"class="btn btn-dark w-100" aria-label="Phone">
                                <i class="fas fa-phone"></i> Call Us
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Quick links</h3>
                    <ul class="list-arrow">
                        <li><a href="{{route('product')}}">Products</a></li>
                        <li><a href="{{route('blog')}}">Blogs</a></li>
                        <li><a href="{{route('contact-us')}}">Contact US</a></li>
                        <li><a href="{{route('about-us')}}">About Us</a></li>
                        <li><a href="{{route('faq')}}">FAQs </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-md-6 d-flex justify-content-center justify-content-md-start align-items-center text-center">
                    <div class="copyright-info">
                        © {{date("Y")}}<a href="https://emeryroll.in/" target="_blank" title="MarutiIndustries">Maruti
                            Industries</a>. Developed By <a href="https://www.trentiums.com/" title="Trentium Solution"
                            target="_blank">Trentium Solution</a>.
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="footer-menu text-center text-md-right">
                        <ul class="list-unstyled">
                            <li><a href="{{route('privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{route('terms-condition')}}">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                <button class="btn btn-primary" title="Back to Top">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div>

        </div>
    </div>

</footer>

<!-- Footer end -->
