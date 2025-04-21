  <!-- Header start -->
  <style>
  /* Make dropdown full width below nav item on mobile */
  @media (min-width: 992px) {
  .dropdown-menu {
    display: none;
    opacity: 0;
    transition: all 0.3s ease;
  }
  .nav-item.dropdown:hover .dropdown-menu {
    display: block;
    opacity: 1;
    margin-top: 0;
  }
}
    </style>
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
              </div>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div id="navbar-collapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto align-items-center">
                
                  <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>

             {{--  <li class="nav-item dropdown d-flex align-items-center">
                 
                    <a class="nav-link" href="{{route('product')}}">
                      Product
                    </a>
                  
                   
                    <a class="nav-link dropdown-toggle  ml-2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fa fa-angle-down"></i>
                    </a>
                  
                  
                    <div class="dropdown-menu" aria-labelledby="productDropdown">
                      @foreach($products as $product)
                      <a class="dropdown-item" href="{{route('product', $product->slug)}}" title="{{$product->title}}"> {{$product->title}}</a>
                     @endforeach
                    </div>
                  </li> --}} 
                  
                  {{--  <li class="nav-item dropdown btn-group">
    
                    <a class="nav-link" href="{{ route('product') }}">
                        Product
                    </a>
                
                    <a class="nav-link dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-angle-down"></i>
                    </a>
                
                    <div class="dropdown-menu">
                        @foreach($products as $product)
                            <a class="dropdown-item" href="{{ route('product', $product->slug) }}" title="{{ $product->title }}">
                                {{ $product->title }}
                            </a>
                        @endforeach
                    </div>
                
                </li>   --}}
                <li class="nav-item dropdown d-none d-sm-block">
                  <a class="nav-link dropdown-toggle" href="{{route('product')}}">
                    Product <i class="fa fa-angle-down"></i>
                  </a>
                  <div class="dropdown-menu">
                    @foreach($products as $product)
                    <a class="dropdown-item" href="{{ route('product', $product->slug) }}"  title="{{ $product->title }}"> {{ $product->title }}</a>
                 {{--    <a class="dropdown-item" href="product_details.html">Sandpaper Sheets</a>
                    <a class="dropdown-item" href="product_details.html">Emery Paper</a>
                    <a class="dropdown-item" href="product_details.html">Aloxide Cloth Roll</a>
                    <a class="dropdown-item" href="product_details.html">Emery Roll</a> --}}
                    @endforeach
                  </div>
                </li>
                <li class="nav-item dropdown d-block d-sm-none">
                    <a class="dropdown-toggle">
                      Product <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu">
                      @foreach($products as $product)
                      <a class="dropdown-item" href="{{ route('product', $product->slug) }}"  title="{{ $product->title }}"> {{ $product->title }}</a>
                     {{--  <a class="dropdown-item" href="product_details.html">Sandpaper Sheets</a>
                      <a class="dropdown-item" href="product_details.html">Emery Paper</a>
                      <a class="dropdown-item" href="product_details.html">Aloxide Cloth Roll</a>
                      <a class="dropdown-item" href="product_details.html">Emery Roll</a> --}}
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
  
