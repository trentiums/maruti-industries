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
                      <!--   <li class="breadcrumb-item"><a href="#">company</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Faq</li>
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
  
      <div class="row">
        <div class="col-lg-12">
          <h3 class="border-title border-left mar-t0">Construction general</h3>
  
          <div class="accordion accordion-group accordion-classic" id="construction-accordion">
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Does the law require head protection on construction sites?
                  </button>
                </h2>
              </div>
  
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                data-parent="#construction-accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                  moon officia aute, non cupidata
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    What are the first aid requirements for sites?
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#construction-accordion">
                <div class="card-body">
                  Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com
                  matat.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    What is an appointed person?
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                data-parent="#construction-accordion">
                <div class="card-body">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book.
                </div>
              </div>
            </div>
          </div>
          <!--/ Accordion end -->
  
          <div class="gap-40"></div>
  <!-- 
          <h3 class="border-title border-left">Safety</h3>
  
          <div class="accordion accordion-group accordion-classic" id="safety-accordion">
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingFour">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    Mauris rhoncus pretium porttitor cras scelerisque commodo odio ?
                  </button>
                </h2>
              </div>
  
              <div id="collapseFour" class="collapse show" aria-labelledby="headingFour"
                data-parent="#safety-accordion">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                  moon officia aute, non cupidata
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingFive">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    What are the first aid requirements for sites?
                  </button>
                </h2>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#safety-accordion">
                <div class="card-body">
                  Anemi nim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com modo consequat.
                  Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                  Excepteur sint occaecat cupid henderit in voluptate velit esse cillu oris nisi ut aliquip ex ea com
                  matat.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header p-0 bg-transparent" id="headingSix">
                <h2 class="mb-0">
                  <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse"
                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    What is an appointed person?
                  </button>
                </h2>
              </div>
              <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                data-parent="#safety-accordion">
                <div class="card-body">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                  industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book.
                </div>
              </div>
            </div>
          </div> -->
          <!--/ Accordion end -->
  
        </div><!-- Col end -->
  
        <!-- Col end -->
  
      </div><!-- Content row end -->
  
    </div><!-- Container end -->
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
          <!-- contact form works with formspree.io  -->
          <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
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
  
      </div><!-- Content row -->
    </div><!-- Conatiner end -->
  </section>
  @endsection