@extends('layouts.front')
@section('styles')
    <style>
        .use-case-item {
            background-color: #ffffff;
            /* White background */
            padding: 10px 15px;
            /* Padding for spacing */
            border-radius: 8px;
            /* Rounded corners */
            margin-bottom: 10px;
            /* Spacing between items */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            /* Soft shadow */
            display: flex;
            /* Align icon with text */
            align-items: center;
            /* Center icon vertically */
        }
    </style>
@endsection
@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url('../assets/images/banner/banner1.jpg')">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Products</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="product.html">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">EmeryRoll</li>
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
                <!-- Left Side: Product Image + Description -->
                <div class="col-xl-8 col-lg-8">
                    <div class="product-image">
                        <img class="img-fluid" src="{{assset('assets/images/projects/project1.jpg')}}')}}" alt="project-image" />
                    </div>
                    <div class="product-description mt-3">
                        <h3 class="column-title">Product Overview</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus
                            sollicitudin pellentesque et non erat.</p>
                        <p>Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut.</p>
                    </div>
                </div>

                <!-- Right Side: Product Info Table + Inquiry Form -->
                <div class="col-xl-4 col-lg-4">

                    <!-- Product Information -->
                    <div class="card shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="card-title text-center text-warning mb-4">Product Information</h4>
                            <table class="table table-bordered align-middle">

                                <tbody class="bg-light text-dark">
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Available Forms</th>
                                        <td>Roll / Sheet</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Available Sizes</th>
                                        <td>9" x 11", 230mm x 50m</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Grit Range</th>
                                        <td>60 to 1200</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Material Type</th>
                                        <td>Aluminum Oxide / Silicon Carbide</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Backing</th>
                                        <td>Paper / Cloth</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Bond</th>
                                        <td>Resin / Glue</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" class="bg-warning text-dark">Application</th>
                                        <td>Wood | Metal | Plastic | Paint Removal</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Inquiry Form -->
                    <div class="card shadow-sm bg-light">
                        <div class="card-body p-4">
                            <h4 class="text-center text-warning fw-bold mb-4">Inquiry Form</h4>
                            <form action="submit_form.php" method="POST" id="inquiry-form">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="name"
                                            name="name" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email <span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control form-control-sm" id="email"
                                            name="email" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone <span
                                                class="text-danger">*</span></label>
                                        <input type="tel" class="form-control form-control-sm" id="phone"
                                            name="phone" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="quantity" class="form-label">Quantity Required <span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control form-control-sm" id="quantity"
                                            name="quantity" required>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="message" class="form-label">Message <span
                                                class="text-danger">*</span></label>
                                        <textarea class="form-control form-control-sm" id="message" name="message" rows="4" required></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary w-100 mt-2">Request a Quote</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--gallery-->
    <section id="project-area" class="project-area solid-bg">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <!--  <h2 class="section-title">Work of Excellence</h2> -->
                    <h3 class="section-sub-title">My Work Gallery</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-12">

                    <div class="row shuffle-wrapper">
                        <div class="col-1 shuffle-sizer"></div>

                        <div class="col-lg-4 col-md-6 shuffle-item"
                            data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{assset('assets/images/projects/project1.jpg')}}')}}" aria-label="project-img">
                                    <img class="img-fluid" src="{{assset('assets/images/projects/project1.jpg')}}')}}" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Capital Teltway Building</a>
                                        </h3>
                                        <p class="project-cat">Commercial, Interiors</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 1 end -->

                        <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{assset('assets/images/projects/project2.jpg')}}')}}" aria-label="project-img">
                                    <img class="img-fluid" src="{{assset('assets/images/projects/project2.jpg')}}')}}" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Ghum Touch Hospital</a>
                                        </h3>
                                        <p class="project-cat">Healthcare</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 2 end -->

                        <div class="col-lg-4 col-md-6 shuffle-item"
                            data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{assset('assets/images/projects/project3.jpg')}}')}}" aria-label="project-img">
                                    <img class="img-fluid" src="{{assset('assets/images/projects/project3.jpg')}}')}}" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">TNT East Facility</a>
                                        </h3>
                                        <p class="project-cat">Government</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 3 end -->

                        <div class="col-lg-4 col-md-6 shuffle-item"
                            data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{assset('assets/images/projects/project4.jpg')}}')}}" aria-label="project-img">
                                    <img class="img-fluid" src="{{assset('assets/images/projects/project4.jpg')}}')}}" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Narriot Headquarters</a>
                                        </h3>
                                        <p class="project-cat">Infrastructure</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 4 end -->

                        <div class="col-lg-4 col-md-6 shuffle-item"
                            data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{assset('assets/images/projects/project5.jpg')}}')}}" aria-label="project-img">
                                    <img class="img-fluid" src="{{assset('assets/images/projects/project5.jpg')}}')}}" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Kalas Metrorail</a>
                                        </h3>
                                        <p class="project-cat">Infrastructure</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 5 end -->

                        <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                            <div class="project-img-container">
                                <a class="gallery-popup" href="{{assset('assets/images/projects/project6.jpg')}}')}}" aria-label="project-img">
                                    <img class="img-fluid" src="{{assset('assets/images/projects/project6.jpg')}}')}}" alt="project-img">
                                    <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                </a>
                                <div class="project-item-info">
                                    <div class="project-item-info-content">
                                        <h3 class="project-item-title">
                                            <a href="projects-single.html">Ancraft Avenue House</a>
                                        </h3>
                                        <p class="project-cat">Residential</p>
                                    </div>
                                </div>
                            </div>
                        </div><!-- shuffle item 6 end -->
                    </div><!-- shuffle end -->
                </div>

            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section>
    <!--end gallery-->


    <!--usecases-->
    <section id="common-applications" class="common-applications py-5">
        <div class="container">
            <h2 class="text-center mb-4">Common Applications</h2>
            <div class="row">
                <!-- Wood Sanding -->
                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/automation.jfif" alt="Wood Sanding" class="mb-2" width="50">
                        <h4>Wood Sanding</h4>
                    </div>
                </div>

                <!-- Metal Polishing -->
                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/automation.jfif" alt="Metal Polishing" class="mb-2" width="50">
                        <h4>Metal Polishing</h4>
                    </div>
                </div>

                <!-- Automotive Bodywork -->
                <div class="col-md-4">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/automation.jfif" alt="Automotive Bodywork" class="mb-2" width="50">
                        <h4>Automotive Bodywork</h4>
                    </div>
                </div>

                <!-- Stainless Steel Finishing -->
                <div class="col-md-4 mt-3">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/steel.jfif" alt="Stainless Steel Finishing" class="mb-2" width="50">
                        <h4>Stainless Steel Finishing</h4>
                    </div>
                </div>

                <!-- Paint Preparation -->
                <div class="col-md-4 mt-3">
                    <div class="application-box border rounded p-3 text-center shadow">
                        <img src="images/paintroller.jfif" alt="Paint Preparation" class="mb-2" width="50">
                        <h4>Paint Preparation</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--technical spacification-->
    <section id="technical-specifications" class="technical-specifications py-5">
        <div class="container">
            <h2 class="text-center mb-4 text-dark">Technical Specifications</h2>
            <div class="table-responsive">
                <table class="table table-bordered text-center shadow">
                    <thead class="bg-warning text-dark">
                        <tr>
                            <th>Parameter</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light text-dark">
                        <tr>
                            <td>Grain Type</td>
                            <td>Silicon Carbide / Aloxide</td>
                        </tr>
                        <tr>
                            <td>Backing</td>
                            <td>C-weight Paper / Cloth Roll</td>
                        </tr>
                        <tr>
                            <td>Bond</td>
                            <td>Resin Over Resin / Glue</td>
                        </tr>
                        <tr>
                            <td>Grit Size Range</td>
                            <td>60 – 2000</td>
                        </tr>
                        <tr>
                            <td>Available Forms</td>
                            <td>Sheets, Rolls</td>
                        </tr>
                        <tr>
                            <td>Widths Available</td>
                            <td>100mm / 230mm / Custom</td>
                        </tr>
                        <tr>
                            <td>Water Resistance</td>
                            <td>Yes (for waterproof products)</td>
                        </tr>
                        <tr>
                            <td>Application Surface</td>
                            <td>Metal, Wood, Paint, Plastic</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>



    <!--related products-->
    <section id="related-products" class="related-products-section py-5" style="background-color: #f8f9fa;">
        <div class="container">
            <h3 class="text-center mb-4">You Might Also Be Interested In</h3>
            <div class="row justify-content-center">

                <!-- Product Card 1 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{assset('assets/images/projects/project2.jpg')}}" class="card-img-top" alt="Emery Paper">
                        <div class="card-body text-center">
                            <h5 class="card-title">Emery Paper</h5>
                            <a href="product_details.html" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{asset('assets/images/projects/project3.jpg')}}" class="card-img-top" alt="Aloxide Roll">
                        <div class="card-body text-center">
                            <h5 class="card-title">Aloxide Roll</h5>
                            <a href="product.html" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 (Optional) -->
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <img src="{{asset('assets/images/projects/project4.jpg')}}" class="card-img-top" alt="Flint Paper">
                        <div class="card-body text-center">
                            <h5 class="card-title">Flint Paper</h5>
                            <a href="product_details.html" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
