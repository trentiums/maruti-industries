<!--footersection-->
<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 footer-widget footer-about">
                    <a href="{{ route('home') }}">
                        <img class="footer-logo" src="{{ asset('assets/images/maruti-industries-logo-footer.png') }}"
                            alt="Maruti-Industries-logo" width="300px"> </a>
                    <p> {{ config('settings.address') }}</p>
                    <div class="footer-social">
                        <ul>
                            <li><a href=" https://www.facebook.com/share/1f5hMwhzvf/" aria-label="Facebook"
                                    target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                            </li>
                            <li><a href="https://www.instagram.com/maruti_industries_?igsh=MW82cXJldmRvZ2huNg=="
                                    aria-label="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>

                            <li><a href="https://wa.me/{{ config('settings.wp_number') }}" aria-label="WhatsApp"
                                    target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="https://g.co/kgs/26i1bRW" aria-label="Google" target="_blank">
                                    <i class="fab fa-google"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title">Contact Info</h3>
                    <div class="contact-buttons">
                        <div class="mb-2">
                            <a href="https://wa.me/{{ config('settings.wp_number') }}" class="btn btn-success w-100"
                                aria-label="WhatsApp" target="_blank">
                                <i class="fab fa-whatsapp"></i> WhatsApp
                            </a>
                        </div>
                        <div class="mb-2">
                            <a href="https://mail.google.com/mail/?view=cm&to={{ config('settings.email') }}"
                                class="btn btn-primary w-100" aria-label="Email" target="_blank"
                                rel="noopener noreferrer">
                                <i class="fas fa-envelope"></i> Email
                            </a>
                        </div>

                        <div>
                            <a href="tel:{{ config('settings.tel_code') }}"class="btn btn-dark w-100"
                                aria-label="Phone">
                                <i class="fas fa-phone"></i> Call Us
                            </a>
                        </div>

                    </div>
                </div>


                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title">Quick links</h3>
                    <ul class="list-arrow">
                        <li><a href="{{ route('product') }}">Products</a></li>
                        <li><a href="{{ route('about-us') }}">About Us</a></li>
                        <li><a href="{{ route('blog') }}">Blog</a></li>
                        <li><a href="{{ route('faq') }}">FAQ </a></li>
                        <li><a href="{{ route('contact-us') }}">Contact US</a></li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright py-3 bg-warning text-dark">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-6 text-center text-md-start mb-2 mb-md-0">
                    <div class="copyright-info">
                        © {{ date('Y') }} <a href="https://emeryroll.in/" class="text-dark fw-bold" target="_blank"
                            title="Maruti Industries">Maruti Industries</a>.
                        Developed By <a href="https://www.trentiums.com/" class="text-dark fw-bold" target="_blank"
                            title="Trentium Solution">Trentium Solution</a>.
                    </div>
                </div>

                <div class="col-md-6 text-center text-md-end">
                    <div class="footer-menu">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-3">
                                <a href="{{ route('privacy-policy') }}" class="text-dark">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="{{ route('terms-condition') }}" class="text-dark">Terms & Condition</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div id="back-to-top" class="position-fixed" style="bottom: 20px; right: 20px;">
                <button class="btn btn-dark shadow" title="Back to Top"
                    onclick="window.scrollTo({top: 0, behavior: 'smooth'});">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div>
        </div>
    </div>


</footer>

<!-- Footer end -->
