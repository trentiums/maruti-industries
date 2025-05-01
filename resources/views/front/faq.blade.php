@extends('layouts.front')
@section('styles')
<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "FAQPage",
        "@id": "{{ url('/faq') }}#faqpage",
        "url": "{{ url('/faq') }}",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What products does Maruti Industries offer?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We offer industrial abrasives including Flint Paper, Sandpaper, Emery Paper, and Aloxide Rolls in various grits and formats."
            }
          },
          {
            "@type": "Question",
            "name": "Do you provide custom grit sizes?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, we offer customized grit sizes and dimensions to match specific industrial requirements."
            }
          },
          {
            "@type": "Question",
            "name": "Can I request a quote for bulk orders?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Absolutely. You can fill out our inquiry form or contact our sales team directly to get a detailed quotation."
            }
          },
          {
            "@type": "Question",
            "name": "Can I use aloxide roll on stainless steel?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, it performs well on stainless steel. Choose finer grit to avoid deep scratch marks."
            }
          },
          {
            "@type": "Question",
            "name": "Are samples available before placing a large order?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We do provide samples for evaluation. Please reach out to our team to request specific product samples."
            }
          }
        ]
      },
      {
        "@type": "BreadcrumbList",
        "@id": "{{ url('/faq') }}#breadcrumb",
        "itemListElement": [
          {
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "{{ url('/') }}"
          },
          {
            "@type": "ListItem",
            "position": 2,
            "name": "FAQ",
            "item": "{{ url('/faq') }}"
          }
        ]
      }
    ]
  }
  </script>
  
  
@endsection
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url('../assets/images/banner-image-faq.jpg')">
    <div class="banner-text">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                <div class="banner-heading">
                  <h1 class="banner-title">Faq</h1>
                  <nav aria-label="breadcrumb">
                      <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                    
                        <li class="breadcrumb-item active" aria-current="page">Faq</li>
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
        <div class="col-lg-12">
          <h3 class="border-title border-left mar-t0">Frequently Ask Questions</h3>
  
          <div class="accordion accordion-group accordion-classic" id="construction-accordion">
            
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    What products does Maruti Industries offer?
                  </button>
                </h2>
              </div>
  
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#construction-accordion">
                <div class="card-body">
                  We offer industrial abrasives including Flint Paper, Sandpaper, Emery Paper, and Aloxide Rolls in various grits and formats.
                </div>
              </div>
            </div>
  
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Do you provide custom grit sizes?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                <div class="card-body">
                  Yes, we offer customized grit sizes and dimensions to match specific industrial requirements.
                </div>
              </div>
            </div>
  
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Can I use aloxide roll on stainless steel?
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#construction-accordion">
                <div class="card-body">
                  Yes, it performs well on stainless steel. Choose finer grit to avoid deep scratch marks.
                </div>
              </div>
            </div>
  
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Can I request a quote for bulk orders?
                  </button>
                </h2>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#construction-accordion">
                <div class="card-body">
                  Absolutely. You can fill out our inquiry form or contact our sales team directly to get a detailed quotation.
                </div>
              </div>
            </div>
  
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Are samples available before placing a large order?
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#construction-accordion">
                <div class="card-body">
                  We do provide samples for evaluation. Please reach out to our team to request specific product samples.
                </div>
              </div>
            </div>
  
          </div>
          <!--/ Accordion end -->
  
          <div class="gap-40"></div>
  
        </div>
      </div>
  
    </div>
  </section>
  @include('front.inquiry')

  <!-- Main container end -->

  <section class="call-to-action no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row">
                <div class="col-md-6 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title">Have a question about grit, quantity or pricing?</h3>
                    </div>
                </div>
             
                <div class="col-md-6 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn d-flex flex-column flex-md-row justify-content-center justify-content-md-end align-items-center gap-2">
                        <a href="javascript:void(0)" 
                           class="btn btn-warning fw-bold text-white text-uppercase py-2 px-4 d-flex align-items-center justify-content-center"
                           data-bs-toggle="modal" 
                           data-bs-target="#callbackModal">
                            Request Callback
                        </a>
                        <a href="#inquiry-form" 
                           class="btn btn-warning fw-bold text-white text-uppercase py-2 px-4 d-flex align-items-center justify-content-center">
                            Send Inquiry
                        </a>
                        <a href="https://wa.me/1234567890" target="_blank" class="d-flex align-items-center">
                            <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp" style="height: 36px;" />
                        </a>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</section>
@include('front.pop-modal')
  @endsection