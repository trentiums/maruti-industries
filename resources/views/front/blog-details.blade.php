@extends('layouts.front')
@section('styles')
<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
          {
            "@type": "BreadcrumbList",
            "itemListElement": [
              {
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "{{route('home')}}/"
              },
              {
                "@type": "ListItem",
                "position": 2,
                "name": "Blog",
                "item": "{{route('home')}}/blog"
              },
              {
                "@type": "ListItem",
                "position": 3,
                "name": "{{$blog_details->title}}",
                "item": "{{route('home')}}/blog/{{$blog_details->slug}}"
              }
            ]
          },
          {
            "@type": "BlogPosting",
            "headline": "{{$blog_details->title}}",
            "description": "{{$data['meta_description']}}",
            "image": "{{ $blog_details->main_image ? $blog_details->main_image->getUrl() : asset(route('home') . '/assets/images/news/news1.jpg') }}",
            "author": {
              "@type": "Person",
              "name": "Author Name"
            },
            "publisher": {
              "@type": "Organization",
              "name": "Maruti Industries",
              "url": "{{route('home')}}/",
              "logo": {
                "@type": "ImageObject",
                "url": "{{route('home')}}/assets/images/maruti-industries-logo-header.png"
              }
            },
            "datePublished": "{{ $blog_details->created_at->format('Y-m-d') }}",
            "dateModified": "{{ $blog_details->updated_at->format('Y-m-d') }}",
            "mainEntityOfPage": {
              "@type": "WebPage",
              "@id": "{{route('home')}}/blog/{{$blog_details->slug}}"
            }
          }
        ]
      }

</script>
@endsection

@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url('../assets/images/blog-detail-banner-image.jpg')">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Blog</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="{{ route('blog') }}">Blog</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"> {{ $blog_details->title }}</li>
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

                <div class="col-lg-12 mb-5 mb-lg-0">

                    <div class="post-content post-single">
                        <div class="post-media post-image">
                            @if ($blog_details->main_image)
                                <img loading="lazy" src="{{ $blog_details->main_image->getUrl() }}" class="img-fluid"
                                    alt="{{ $blog_details->title }} img">
                            @else
                                <img src="{{ asset('assets/images/news/news2.jpg') }}" alt="{{ $blog_details->title }} img">
                            @endif
                        </div>
                        <div class="post-body">
                            <div class="entry-header">
                                <div class="post-meta">
                                    <span class="post-author">
                                        <i class="far fa-user"></i> Emeryroll
                                    </span>
                                    <span class="post-cat">
                                        <i class="far fa-folder-open"></i>
                                        @foreach ($blog_details->blog_categories as $categories)
                                            {{ $categories->title }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach

                                    </span>
                                    <span class="post-meta-date"><i class="far fa-calendar"></i>
                                        {{ $blog_details->created_at->format('d M Y') }}</span>

                                </div>
                                <h3>{{ $blog_details->title }}</h3>
                            </div>

                            <div class="entry-content">
                                <p>
                                    {!! $blog_details->long_description !!}
                                </p>
                            </div>
                        </div>
                    </div>



                
                </div>


            </div>



        </div>

        </div>
    </section>
    @include('front.inquiry')
    <section class="call-to-action no-padding">
        <div class="container">
            <div class="action-style-box">
                <div class="row">
                    <div class="col-md-6 text-center text-md-left">
                        <div class="call-to-action-text">
                            <h3 class="action-title">Have a question about grit, quantity or pricing?</h3>
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
                            <a href="https://wa.me/{{config('settings.wp_number')}}" target="_blank" class="d-flex align-items-center">
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
