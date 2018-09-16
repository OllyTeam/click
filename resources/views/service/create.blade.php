@include('layouts.top')

                <div class="page-title">
                    <div class="container">
                        <h1>Service</h1>
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
                    <div class="row">
                        <div class="col-md-3">
                            <nav class="nav flex-column side-nav">
                                <a class="nav-link  icon" href="{{url('/offer')}}">
                                    <i class="fa fa-user"></i>My job offers 
                                </a>
                                <a class="nav-link icon" href="{{url('/offer')}}">
                                    <i class="fa fa-heart"></i>My Profile
                                </a>
                                <a class="nav-link active icon" href="{{url('service')}}">
                                    <i class="fa fa-star"></i>My service listings
                                </a>
                                <a class="nav-link icon" href="#">
                                    <i class="fa fa-recycle"></i>My reviews 
                                </a>
                                <a class="nav-link icon" href="{{route('logout')}}">
                                    <i class="fa fa-check"></i>Logout
                                </a>
                            </nav>
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2>Insert Your Service Information</h2>
                                        <section>
                                            <div class="row">
                                                {{ Form::open(['action'=>'ServiceController@store','method'=>'POST']) }}
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label ">Service title</label>
                                                        <input name="name" type="text" class="form-control" id="name" placeholder="Service Name" >
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name" class="col-form-label ">Service description </label>
                                                        <input name="desc" type="text" class="form-control" id="name" placeholder="Service title" >
                                                    </div>
                                                    <!--end form-group-->
                                                </div>
                                                <!--end col-md-8-->
                                            </div>
                                            <!--end row-->
                                            <div class="form-group">
                                                <label for="location" class="col-form-label ">Category</label>
                                                <select  name="category" >
                                                        <option value="">-</option>
                                                            @foreach($category as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="location" class="col-form-label ">Education </label>
                                                <input type="text" name="education" placeholder="Your education">
                                            </div>
                                            <div class="form-group">
                                                <label for="location" class="col-form-label ">Employment type </label>
                                                <select name="employment">
                                                    <option value="Freelancer">Freelancer</option>
                                                    <option value="Part-time">Part-time</option>
                                                    <option value="Full-time">Full-time</option>
                                                    <option value="Internship">Internship</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                    <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="title" class="col-form-label ">Province</label>
                                                      

                                                                    <!-- <input type="text" name="province"> -->
                                                            <select  name="province" >
                                                                <option value="">-</option>
                                                            @foreach($province as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                            </select>
                                                                </div>
                                                                <!--end form-group-->
                                                            </div>
                                            <div class="col-md-4">
                                                        <div class="form-group">
                                                                <label for="name" class="col-form-label  ">District</label>
                                                                    <!-- <input type="text" name="district">
                                                                </div> -->
                                                        <select  name="district" >
                                                        <option value="">-</option>
                                                            @foreach($district as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                                <!--end form-group-->
                                                    </div>
                                                            <!--end col-md-4-->
                                                   
                                            </div>
                                            <div class="col-md-4">
                                                        <div class="form-group">
                                                                <label for="name" class="col-form-label  ">sector</label>
                                                                    <!-- <input type="text" name="district">
                                                                </div> -->
                                                        <select  name="sector" >
                                                        <option value="">-</option>
                                                            @foreach($sector as $item)
                                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                                <!--end form-group-->
                                                    </div>
                                                            <!--end col-md-4-->
                                                   
                                            </div>
                                                    </div>
                                            </div>
                                            <!--end form-group-->
                                        </section>

                                        <section>
                                            <h2>Personal Info</h2>
                                            <div class="form-group">
                                                <label for="phone" class="col-form-label ">Phone</label>
                                                <input name="phone" type="text" class="form-control" id="phone" placeholder="Your Phone"  pattern="^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$" >
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="email" class="col-form-label ">Email</label>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email" >
                                            </div>
                                            <!--end form-group-->
                                             <div class="form-group">
                                                <label for="email" class="col-form-label ">Languages</label>
                                                <input name="language" type="text" class="form-control" id="email" placeholder="Your Language"  pattern="[a-zA-Z, ]" >
                                            </div>
                                        </section>

                                        <section class="clearfix">
                                            <button type="submit" class="btn btn-primary float-right">Save </button>
                                        </section>
                                    </div>
                                    <!--end col-md-8-->
                                    <div class="col-md-4">
                                        {{  csrf_field() }}
                                    </div>
                                    <!--end col-md-3-->
                                </div>
                                {{ Form::close() }}
                        </div>
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->
       <!--  -->

@include('layouts.bottom')

