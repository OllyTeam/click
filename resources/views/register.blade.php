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
                        <h1>Register</h1>
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
                    <div class="row justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8">
                            <form class="form clearfix" method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="fname" class="col-form-label required">First Name</label>
                                    {{-- <input name="fname" type="text" class="form-control" id="fname" placeholder="First Name" required> --}}

                                    <div class="col-md-6">
                                        <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" placeholder="First Name" name="fname" value="{{ old('fname') }}" required autofocus>
        
                                        @if ($errors->has('fname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('fname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="lname" class="col-form-label required">Last Name</label>
                                    {{-- <input name="lname" type="text" class="form-control" id="lname" placeholder="Last Name" required> --}}
                                    
                                    <div class="col-md-6">
                                        <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" placeholder="Last Name" required autofocus>
        
                                        @if ($errors->has('lname'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('lname') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="email" class="col-form-label required">Email</label>
                                    {{-- <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" required> --}}

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Your Email" required>
        
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="date" class="col-form-label required">Date of Birth</label>
                                    {{-- <input name="date" type="date" class="form-control" id="date" required> --}}

                                    <div class="col-md-6">
                                        <input id="date" type="date" class="form-control{{ $errors->has('date') ? ' is-invalid' : '' }}" name="date" value="{{ old('date') }}" required autofocus>
        
                                        @if ($errors->has('date'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('date') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group" id="type">
                                    <label for="gender" class="required">Gender</label>
                                    <figure>
                                        <label class="framed">
                                            <input type="radio" name="male" value="1" required>
                                            Male
                                        </label>
                                        <label class="framed">
                                            <input type="radio" name="female" value="2" required>
                                            Female
                                        </label>
                                    </figure>

                                    <div class="col-md-6">
                                        {{-- <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus> --}}
        
                                        @if ($errors->has('gender'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('gender') }}</strong>
                                            </span>
                                        @endif
                                    </div>
        
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="phone" class="col-form-label required">Phone</label>
                                    {{-- <input name="phone" type="tel" class="form-control" id="phone" placeholder="+1234567890" required> --}}

                                    <div class="col-md-6">
                                        <input id="phone" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" placeholder="+1234567890" required autofocus>
        
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="phone" class="col-form-label required">Phone</label>
                                    {{-- <input name="status" type="tel" class="form-control" id="ststus" value="2" required> --}}

                                    <div class="col-md-6">
                                        <input id="phone" type="hidden" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
        
                                        @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    {{-- <label for="phone" class="col-form-label required">Phone</label> --}}
                                    <input name="active" type="hidden" class="form-control" id="active" value="0" required>

                                    <div class="col-md-6">
                                        <input id="active" type="number" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>
        
                                        {{-- @if ($errors->has('phone'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                        @endif --}}
                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="password" class="col-form-label required">Password</label>
                                    {{-- <input name="password" type="password" class="form-control" id="password" placeholder="Password" required> --}}

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
        
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="repeat_password" class="col-form-label required">Repeat Password</label>
                                    {{-- <input name="repeat_password" type="password" class="form-control" id="repeat_password" placeholder="Repeat Password" required> --}}

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password" required>
                                    </div>
                                </div>
                                <!--end form-group-->

                                <!--end form-group-->
                                <div class="d-flex justify-content-between align-items-baseline">
                                     {{-- <label>
                                        <input type="checkbox" name="newsletter" value="1">
                                        Receive Newsletter
                                    </label>  --}}
                                    <button type="submit" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                            <hr>
                            {{-- <p>
                                By clicking "Register" button, you agree with our <a href="#" class="link">Terms & Conditions.</a>
                            </p>  --}}
                        </div>
                        <!--end col-md-6-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        <!--*********************************************************************************************************-->
        @include('layouts.bottom')
