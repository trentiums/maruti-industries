<!---inquiry form for the home,faq,about-us ,blog-details-->
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

                <form id="inquiry-form" class="inquiry-form" action="{{ route('save-inquiry') }}" method="post" role="form">
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
                        <div class="error-container"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-name" name="name" id="name"
                                        placeholder="Enter your name" type="text" required value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-email" name="email" id="email"
                                        placeholder="Enter your email" type="email" required value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label>Phone Number <span class="text-danger">*</span></label>
                                  <input class="form-control form-control-phone" name="mobile" id="phone"
                                    placeholder="Enter your phone number" type="text" maxlength="10" minlength="10"
                                    required value="{{ old('mobile') }}">
                                </div>
                              </div>
                              
                          {{--   <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number <span class="text-danger">*</span></label>
                                    <input class="form-control form-control-phone" name="phone" id="phone"
                                        placeholder="Enter your phone number" type="text" maxlength="10" minlength="10" required value="{{ old('mobile') }}">
                                </div>
                            </div>
                        </div> --}}

                        {{-- div class="row">
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
                        </div> --}}
                             
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
                                
                        <div class="form-group">
                            <label>Message </label>
                            <textarea class="form-control form-control-message" name="description" id="message"
                              placeholder="Enter your message" rows="5">{{ old('description') }}</textarea>
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
                        <div class="text-right"><br>
                            <button class="btn btn-primary solid blank" type="submit">Send Inquiry</button>
                        </div>
                </form>

            </div>

        </div>
    </div>
</section>
