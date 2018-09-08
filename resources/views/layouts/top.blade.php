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
                                <i class="fa fa-phone"></i> +(250) 789923505
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
                                                <a class="fa fa-sign-in" href="{{ url('/login') }}">{{ __('Login') }}</a>
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
                                            {{-- <li class="nav-item dropdown" style="color:aliceblue">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:aliceblue">
                                                    {{ Auth::user()->fname }} <span class="caret"></span>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="color:aliceblue">
                                                    <a class="dropdown-item" href="{{ '/logout' }}" style="color:aliceblue"
                                                        onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li> --}}
                                            <li class="nav-item dropdown" >
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:aqua">
                                                    <b> {{ Auth::user()->fname }}</b> <span class="caret"></span>
                                                </a>
                            
                                                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" > --}}
                            
                                                {{-- <a class="dropdown-item" href="" style="color:green"><b>Home</b></a> --}}
                            
                                                <a class="nav-link" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();" style="color:white">
                                                <b>  {{ __('Logout') }}</b>
                                                </a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                {{-- </div> --}}
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
                                        <a class="nav-link" href=" {{url('/')}}">Home</a>
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
 
                
                @yield('content')
       
       
       
      