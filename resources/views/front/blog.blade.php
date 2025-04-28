@extends('layouts.front')
@section('styles')
<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Blog",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ url()->current() }}"
      },
      "name": "Maruti Industries Blog",
      "url": "{{ url('/blog') }}",
      "description": "Explore expert insights, product use-cases, grit selection tips, and industrial applications from Maruti Industries.",
      "publisher": {
        "@type": "Organization",
        "name": "Maruti Industries",
        "logo": {
          "@type": "ImageObject",
          "url": "{{asset('assets/images/maruti-industries-logo-header.png')}}" // Adjust based on your logo location
        }
      },
      "blogPost": [
        @foreach($blogs as $blog)
          {
            "@type": "BlogPosting",
            "headline": "{{ $blog->title }}",
            "image": "{{ $blog->main_image}}",
            "author": {
              "@type": "Organization",
              "name": "Maruti Industries"
            },
            "datePublished": "{{ $blog->created_at->toW3cString() }}",
            "dateModified": "{{ $blog->updated_at->toW3cString() }}",
            "mainEntityOfPage": {
              "@type": "WebPage",
              "@id" :"{{ route('blog', $blog->slug) }}"
            }
          }@if (!$loop->last),@endif
        @endforeach
      ]
    }
    </script>
@endsection
@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url('../../assets/images/banner/banner1.jpg')" alt="banner_image_blog">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Blog</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 order-1 order-lg-0">
                    <div class="sidebar sidebar-left">
                        <!-- Search Bar -->
                        {{--  <div class="widget">
                            <h3 class="widget-title">Search</h3>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search articles…"
                                    aria-label="Search">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                        </div> --}}<!-- Search bar end -->

                        <!-- Recent Posts -->
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Recent Posts</h3>
                            @foreach ($latest_blogs as $key => $blog)
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center">
                                        <div class="posts-thumb">
                                            @if ($blog->main_image && $blog->main_image->getUrl())
                                                <a href="{{ $blog->main_image->getUrl() }}"><img loading="lazy" alt="{{ $blog->title }}"
                                                        src="{{ $blog->main_image->getUrl() }}"></a>
                                            @else
                                                <a href="javascript:void(0)"> <img loading="lazy" alt="img"
                                                        src="{{ asset('assets/images/news/news1.jpg') }}"></a>
                                            @endif
                                        </div>
                                        <div class="post-info">
                                            <h4 class="entry-title">
                                                {{$blog->title}}
                                            </h4>
                                        </div>
                                    </li>

                                    {{--  <li class="d-flex align-items-center">
                          <div class="posts-thumb">
                              <a href="#"><img loading="lazy" alt="img" src="{{asset('assets/images/news/news1.jpg')}}"></a>
                          </div>
                          <div class="post-info">
                              <h4 class="entry-title">
                                  <a href="#">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                              </h4>
                          </div>
                      </li>
      
                      <li class="d-flex align-items-center">
                          <div class="posts-thumb">
                              <a href="#"><img loading="lazy" alt="img" src="{{asset('assets/images/news/news3.jpg')}}"></a>
                          </div>
                          <div class="post-info">
                              <h4 class="entry-title">
                                  <a href="#">Silicon Bench And Cornike Begin Construction Solar Facilities</a>
                              </h4>
                          </div>
                      </li> --}}

                                </ul>
                            @endforeach
                        </div><!-- Recent post end -->

                        <!-- Categories -->
                        {{-- <div class="widget">
                            <h3 class="widget-title">Categories</h3>

                            <ul class="arrow nav nav-tabs">
                                @foreach ($categoriesWithCounts as $category)
                                    <li>
                                        <a href="javascript:void(0)">{{ $category->title }} </a>
                                        <span>{{ $category->blogPosts->count() }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div> --}}<!-- Categories end -->
                       
                        <div class="widget">
                            <h3 class="widget-title">Categories</h3>
                        
                            <ul class="nav nav-pills flex-column">
                                @foreach ($categoriesWithCounts as $category)
                                    <li class="d-flex justify-content-between align-items-center py-2">
                                        <a href="{{ route('category.blogs',$category->slug) }}" class="text-decoration-none">
                                            <span>{{ $category->title }}</span>
                                        </a>
                                        <span class="badge bg-secondary">{{ $category->blogPosts->count() }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        
                        
                        <!-- Tags -->
                        {{--     <div class="widget">
                            <h3 class="widget-title">Tags</h3>
                            <ul class="arrow nav nav-tabs">
                                <li>EmeryPaper</li>
                                <li>Polishing<</li>
                                <li>AloxideRoll</li>
                            </ul>
                        </div> --}}<!-- Tags end -->

                        <!-- Inquiry Form -->
                        <div id="inquiry-form" class="widget p-3 border rounded">
                            <h3 class="widget-title">Inquiry Form</h3>
                          
                            <form action="{{ route('save-inquiry') }}" method="POST" class="inquiry-form">
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
                            
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                                </div>
                            
                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10" minlength="10" required value="{{ old('mobile') }}">
                                </div>
                            
                           
                                <div class="mb-3">
                                    <label for="qty">Quantity (optional)</label>
                                    <input type="number" class="form-control" name="qty" id="qty" value="{{ old('qty') }}">
                                </div>
                                
                            
                                <div class="mb-3">
                                    <label for="description" class="form-label">Message</label>
                                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                </div>
                            
                                {{-- <div class="mb-3">
                                    <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}"></div>
                                    <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                    @if ($errors->has('g-recaptcha-response'))
                                        <div class="text-danger">
                                            {{ $errors->first('g-recaptcha-response') }}
                                        </div>
                                    @endif
                                </div> --}}
                                <div class="mb-3">
                                    <div class="d-flex justify-content-center">
                                        <div style="width: 100%; max-width: 100%; overflow: hidden;">
                                            <div style="transform: scale(0.77); transform-origin: 0 0;">
                                                <div class="g-recaptcha" data-sitekey="{{ config('settings.captcha_site_key') }}"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($errors->has('g-recaptcha-response'))
                                    <div class="text-danger">
                                        {{ $errors->first('g-recaptcha-response') }}
                                    </div>
                                @endif
                                </div>
                                
                                
                            
                                <button type="submit" class="btn btn-primary w-100">Send Inquiry</button>
                            </form>
                            
                        </div>
                    </div>
                </div><!-- Sidebar Column end -->

                <div class="col-lg-8 mb-5 mb-lg-0 order-0 order-lg-1">
                    <div class="post">
                        @foreach ($blogs as $blog)
                            <div class="post-media post-image">
                                @if ($blog->main_image && $blog->main_image->getUrl())
                                    <img loading="lazy" src="{{ $blog->main_image->getUrl() }}" class="img-fluid"
                                        alt="{{ $blog->title }} img">
                                @else
                                    <img src="{{ asset('assets/images/news/news2.jpg') }}" alt="{{ $blog->title }} img">
                                @endif
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <span class="post-author">
                                            <i class="far fa-user"></i> Admin
                                        </span>

                                        <span class="post-cat">
                                            <i class="far fa-folder-open"></i>

                                            @foreach ($blog->blog_categories as $categories)
                                                {{ $categories->title }}
                                            @endforeach

                                        </span>
                                        <span class="post-meta-date"><i class="far fa-calendar"></i>
                                            {{ $blog->created_at->format('d M Y') }}</span>


                                    </div>
                                    <h1 class="entry-title">
                                        <a href="{{ route('blog', $blog->slug) }}"
                                            title="{{ $blog->title }}">"{{ $blog->title }}</a>
                                    </h1>
                                </div>

                                <div class="entry-content">
                                    <p>{{ $blog->sort_description }}</p>
                                </div>

                                <div class="post-footer">
                                    <a href="{{ route('blog', $blog->slug) }}" title="{{ $blog->title }}"
                                        class="btn btn-primary">Read More</a>
                                </div>

                            </div>
                        @endforeach
                    </div>

                    {{--  <div class="post">
            <div class="post-media post-image">
              <img loading="lazy" src="{{asset('assets/images/news/news2.jpg')}}" class="img-fluid" alt="post-image">
            </div>
            <div class="post-body">
              <div class="entry-header">
                <div class="post-meta">
                  <span class="post-author">
                    <i class="far fa-user"></i><a href="#"> Admin</a>
                  </span>
                  <span class="post-cat">
                    <i class="far fa-folder-open"></i><a href="#"> Categories</a>
                  </span>
                  <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                
                </div>
                <h1 class="entry-title">
                  <a href="blog_details.html">Thandler Airport Water Reclamation Facility Expansion Project Named</a>
                </h1>
              </div>
  
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                  fugiat nulla pariatur. Excepteur ...</p>
              </div>
  
              <div class="post-footer">
                <a href="blog_details.html" class="btn btn-primary">Read More</a>
              </div>
  
            </div>
          </div><!-- 2nd post end -->
  
          <div class="post">
            <div class="post-media post-image">
              <img loading="lazy" src="{{asset('assets/images/news/news3.jpg')}}" class="img-fluid" alt="post-image">
            </div>
  
            <div class="post-body">
              <div class="entry-header">
                <div class="post-meta">
                  <span class="post-author">
                    <i class="far fa-user"></i><a href="#"> Admin</a>
                  </span>
                  <span class="post-cat">
                    <i class="far fa-folder-open"></i><a href="#"> Categories</a>
                  </span>
                  <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
                  
                </div>
                <h1 class="entry-title">
                  <a href="blog_details.html">Silicon Bench and Cornike Begin Construction of Large-Scale Solar Facilities
                    for Trade</a>
                </h1>
              </div>
  
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                  fugiat nulla pariatur. Excepteur ...</p>
              </div>
  
              <div class="post-footer">
                <a href="blog_details.html" class="btn btn-primary">Read More</a>
              </div>
  
            </div><!-- post-body end -->
          </div
                    
                  

                </div>


            </div>><!-- 3rd post end --> --}}

                    {{-- <nav class="paging" aria-label="Page navigation example">
                        <ul class="pagination">

                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-angle-double-left"></i></a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i
                                        class="fas fa-angle-double-right"></i></a></li>
                        </ul>
                    </nav>  --}}
                    @if ($blogs->lastPage() > 1)
                        <nav class="paging" aria-label="Page navigation">
                            <ul class="pagination">

                                {{-- Previous Page Link --}}
                                @if ($blogs->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link"><i
                                                class="fas fa-angle-double-left"></i></span></li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blogs->previousPageUrl() }}" rel="prev"><i
                                                class="fas fa-angle-double-left"></i></a>
                                    </li>
                                @endif

                                {{-- Pagination Elements --}}
                                @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                    <li class="page-item {{ $blogs->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                {{-- Next Page Link --}}
                                @if ($blogs->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blogs->nextPageUrl() }}" rel="next"><i
                                                class="fas fa-angle-double-right"></i></a>
                                    </li>
                                @else
                                    <li class="page-item disabled"><span class="page-link"><i
                                                class="fas fa-angle-double-right"></i></span></li>
                                @endif

                            </ul>
                        </nav>
                    @endif


                </div><!-- Container end -->


    </section>
    <!--call back form-->

    {{--     <div class="modal fade enquiry-modal" id="callbackModal" tabindex="-1" role="dialog" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div>
                        <h5 class="modal-title">Prefer a Call?</h5>
                    </div>

                    <button type="button" class="custom-close" data-bs-dismiss="modal" aria-label="Close">✖</button>
                </div>
                <div class="modal-body">
                    <form name="form1" id="form1" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone"
                                placeholder="Enter your phone number" required>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="4" placeholder="Enter your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Request Callback</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
    <!---request quote-->
    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Request a quote for Flint Paper, Sandpaper or Emery Rolls today.</h3>
                        </div>
                    </div><!-- Col end -->
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
        </div><!-- Container end -->
    </section>
    @include('front.pop-modal')
@endsection
