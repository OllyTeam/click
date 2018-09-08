@include('layouts.top')

                <!--============ Hero Form ==========================================================================-->
                <div class="collapse" id="collapseMainSearchForm">
                    <form class="hero-form form">
                        <div class="container">
                            <!--Main Form-->
                            <div class="main-search-form">
                                <div class="form-row">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="what" class="col-form-label">What?</label>
                                            <input name="keyword" type="text" class="form-control small" id="what" placeholder="What are you looking for?">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="input-location" class="col-form-label">Where?</label>
                                            <input name="location" type="text" class="form-control small" id="input-location" placeholder="Enter Location">
                                            <span class="geo-location input-group-addon" data-toggle="tooltip" data-placement="top" title="Find My Position"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label for="category" class="col-form-label">Category?</label>
                                            <select name="category" id="category" class="small" data-placeholder="Select Category">
                                                <option value="">Select Category</option>
                                                <option value="1">Computers</option>
                                                <option value="2">Real Estate</option>
                                                <option value="3">Cars & Motorcycles</option>
                                                <option value="4">Furniture</option>
                                                <option value="5">Pets & Animals</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-3 col-sm-3">
                                        <button type="submit" class="btn btn-primary width-100 small">Search</button>
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                <!--end form-row-->
                            </div>
                            <!--end main-search-form-->
                            <!--Alternative Form-->
                            <div class="alternative-search-form">
                                <a href="#collapseAlternativeSearchForm" class="icon" data-toggle="collapse"  aria-expanded="false" aria-controls="collapseAlternativeSearchForm"><i class="fa fa-plus"></i>More Options</a>
                                <div class="collapse" id="collapseAlternativeSearchForm">
                                    <div class="wrapper">
                                        <div class="form-row">
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 d-xs-grid d-flex align-items-center justify-content-between">
                                                <label>
                                                    <input type="checkbox" name="new">
                                                    New
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="used">
                                                    Used
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="with_photo">
                                                    With Photo
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="featured">
                                                    Featured
                                                </label>
                                            </div>
                                            <!--end col-xl-6-->
                                            <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                                <div class="form-row">
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input name="min_price" type="text" class="form-control small" id="min-price" placeholder="Minimal Price">
                                                            <span class="input-group-addon small">$</span>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <input name="max_price" type="text" class="form-control small" id="max-price" placeholder="Maximal Price">
                                                            <span class="input-group-addon small">$</span>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-4-->
                                                    <div class="col-md-4 col-sm-4">
                                                        <div class="form-group">
                                                            <select name="distance" id="distance" class="small" data-placeholder="Distance" >
                                                                <option value="">Distance</option>
                                                                <option value="1">1km</option>
                                                                <option value="2">5km</option>
                                                                <option value="3">10km</option>
                                                                <option value="4">50km</option>
                                                                <option value="5">100km</option>
                                                            </select>
                                                        </div>
                                                        <!--end form-group-->
                                                    </div>
                                                    <!--end col-md-3-->
                                                </div>
                                                <!--end form-row-->
                                            </div>
                                            <!--end col-xl-6-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end collapse-->
                            </div>
                            <!--end alternative-search-form-->
                        </div>
                        <!--end container-->
                    </form>
                    <!--end hero-form-->
                </div>
                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Pricing</h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <div class="background"></div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <section class="block">
                <div class="container">

                    <section>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="pricing box description">
                                    <h2 class="opacity-30">Package</h2>
                                    <ul>
                                        <li>Email Support</li>
                                        <li>Phone Support</li>
                                        <li>Documentation</li>
                                        <li>Consultation Hours</li>
                                        <li>Profile Builder</li>
                                    </ul>
                                </div>
                                <!--end pricing-box description-->
                            </div>
                            <!--end col-md-4-->
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="pricing box">
                                    <h2>Silver</h2>
                                    <figure>$9.90</figure>
                                    <ul>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <li class="not-available"><i class="fa fa-times"></i></li>
                                        <li>3 hours</li>
                                        <li class="not-available"><i class="fa fa-times"></i></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btn-rounded">Select</a>
                                </div>
                                <!--end pricing-box-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="pricing box featured">
                                    <h2>Gold</h2>
                                    <figure>$19.90</figure>
                                    <ul>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <li>3 hours</li>
                                        <li class="not-available"><i class="fa fa-times"></i></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btn-rounded">Select</a>
                                </div>
                                <!--end pricing-box-->
                            </div>
                            <!--end col-md-3-->
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="pricing box">
                                    <h2>Platinum</h2>
                                    <figure>$29.90</figure>
                                    <ul>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                        <li class="not-available"><i class="fa fa-check"></i></li>
                                        <li>3 hours</li>
                                        <li class="available"><i class="fa fa-check"></i></li>
                                    </ul>
                                    <a href="#" class="btn btn-primary btn-rounded">Select</a>
                                </div>
                                <!--end pricing-box-->
                            </div>
                            <!--end col-md-3-->
                        </div>
                    </section>

                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        @include('layouts.bottom')
