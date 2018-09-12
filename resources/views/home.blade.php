<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="author" content="ThemeStarz">

    <link href=" {{ asset('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round')}}" rel="stylesheet">
    <link rel="stylesheet" href=" {{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
    <link rel="stylesheet" href=" {asset('assets/fonts/font-awesome.css')}}" type="text/css">
    <link rel="stylesheet" href=" {{asset('assets/css/selectize.css')}}" type="text/css">
    <link rel="stylesheet" href=" {{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href=" {{asset('assets/css/user.css')}}">

	<title>The Link360 - Job Offer & Service Listing</title>

</head>
<body>
    <div class="page home-page">
        <!--*********************************************************************************************************-->
        <!--************ HERO ***************************************************************************************-->
				<!--*********************************************************************************************************-->
        <header class="hero">
            <div class="hero-wrapper">
                <!--============ Secondary Navigation ===============================================================-->
                <div class="secondary-navigation">
                    <div class="container">
                        <ul class="left">
                            <li>
                            <span>
                                <i class="fa fa-phone"></i> +(250) 789923505jj
                            </span>
                            </li>
                        </ul>
                        <!--end left-->
                        {{-- <ul class="right">
                            <li>
                                <a href="{{url('my_ads')}}">
                                    <i class="fa fa-heart"></i>My Ads
                                </a>
                            </li>
                            <li>
                                <a href="{{url('sign_in')}}">
                                    <i class="fa fa-sign-in"></i>Sign In
                                </a>
                            </li>
                            <li>
                                <a href="{{url('register')}}">
                                    <i class="fa fa-pencil-square-o"></i>Register
                                </a>
                            </li> --}}


                        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                            <div class="container">
                                {{-- <a class="navbar-brand" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a> --}}
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                    <span class="navbar-toggler-icon"></span>
                                </button>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <!-- Left Side Of Navbar -->
                                    <ul class="navbar-nav mr-auto">

                                    </ul>

                                    <!-- Right Side Of Navbar -->
                                    <ul class="navbar-nav ml-auto">
                                        <!-- Authentication Links -->
                                        @guest
                                            <li class="secondary-navigation">
                                                <a class="fa fa-sign-in" href="">{{ __('Login') }}</a>
                                            </li>
                                            <li class="secondary-navigation">
                                                <a class="fa fa-pencil-square-o" href="{{url('/register')}}">{{ __('Register') }}</a>
                                            </li>
                                        @else

                                            {{-- <li>
                                                <a href="{{url('my_ads')}}">
                                                    <i class="fa fa-heart"></i>My Ads
                                                </a>
                                            </li> --}}
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                        @endguest
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        {{-- </ul> --}}
                        <!--end right-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Secondary Navigation ===========================================================-->
                <!--============ Main Navigation ====================================================================-->
                <div class="main-navigation">
                    <div class="container">
                        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
                            <a class="navbar-brand" href="index">
                                <img src="assets/img/logo1.png" alt="">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbar">
                                <!--Main navigation list-->
                                <ul class="navbar-nav">
                                    <li class="nav-item active">
                                        <a class="nav-link" href=" {{url('\home')}}">Home</a>
                                    </li>
                                    <li class="nav-item has-child">
                                        <a class="nav-link" href="#">Categories</a>
                                        <!-- 1st level -->
                                        <ul class="child">
                                            <li class="nav-item has-child">
                                                <a href="#" class="nav-link">Grid</a>
                                                <!-- 2nd level -->
                                                <ul class="child">
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_grid_full_width')}}" class="nav-link">Full Width</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_grid_sidebar')}}" class="nav-link">With Sidebar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_grid_compact_sidebar')}}" class="nav-link">Compact With Sidebar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url ('listing_grid_compact_full-width')}}" class="nav-link">Compact Full Width</a>
                                                    </li>
                                                </ul>
                                                <!-- end 2nd level -->
                                            </li>
                                            <li class="nav-item has-child">
                                                <a href="#" class="nav-link">List</a>
                                                <!-- 2nd level -->
                                                <ul class="child">
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_list_full_width')}}" class="nav-link">Full Width</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_list_sidebar')}}" class="nav-link">With Sidebar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_list_compact_sidebar')}}" class="nav-link">Compact With Sidebar</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_list_compact_full_width')}}" class="nav-link">Compact Full Width</a>
                                                    </li>
                                                </ul>
                                                <!-- end 2nd level -->
                                            </li>
                                            <li class="nav-item has-child">
                                                <a href="#" class="nav-link">Masonry</a>
                                                <!-- 2nd level -->
                                                <ul class="child">
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_masonry_full_width')}}" class="nav-link">Full Width</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_masonry_sidebar')}}" class="nav-link">With Sidebar</a>
                                                    </li>
                                                </ul>
                                                <!-- end 2nd level -->
                                            </li>
                                            <li class="nav-item has-child">
                                                <a href="#" class="nav-link">Single</a>
                                                <!-- 2nd level -->
                                                <ul class="child">
                                                    <li class="nav-item">
                                                        <a href="{{url('single_listing_1')}}" class="nav-link">Single 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('single_listing_2')}}" class="nav-link">Single 2</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('single_listing_3')}}" class="nav-link">Single 3</a>
                                                    </li>
                                                </ul>
                                                <!-- end 2nd level -->
                                            </li>
                                        </ul>
                                        <!-- end 1st level -->
                                    </li>
                                    <li class="nav-item has-child">
                                        <a class="nav-link" href="#">How it works</a>
                                        <!-- 2nd level -->
                                        <ul class="child">
                                            <li class="nav-item">
                                                <a href="{{url('sellers')}}" class="nav-link">Sellers</a>
                                            </li>
                                            <li class="nav-item has-child">
                                                <a href="#" class="nav-link">Seller Detail</a>
                                                <!-- 3rd level -->
                                                <ul class="child">
                                                    <li class="nav-item">
                                                        <a href="{{url('seller_detail_1')}}" class="nav-link">Seller Detail
                                                            1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('seller_detail_2')}}" class="nav-link">Seller Detail
                                                            2</a>
                                                    </li>
                                                </ul>
                                                <!-- end 3rd level -->
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('blog')}}" class="nav-link">Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('blog_post')}}" class="nav-link">Blog Post</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('submit')}}" class="nav-link">Submit Ad</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('pricing')}}" class="nav-link">Pricing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('faq')}}" class="nav-link">FAQ</a>
                                            </li>
                                        </ul>
                                        <!-- end 2nd level -->
                                    </li>
                                    <li class="nav-item has-child">
                                        <a class="nav-link" href="#">About Us</a>
                                        <!--1st level -->
                                        <ul class="child">
                                            <li class="nav-item has-child">
                                                <a href="#" class="nav-link">Grid Variants</a>
                                                <ul class="child">
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_grid_4_items')}}" class="nav-link">4 Items</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_grid_3_items')}}" class="nav-link">3 Items</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('listing_grid_2_items')}}" class="nav-link">2 Items</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item has-child">
                                                <a href="#" class="nav-link">User Panel</a>
                                                <ul class="child">
                                                    <li class="nav-item">
                                                        <a href="{{url('my-profile')}}" class="nav-link">My Profile</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="my-ads" class="nav-link">My Ads</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('change_password')}}" class="nav-link">Change
                                                            Password</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('sign_in')}}" class="nav-link">Sign In</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{url('register')}}" class="nav-link">Register</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('elements')}}" class="nav-link">Elements</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('typography')}}" class="nav-link">Typography</a>
                                            </li>
                                            <li class="nav-item has-child">
                                                <a href="#" class="nav-link">Nested Navigation</a>
                                                <!--2nd level -->
                                                <ul class="child">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Level 2</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link">Level 2</a>
                                                    </li>
                                                    <li class="nav-item has-child">
                                                        <a href="#" class="nav-link">Level 2</a>
                                                        <!--3rd level -->
                                                        <ul class="child">
                                                            <li class="nav-item has-child">
                                                                <a href="#" class="nav-link">Level 3</a>
                                                                <!--4th level -->
                                                                <ul class="child">
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link">Level 4</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link">Level 4</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a href="#" class="nav-link">Level 4</a>
                                                                    </li>
                                                                </ul>
                                                                <!-- end 4th level-->
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link">Level 3</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="#" class="nav-link">Level 3</a>
                                                            </li>
                                                        </ul>
                                                        <!--end 3rd level-->
                                                    </li>
                                                </ul>
                                                <!-- end 2nd level -->
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('image-header')}}" class="nav-link">Image Header</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{url('messaging')}}" class="nav-link">Messages</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{url('contact')}}">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('submit')}}" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
                                    </li>
                                </ul>
                                <!--Main navigation list-->
                            </div>
                            <!--end navbar-collapse-->
                        </nav>
                        <!--end navbar-->
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Main Navigation ================================================================-->
 

    @section('content')

                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1 class="opacity-40 center">
                            You <a href="#">think it</a>, We <a href="#">link it</a>
                        </h1>
                    </div>
                    <!--end container-->
                </div>
                <!--============ End Page Title =====================================================================-->
                <!--============ Hero Form ==========================================================================-->
                <form class="hero-form form">
                    <div class="container">
                        <!--Main Form-->
                        <div class="main-search-form">
                            <div class="form-row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="what" class="col-form-label">What are you looking for?</label>
                                        <input name="keyword" type="text" class="form-control" id="what" placeholder="What are you looking for?">
                                    </div>
                                    <!--end form-group-->
                                </div>
                                <!--end col-md-3-->

                                <!--end col-md-3-->
                                <div class="col-md-3 col-sm-3">
                                    <div class="form-group">
                                        <label for="category" class="col-form-label">Category?</label>
                                        <select name="category" id="category" data-placeholder="Select Category">
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
                                    <button type="submit" class="btn btn-primary width-100">Search</button>
                                </div>
                                <!--end col-md-3-->
                            </div>
                            <!--end form-row-->
                        </div>
                        <!--end main-search-form-->

                    </div>
                    <!--end container-->
                </form>
                <!--============ End Hero Form ======================================================================-->
                <div class="background">
                    <div class="background-image original-size">
                        <img src="assets/img/hero-background-icons.jpg" alt="">
                    </div>
                    <!--end background-image-->
                </div>
                <!--end background-->
            </div>
            <!--end hero-wrapper-->
        </header>
        <!--end hero-->

        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <section class="content">
            <!--============ Categories =============================================================================-->
            <section class="block">
                <div class="container">
                    <h2>Categories</h2>
                    <ul class="categories-list clearfix">
                        <li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												<li>
                            <i class="category-icon">
                                <img src="assets/icons/category-real-estate-b.png" width="" alt="">
                            </i>

                            <h3 style="margin-top:4px;"><a href="#">Real Estate</a></h3>
                        </li>
                        <!--end category item-->
												

                    </ul>
                    <!--end categories-list-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
            <!--============ End Categories =========================================================================-->
            <!--============ Featured Ads ===========================================================================-->
            <section class="block">
                <div class="container">

										<div class="row flex-column-reverse flex-md-row">
                        <div class="col-md-9">
                            <!--============ Section Title===================================================================-->
                            <div class="section-title clearfix">
                                <div class="float-left float-xs-none">
                                  <h2>Recent Ads</h2>

                                </div>
                                <div class="float-right float-xs-none d-xs-none thumbnail-toggle">
                                    <a href="#" class="change-class" data-change-from-class="list" data-change-to-class="grid" data-parent-class="items">
                                        <i class="fa fa-th"></i>
                                    </a>
                                    <a href="#" class="change-class active" data-change-from-class="grid" data-change-to-class="list" data-parent-class="items">
                                        <i class="fa fa-th-list"></i>
                                    </a>
                                </div>
                            </div>
                            <!--============ Items ==========================================================================-->
                            <div class="items list grid-xl-3-items grid-lg-3-items grid-md-2-items">
                                <div class="item">
                                    <div class="ribbon-featured">Job Offer</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Real Estate</a>
                                                <a href="single-listing-1" class="title">Real estate Expert Job</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="{{url('single-listing-1')}}" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Gasabo, Kigali</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2018
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="{{url('single-listing-1')}}" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
																	<div class="ribbon-featured">Service Listing</div>
																	<div class="wrapper">
																			<div class="image">
																					<h3>
																							<a href="#" class="tag category">Real Estate</a>
																							<a href="{{url('single-listing-1')}}" class="title">Real estate Expert Job</a>
																							<span class="tag">Offer</span>
																					</h3>
																					<a href="{{url('single-listing-1')}}" class="image-wrapper background-image">
																							<img src="assets/img/image-01.jpg" alt="">
																					</a>
																			</div>
																			<!--end image-->
																			<h4 class="location">
																					<a href="#">Gasabo, Kigali</a>
																			</h4>
																			<div class="price">$80</div>
																			<div class="meta">
																					<figure>
																							<i class="fa fa-calendar-o"></i>02.05.2018
																					</figure>
																					<figure>
																							<a href="#">
																									<i class="fa fa-user"></i>Jane Doe
																							</a>
																					</figure>
																			</div>
																			<!--end meta-->
																			<div class="description">
																					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
																			</div>
																			<!--end description-->
																			<a href="{{url('single-listing-1')}}" class="detail text-caps underline">Detail</a>
																	</div>
                                </div>
                                <!--end item-->

																<div class="item">
                                    <div class="ribbon-featured">Job Offer</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Real Estate</a>
                                                <a href="{{('single-listing-1')}}" class="title">Real estate Expert Job</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="{{('single-listing-1')}}" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Gasabo, Kigali</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2018
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="{{('single-listing-1')}}" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
																	<div class="ribbon-featured">Service Listing</div>
																	<div class="wrapper">
																			<div class="image">
																					<h3>
																							<a href="#" class="tag category">Real Estate</a>
																							<a href="single-listing-1" class="title">Real estate Expert Job</a>
																							<span class="tag">Offer</span>
																					</h3>
																					<a href="single-listing-1" class="image-wrapper background-image">
																							<img src="assets/img/image-01.jpg" alt="">
																					</a>
																			</div>
																			<!--end image-->
																			<h4 class="location">
																					<a href="#">Gasabo, Kigali</a>
																			</h4>
																			<div class="price">$80</div>
																			<div class="meta">
																					<figure>
																							<i class="fa fa-calendar-o"></i>02.05.2018
																					</figure>
																					<figure>
																							<a href="#">
																									<i class="fa fa-user"></i>Jane Doe
																							</a>
																					</figure>
																			</div>
																			<!--end meta-->
																			<div class="description">
																					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
																			</div>
																			<!--end description-->
																			<a href="single-listing-1" class="detail text-caps underline">Detail</a>
																	</div>
                                </div>
                                <!--end item-->

																<div class="item">
                                    <div class="ribbon-featured">Job Offer</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Real Estate</a>
                                                <a href="single-listing-1" class="title">Real estate Expert Job</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Gasabo, Kigali</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2018
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
																	<div class="ribbon-featured">Service Listing</div>
																	<div class="wrapper">
																			<div class="image">
																					<h3>
																							<a href="#" class="tag category">Real Estate</a>
																							<a href="single-listing-1" class="title">Real estate Expert Job</a>
																							<span class="tag">Offer</span>
																					</h3>
																					<a href="single-listing-1" class="image-wrapper background-image">
																							<img src="assets/img/image-01.jpg" alt="">
																					</a>
																			</div>
																			<!--end image-->
																			<h4 class="location">
																					<a href="#">Gasabo, Kigali</a>
																			</h4>
																			<div class="price">$80</div>
																			<div class="meta">
																					<figure>
																							<i class="fa fa-calendar-o"></i>02.05.2018
																					</figure>
																					<figure>
																							<a href="#">
																									<i class="fa fa-user"></i>Jane Doe
																							</a>
																					</figure>
																			</div>
																			<!--end meta-->
																			<div class="description">
																					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
																			</div>
																			<!--end description-->
																			<a href="single-listing-1" class="detail text-caps underline">Detail</a>
																	</div>
                                </div>
                                <!--end item-->

																<div class="item">
                                    <div class="ribbon-featured">Job Offer</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Real Estate</a>
                                                <a href="single-listing-1" class="title">Real estate Expert Job</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Gasabo, Kigali</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2018
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->

                                <div class="item">
																	<div class="ribbon-featured">Service Listing</div>
																	<div class="wrapper">
																			<div class="image">
																					<h3>
																							<a href="#" class="tag category">Real Estate</a>
																							<a href="single-listing-1" class="title">Real estate Expert Job</a>
																							<span class="tag">Offer</span>
																					</h3>
																					<a href="single-listing-1" class="image-wrapper background-image">
																							<img src="assets/img/image-01.jpg" alt="">
																					</a>
																			</div>
																			<!--end image-->
																			<h4 class="location">
																					<a href="#">Gasabo, Kigali</a>
																			</h4>
																			<div class="price">$80</div>
																			<div class="meta">
																					<figure>
																							<i class="fa fa-calendar-o"></i>02.05.2018
																					</figure>
																					<figure>
																							<a href="#">
																									<i class="fa fa-user"></i>Jane Doe
																							</a>
																					</figure>
																			</div>
																			<!--end meta-->
																			<div class="description">
																					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
																			</div>
																			<!--end description-->
																			<a href="single-listing-1" class="detail text-caps underline">Detail</a>
																	</div>
                                </div>
                                <!--end item-->

																<div class="item">
                                    <div class="ribbon-featured">Job Offer</div>
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">Real Estate</a>
                                                <a href="single-listing-1" class="title">Real estate Expert Job</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">Gasabo, Kigali</a>
                                        </h4>
                                        <div class="price">$80</div>
                                        <div class="meta">
                                            <figure>
                                                <i class="fa fa-calendar-o"></i>02.05.2018
                                            </figure>
                                            <figure>
                                                <a href="#">
                                                    <i class="fa fa-user"></i>Jane Doe
                                                </a>
                                            </figure>
                                        </div>
                                        <!--end meta-->
                                        <div class="description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis lobortis</p>
                                        </div>
                                        <!--end description-->
                                        <a href="single-listing-1" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                <!--end item-->
                            </div>
                            <!--============ End Items ==============================================================-->
                            <div class="page-pagination">
                                <nav aria-label="Pagination">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="fa fa-chevron-left"></i>
                                        </span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link" href="#">1</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="fa fa-chevron-right"></i>
                                        </span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!--end page-pagination-->
                        </div>
                        <!--end col-md-9-->
                        <div class="col-md-3">
                            <!--============ Side Bar ===============================================================-->
                            <aside class="sidebar">
                                <section>
                                    <h2></h2>
                                    <img src="assets/img/banner.jpg">
                                    <hr>
                                    <img src="assets/img/banner.jpg">
                                    <hr>
                                    <img src="assets/img/banner.jpg">

                                </section>
                            </aside>
                            <!--============ End Side Bar ===========================================================-->
                        </div>
                        <!--end col-md-3-->
                    </div>
                </div>
                <div class="background" data-background-color="#fff"></div>
                <!--end background-->
            </section>
            <!--============ End Featured Ads =======================================================================-->
            <!--============ Features Steps =========================================================================-->
            <section class="block has-dark-background">
                <div class="container">
                    <div class="block">
                        <h2>Selling With Us Is Easy</h2>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-user.png" alt="">
                                        <span>1</span>
                                    </figure>
                                    <h3>Create an Account</h3>
                                    <p>Etiam molestie viverra dui vitae mattis. Ut velit est</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-upload.png" alt="">
                                        <span>2</span>
                                    </figure>
                                    <h3>Submit Your Ad</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-like.png" alt="">
                                        <span>3</span>
                                    </figure>
                                    <h3>Make a Deal</h3>
                                    <p>Nunc ultrices eu urna quis cursus. Sed viverra ullamcorper</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                            <div class="col-md-3">
                                <div class="feature-box">
                                    <figure>
                                        <img src="assets/icons/feature-wallet.png" alt="">
                                        <span>4</span>
                                    </figure>
                                    <h3>Enjoy the Money!</h3>
                                    <p>Integer nisl ipsum, sodales sed scelerisque nec, aliquet sit</p>
                                </div>
                                <!--end feature-box-->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                    <!--end block-->
                </div>
                <!--end container-->
                <div class="background" data-background-color="#2b2b2b"></div>
                <!--end background-->
            </section>
            <!--end block-->
            <!--============ End Features Steps =====================================================================-->


        </section>
        <!--end content-->

        @include('layouts.bottom')
    {{-- @endsection     --}}


