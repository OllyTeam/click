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
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" ></script> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
      
      <title>The Link360 - Job Offer & Service Listing</title>
   </head>

   <body>
      <div class="page home-page">
      
      <header class="hero">
      <div class="hero-wrapper">

      <div class="secondary-navigation">
         <div class="container">
            <ul class="left">
               <li>
                  <span>
                  <i class="fa fa-phone"></i> +(250) 789923505
                  </span>
               </li>
            </ul>
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
                        <li class="nav-item dropdown" >
                           <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:aqua">
                           <b> {{ Auth::user()->lname }}</b> <span class="caret"></span>
                           </a>
                           {{-- 
                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                              --}}
                              {{-- <a class="dropdown-item" href="" style="color:green"><b>Home</b></a> --}}
                              <a class="nav-link" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();" style="color:white">
                              <b>  {{ __('Logout') }}</b>
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                 @csrf
                              </form>
                              {{-- 
                           </div>
                           --}}
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
                        <a  href=" {{url('/')}}">Home</a>
                     </li>
                     <li class="nav-item has-child">
                        <a href="#">About Us</a>
                        <!--1st level -->
                     </li>
                     <li class="nav-item has-child">
                        <a href="#">How it works</a>
                        <!--1st level -->
                     </li>
                     <li class="nav-item">
                        <a  href="{{url('contact')}}">Contact</a>
                     </li>
                     @guest
                     <li class="nav-item">
                        <a href="{{url('/login')}}" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
                     </li>

                     @else
                     <li class="nav-item">
                        <a href="{{url('/profile')}}" class="btn btn-primary text-caps btn-rounded btn-framed">Submit Ad</a>
                     </li>
                     @endguest
                  </ul>
                  <!--Main navigation list-->
               </div>
               <!--end navbar-collapse-->
            </nav>
            <!--end navbar-->
         </div>
         <!--end container-->
      </div>
