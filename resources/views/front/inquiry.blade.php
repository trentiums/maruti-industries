<!---inquiry form for the home,faq,about-us ,blog-details-->
<section id="main-container" class="main-container">
    <div class="container">

        <div class="row text-center">
            <div class="col-12">
                <h3 class="section-sub-title">Need a Quote for Your Next Bulk Order?</h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">

                <form id="inquiry-form" class="inquiry-form" action="{{ route('save-inquiry') }}" method="post"
                    role="form">
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

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>Name <span class="text-danger">*</span></label>
                                <input class="form-control" name="name" placeholder="Enter your name" type="text"
                                    required value="{{ old('name') }}">
                            </div>

                            <div class="form-group mb-3">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control" name="email" placeholder="Enter your email" type="email"
                                    required value="{{ old('email') }}">
                            </div>

                            <div class="form-group mb-3">
                                <label>Phone Number <span class="text-danger">*</span></label>
                                <input class="form-control" name="mobile" placeholder="Enter your phone number"
                                    type="text" maxlength="10" minlength="10" required value="{{ old('mobile') }}">
                            </div>

                            <div class="form-group mb-3">
                                <label>Product of Interest</label>
                                <select class="form-control" name="product_interest" required>
                                    <option value="">-- Select Product --</option>
                                    <option value="Flint Paper"
                                        {{ old('product_interest') == 'Flint Paper' ? 'selected' : '' }}>Flint Paper
                                    </option>
                                    <option value="Sandpaper Sheets"
                                        {{ old('product_interest') == 'Sandpaper Sheets' ? 'selected' : '' }}>Sandpaper
                                        Sheets</option>
                                    <option value="Emery Paper"
                                        {{ old('product_interest') == 'Emery Paper' ? 'selected' : '' }}>Emery Paper
                                    </option>
                                    <option value="Aloxide Cloth Roll"
                                        {{ old('product_interest') == 'Aloxide Cloth Roll' ? 'selected' : '' }}>Aloxide
                                        Cloth Roll</option>
                                    <option value="Emery Roll"
                                        {{ old('product_interest') == 'Emery Roll' ? 'selected' : '' }}>Emery Roll
                                    </option>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6 d-flex flex-column justify-content-between">
                            <div class="form-group mb-3">
                                <label>Message</label>
                                <textarea class="form-control" name="description" placeholder="Enter your message" rows="8">{{ old('description') }}</textarea>
                            </div>

                            <div class="form-group mb-3">
                                <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}">
                                </div>
                                <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                <input type="hidden" name="bot" value="bot">
                                <input type="hidden" name="bot_capture" value="">
                                @if ($errors->has('g-recaptcha-response'))
                                    <div class="text-danger mt-1">
                                        {{ $errors->first('g-recaptcha-response') }}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <button class="btn btn-primary px-4 py-2 fw-bold" type="submit">Send Inquiry</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
