@include('layouts.top')

                <!--============ Hero Form ==========================================================================-->
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
