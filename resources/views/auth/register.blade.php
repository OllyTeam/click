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
                  {{-- 
                  <ul class="right">
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
                     </li>
                     --}}
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
                                    <a class="fa fa-sign-in" href="{{ route('login') }}">{{ __('Login') }}</a>
                                 </li>
                                 <li class="secondary-navigation">
                                    <a class="fa fa-pencil-square-o" href="{{ route('register') }}">{{ __('Register') }}</a>
                                 </li>
                                 @else
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
                     {{-- 
                  </ul>
                  --}}
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
                           </li>
                           <li class="nav-item has-child">
                              <a class="nav-link" href="#">How it works</a>
                           </li>
                           <li class="nav-item has-child">
                              <a class="nav-link" href="#">About Us</a>
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
            {!! Form::open([ 'action' =>'PagesController@store' , 'method'=>'POST' ]) !!}
            <div class="form-group row">
               <label for="fname" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>
               <div class="col-md-6">
                  <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" placeholder="First Name" name="fname" value="{{ old('fname') }}" required autofocus>
                  @if ($errors->has('fname'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('fname') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>
               <div class="col-md-6">
                  <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" placeholder="Last Name" required autofocus>
                  @if ($errors->has('lname'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('lname') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail ') }}</label>
               <div class="col-md-6">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                  @if ($errors->has('email'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('email') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label for="date" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>
               <div class="col-md-6">
                  <input id="dob" type="date" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="dob" value="{{ old('date') }}" required autofocus>
                  @if ($errors->has('date'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('date') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>
               <label class="framed">
               <input type="radio" name="type" value="1" required>
               Male
               </label>
               <label class="framed">
               <input type="radio" name="type" value="1" required>
               Male
               </label>
               <div class="col-md-6">
                  @if ($errors->has('gender'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('gender') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
               <div class="col-md-6">
                  <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
                  @if ($errors->has('phone'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('phone') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group">
               {{-- <label for="phone" class="col-form-label required">Phone</label> --}}
               {{-- <input name="status" type="tel" class="form-control" id="ststus" value="2" required> --}}
               <div class="col-md-6">
                  <input id="status" type="hidden" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="status" value="2" required autofocus>
                  {{-- @if ($errors->has('st'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('st') }}</strong>
                  </span>
                  @endif --}}
               </div>
            </div>
            <!--end form-group-->
            <div class="form-group">
               {{-- <label for="phone" class="col-form-label required">Phone</label> --}}
               {{-- <input name="active" type="hidden" class="form-control" id="active" value="0" required> --}}
               <div class="col-md-6">
                  <input id="active" type="hidden" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="active" value="0" required autofocus>
                  {{-- @if ($errors->has('phone'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('phone') }}</strong>
                  </span>
                  @endif --}}
               </div>
            </div>
            <div class="form-group row">
               <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
               <div class="col-md-6">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                  @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $errors->first('password') }}</strong>
                  </span>
                  @endif
               </div>
            </div>
            <div class="form-group row">
               <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
               <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
               </div>
            </div>
            <div class="form-group row mb-0">
               <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                  {{ __('Register') }}
                  </button>
               </div>
            </div>
            {!! Form::close() !!}
         </div>
      </div>
      
@include('layouts.bottom')