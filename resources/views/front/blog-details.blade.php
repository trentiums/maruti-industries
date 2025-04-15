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
                        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('blog')}}">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">EmeryPaper</li>
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
              <img loading="lazy" src="{{asset('asssets/images/news/news1.jpg')}}" class="img-fluid" alt="post-image">
            </div>
  
            <div class="post-body">
              <div class="entry-header">
                <div class="post-meta">
                  <span class="post-author">
                    <i class="far fa-user"></i><a href="#"> Admin</a>
                  </span>
                  <span class="post-cat">
                    <i class="far fa-folder-open"></i><a href="#"> News</a>
                  </span>
                  <span class="post-meta-date"><i class="far fa-calendar"></i> June 14, 2016</span>
              
                </div>
                <h2 class="entry-title">
                  We Just Completes $17.6 million Medical Clinic in Mid-Missouri
                </h2>
              </div>
  
              <div class="entry-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                  dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                  ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                  fugiat nulla pariatur.</p>
  
                <p>Kucididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                  laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                  velit esse cillum dolore eu fugiat nulla pariatur. Excepteur Lorem ipsum dolor sit amet, consectetur
                  adipisicing elit, sed do</p>
  
                <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                  reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                  cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut
                  perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. </p>
  
                <blockquote>
                  <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor.<cite>-
                      Anger Mathe</cite></p>
  
                </blockquote>
  
                <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta
                  sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                  consequuntur magni dolores eos quira tione voluptatem sequi nesciunt. Neque porro quisquam est, qui
                  dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora
                  incidunt ue magnam aliquam quaerat voluptatem.</p>
              </div>
  
           
  
            </div>
          </div>
  
         
         
          <div class="comments-form border-box mt-5">
              <h3 class="title-normal">Ask Us About [Flint Paper / Emery Roll / Sandpaper, etc.]</h3>
          
              <form role="form" id="inquiry-form">
                  <div class="row">
                     
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="name">Name</label>
                              <input class="form-control" name="name" id="name" placeholder="Your Name" type="text" required>
                          </div>
                      </div>
          
                      
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="phone">Phone</label>
                              <input class="form-control" name="phone" id="phone" placeholder="Your Phone" type="tel" required>
                          </div>
                      </div>
          
                      <!-- Email -->
                      <div class="col-md-6">
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input class="form-control" name="email" id="email" placeholder="Your Email" type="email" required>
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
                              <input class="form-control" name="subject" id="subject" placeholder="Inquiry Subject" type="text" required>
                          </div>
                      </div>
          
                      
                      <div class="col-md-12">
                          <div class="form-group">
                              <label for="message">Message</label>
                              <textarea class="form-control required-field" id="message" placeholder="Your Message" rows="5" required></textarea>
                          </div>
                      </div>
          
                  </div><
                  
                  
                  <div class="clearfix text-center">
                      <button class="btn btn-primary" type="submit" aria-label="send-inquiry">Send Inquiry</button>
                  </div>
          </div>  
          
      
        </div>
  
     
  
      </div>
  
    </div>
  </section>
@endsection