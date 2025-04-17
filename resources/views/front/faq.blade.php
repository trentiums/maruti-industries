@extends('layouts.front')
@section('content')
<div id="banner-area" class="banner-area" style="background-image:url('../assets/images/banner/banner1.jpg')">
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
                    Is flint paper waterproof?
                  </button>
                </h2>
              </div>
  
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                data-parent="#construction-accordion">
                <div class="card-body">
                  No, it’s designed only for dry sanding applications.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What makes emery rolls different from sandpaper rolls?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                <div class="card-body">
                  Emery rolls are cloth-backed and more flexible. They are better for precision work and tool polishing.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                     Can I use aloxide roll on stainless steel?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                <div class="card-body">
                  Yes, it performs well on stainless steel. Choose finer grit to avoid deep scratch marks.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Can I use emery paper for wet sanding?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                <div class="card-body">
                  No, emery paper is designed for dry use. For wet polishing, consider silicon carbide abrasive paper.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Can sandpaper be used for both wood and metal?
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                data-parent="#construction-accordion">
                <div class="card-body">
                  Yes, depending on the grit and abrasive type. Use silicon carbide for metals.
                </div>
              </div>
            </div>
          </div>
          <!--/ Accordion end -->
  
          <div class="gap-40"></div>
 
        </div>
  
       
      </div>
  
    </div>
  </section><!-- Main container end -->
  
  <!---inquiry form-->
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
                  <label>Name  <span class="text-danger">*</span></label>
                  <input class="form-control form-control-name" name="name" id="name" placeholder="Enter your name"
                    type="text" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Email  <span class="text-danger">*</span></label>
                  <input class="form-control form-control-email" name="email" id="email"
                    placeholder="Enter your email" type="email" required>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label>Phone Number  <span class="text-danger">*</span></label>
                  <input class="form-control form-control-phone" name="phone" id="phone"
                    placeholder="Enter your phone number" type="tel" required>
                </div>
              </div>
            </div>
          
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Select Product  <span class="text-danger">*</span></label>
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
                  <input class="form-control" name="quantity" id="quantity" placeholder="Enter quantity" type="number" min="1" required>
                </div>
              </div>
            </div>
          
            <div class="form-group">
              <label>Message  <span class="text-danger">*</span></label>
              <textarea class="form-control form-control-message" name="message" id="message"
                placeholder="Enter your message" rows="5" required></textarea>
            </div>
          
            <div class="text-right"><br>
              <button class="btn btn-primary solid blank" type="submit">Send Inquiry</button>
            </div>
          </form>
          
        </div>
  
      </div>
    </div>
  </section>
  @endsection