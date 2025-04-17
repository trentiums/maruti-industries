  <!-- Header start -->
  <header id="header" class="header-two">
    <div class="site-navigation">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light p-0">

              <div class="logo">
                <a class="d-block" href="{{route('home')}}">
                  <img loading="lazy" src="{{asset('assets/images/maruti-industries-logo-header.png')}}" alt="Constra" height="400px" width="200px">
                </a>
              </div><!-- logo end -->

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto align-items-center">
                
                  <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>

                  <li class="nav-item dropdown d-flex align-items-center">
                    <!-- Link to product.html -->
                    <a class="nav-link" href="{{route('product')}}">
                      Product
                    </a>
                  
                    <!-- Dropdown toggle only for the arrow -->
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-angle-down"></i>
                    </a>
                  
                    <!-- Dropdown menu -->
                    <div class="dropdown-menu" aria-labelledby="productDropdown">
                      @foreach($products as $product)
                      <a class="dropdown-item" href="{{route('product', $product->slug)}}" title="{{$product->title}}"> {{$product->title}}</a>
                     @endforeach
                    </div>
                  </li>
                  
                  
                  
                   <li class="nav-item"><a class="nav-link" href="{{route('about-us')}}">About Us</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQs</a></li>
                  <li class="nav-item"><a class="nav-link" href="{{route('contact-us')}}">Contact</a></li>
                
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="#inquiry-form" data-toggle="collapse" data-target=".navbar-collapse.show">
                      Send Inquiry
                    </a>
                  </li>
                  
                </ul>
              </div>
            </nav>
          </div>
          
        </div>
       
      </div>
      

    </div>
   
  </header>
  
