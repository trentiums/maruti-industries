<div class="modal fade enquiry-modal" id="callbackModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">Prefer a Call?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (session('success'))
                    <div class="alert alert-success mb-3 lh-base">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger mb-3 lh-base">
                        {{ session('error') }}
                    </div>
                @endif
                @if ($errors->count() > 0)
                    <div class="alert alert-danger alert-block">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form name="form1" class="modal-form"
                method="POST" action="{{ route('save-modal-inquiry') }}">
                    @csrf
                    <input type="hidden" name="page_url" value="{{ url()->current() }}">
                
                    <div class="mb-3">
                        <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required value="{{ old('name') }}">
                    </div>
                
                    <div class="mb-3">
                        <label for="mobile" class="form-label">Phone Number<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" minlength="10" placeholder="Enter your phone number" required value="{{ old('mobile') }}">
                    </div>
                
                    <div class="mb-3">
                        <label for="description" class="form-label">Message</label>
                        <textarea class="form-control" id="description" name="description" rows="4" placeholder="Enter your message" style="max-height: 150px; overflow-y: auto;">{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}"></div>
                        <div><input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha"></div>
                        @if ($errors->has('g-recaptcha-response'))
                        <div class="text-danger">
                            {{ $errors->first('g-recaptcha-response') }}
                        </div>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Request Callback</button>
                </form>
                
            </div>
        </div>
    </div>
</div>
