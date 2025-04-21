@extends('layouts.front')
@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url('../assets/images/banner/banner1.jpg')">
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



                    {{-- <div class="comments-form border-box mt-5">
                        <h3 class="title-normal">Ask Us About [Flint Paper / Emery Roll / Sandpaper, etc.]</h3>

                        <form role="form" id="inquiry-form">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input class="form-control" name="name" id="name" placeholder="Your Name"
                                            type="text" required>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input class="form-control" name="phone" id="phone" placeholder="Your Phone"
                                            type="tel" required>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input class="form-control" name="email" id="email" placeholder="Your Email"
                                            type="email" required>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="product">Product/Topic of Interest</label>
                                        <select class="form-control" id="product" name="product" required>
                                            <option value="" disabled selected>Select Product/Topic</option>
                                            <option value="Flint Paper">Flint Paper</option>
                                            <option value="Emery Roll">Emery Roll</option>
                                            <option value="Sandpaper">Sandpaper</option>
                                            <option value="Aloxide Roll">Aloxide Roll</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input class="form-control" name="subject" id="subject"
                                            placeholder="Inquiry Subject" type="text" required>
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea class="form-control required-field" id="message" placeholder="Your Message" rows="5" required></textarea>
                                    </div>
                                </div>

                            </div>
                            < <div class="clearfix text-center">
                                <button class="btn btn-primary" type="submit" aria-label="send-inquiry">Send
                                    Inquiry</button>
                    </div> --}}
                </div>


            </div>



        </div>

        </div>
    </section>
    @include('front.inquiry')
@endsection
