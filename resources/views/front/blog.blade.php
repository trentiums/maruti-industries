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
          "url": "{{asset('assets/images/maruti-industries-logo-header.png')}}" 
        }
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
    <div id="banner-area" class="banner-area" style="background-image:url('../../assets/images/blogbanner-images.jpg')"
        alt="banner_image_blog">
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
                        <!-- Recent Posts -->
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Recent Posts</h3>
                            @foreach ($latest_blogs as $key => $blog)
                                <ul class="list-unstyled">
                                    <li class="d-flex align-items-center">
                                        <div class="posts-thumb">
                                            @if ($blog->main_image && $blog->main_image->getUrl())
                                                <a href="{{ $blog->main_image->getUrl() }}"><img loading="lazy"
                                                        alt="{{ $blog->title }}"
                                                        src="{{ $blog->main_image->getUrl() }}"></a>
                                            @else
                                                <a href="{{ route('blog', $blog->slug) }}"> <img loading="lazy"
                                                        alt="img"
                                                        src="{{ asset('assets/images/news/news1.jpg') }}"></a>
                                            @endif
                                        </div>
                                        <div class="post-info">
                                            <h4 class="entry-title">
                                                <a href="{{ route('blog', $blog->slug) }}" title="{{ $blog->title }}">
                                                    {{ $blog->title }}
                                                </a>

                                            </h4>
                                        </div>
                                    </li>



                                </ul>
                            @endforeach
                        </div><!-- Recent post end -->


                        <div class="widget">
                            <h3 class="widget-title">Categories</h3>

                            <ul class="nav nav-pills flex-column">
                                {{--  @foreach ($categoriesWithCounts as $category)
                                    <li class="d-flex justify-content-between align-items-center py-2">
                                        <a href="{{ route('category.blogs', $category->slug) }}"
                                            class="text-decoration-none">
                                            <span>{{ $category->title }}</span>
                                        </a>
                                        <span class="badge bg-secondary">{{ $category->blogPosts->count() }}</span>
                                    </li>
                                @endforeach --}}
                                @include('front.dynamic-categories')
                            </ul>
                        </div>



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
                                    <input type="text" class="form-control" id="name" name="name" required
                                        value="{{ old('name') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                        value="{{ old('email') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="mobile" class="form-label">Phone <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="mobile" name="mobile" maxlength="10"
                                        minlength="10" required value="{{ old('mobile') }}">
                                </div>

                                <div class="mb-3">
                                    <label for="product_interest">Product of Interest</label>
                                    <select class="form-control" name="product_interest" id="product_interest" required>
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


                                <div class="mb-3">
                                    <label for="description" class="form-label">Message</label>
                                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                                </div>


                                <div class="mb-3">
                                    <div class="d-flex justify-content-center">
                                        <div style="width: 100%; max-width: 100%; overflow: hidden;">
                                            <div style="transform: scale(0.77); transform-origin: 0 0;">
                                                <div class="g-recaptcha"
                                                    data-sitekey="{{ config('settings.captcha_site_key') }}"></div>
                                            </div>
                                             <input type="hidden" name="hiddenRecaptcha" id="hiddenRecaptcha">
                                            <input type="hidden" name="bot" value="bot">
                                            <input type="hidden" name="bot_capture" value="">
                                        </div>
                                    </div>
                                    {{-- @if ($errors->has('g-recaptcha-response'))
                                        <div class="text-danger">
                                            {{ $errors->first('g-recaptcha-response') }}
                                        </div>
                                    @endif --}}
                                     @if ($errors->has('g-recaptcha-response'))
                                    <div class="text-danger mt-1">
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
                                <a href="{{ route('blog', $blog->slug) }}" title="{{ $blog->title }}">
                                    @if ($blog->main_image && $blog->main_image->getUrl())
                                        <img loading="lazy" src="{{ $blog->main_image->getUrl() }}" class="img-fluid"
                                            alt="{{ $blog->title }} img">
                                    @else
                                        <img src="{{ asset('assets/images/news/news2.jpg') }}"
                                            alt="{{ $blog->title }} img">
                                    @endif
                                </a>
                            </div>

                            <div class="post-body">
                                <div class="entry-header">
                                    <div class="post-meta">
                                        <span class="post-author">
                                            <i class="far fa-user"></i>Emeryroll
                                        </span>

                                        <span class="post-cat">
                                            <i class="far fa-folder-open"></i>

                                            @foreach ($blog->blog_categories as $categories)
                                                <a href="{{ route('category.blogs', ['slug' => $categories->slug]) }}">
                                                    {{ $categories->title }}
                                                </a>
                                                @if (!$loop->last)
                                                    ,
                                                @endif
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
                                    <p>{{ $blog->small_description }}</p>
                                </div>

                                <div class="post-footer">
                                    <a href="{{ route('blog', $blog->slug) }}" title="{{ $blog->title }}"
                                        class="btn btn-primary">Read More</a>
                                </div>

                            </div>
                        @endforeach
                    </div>


                    {{--    @if ($blogs->lastPage() > 1)
                        <nav class="paging" aria-label="Page navigation">
                            <ul class="pagination">

                             
                                @if ($blogs->onFirstPage())
                                    <li class="page-item disabled"><span class="page-link"><i
                                                class="fas fa-angle-double-left"></i></span></li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $blogs->previousPageUrl() }}" rel="prev"><i
                                                class="fas fa-angle-double-left"></i></a>
                                    </li>
                                @endif

                                @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                    <li class="page-item {{ $blogs->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $blogs->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                              
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
                    @endif --}}
                    @if ($blogs->lastPage() > 1)
                        <nav class="paging mt-4" aria-label="Page navigation">
                            <ul class="pagination justify-content-center">


                                @if ($blogs->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link rounded">&laquo;</span>
                                    </li>
                                @else
                                    <li class="page-item">
                                        <a class="page-link rounded"
                                            href="{{ url('blog/page/' . ($blogs->currentPage() - 1)) }}" rel="prev"
                                            aria-label="Previous">&laquo;</a>
                                    </li>
                                @endif


                                @for ($i = 1; $i <= $blogs->lastPage(); $i++)
                                    <li class="page-item {{ $blogs->currentPage() == $i ? 'active' : '' }}">
                                        <a class="page-link rounded"
                                            href="{{ url('blog/page/' . $i) }}">{{ $i }}</a>
                                    </li>
                                @endfor

                                {{-- Next Page Link --}}
                                @if ($blogs->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link rounded"
                                            href="{{ url('blog/page/' . ($blogs->currentPage() + 1)) }}" rel="next"
                                            aria-label="Next">&raquo;</a>
                                    </li>
                                @else
                                    <li class="page-item disabled">
                                        <span class="page-link rounded">&raquo;</span>
                                    </li>
                                @endif

                            </ul>
                        </nav>
                    @endif


                </div>


    </section>

    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Request a quote for Flint Paper, Sandpaper or Emery Rolls.</h3>
                        </div>
                    </div><!-- Col end -->
                    <div class="col-md-6 text-center text-md-right mt-3 mt-md-0">
                        <div
                            class="call-to-action-btn d-flex flex-column flex-md-row justify-content-center justify-content-md-end align-items-center gap-2">
                            <a href="javascript:void(0)"
                                class="btn btn-warning fw-bold text-white text-uppercase py-2 px-4 d-flex align-items-center justify-content-center"
                                data-bs-toggle="modal" data-bs-target="#callbackModal">
                                Request Callback
                            </a>
                            <a href="#inquiry-form"
                                class="btn btn-warning fw-bold text-white text-uppercase py-2 px-4 d-flex align-items-center justify-content-center">
                                Send Inquiry
                            </a>
                            <a href="https://wa.me/{{ config('settings.wp_number') }}" target="_blank"
                                class="d-flex align-items-center">
                                <img src="{{ asset('assets/images/whatsapp.png') }}" alt="WhatsApp"
                                    style="height: 36px;" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Container end -->
    </section>
    @include('front.pop-modal')
@endsection
