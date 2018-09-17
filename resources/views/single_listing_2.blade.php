@include('layouts.top')
<style type="text/css">
    :before{
            content: none;
                }
</style>

                <!--============ Hero Form ==========================================================================-->

                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container clearfix">
                        <div class="float-left float-xs-none">
                            <h1>{{$service->service_title}}
                                <span class="tag">Service</span>
                            </h1>

                        </div>
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
                    <!--Gallery Carousel-->
            
                    <!--end Gallery Carousel-->
                    <div class="row flex-column-reverse flex-md-row">
                        <!--============ Listing Detail =============================================================-->
                        <div class="col-md-8">
                            <!--Description-->
                            <section>
                                <h2>Description</h2>
                            <p style="min-height: 100px">{{$service->description}}</p>
                            </section>
                            <!--end Description-->
                            <!--Details-->
                            <section>
                                <h2>Details</h2>
                                <dl class="columns-2">
                                    <dt>Date Added</dt>
                                    <dd>{{$service->created_at}}</dd>
                                    <dt>Province</dt>
                                    <dd>

                                        @foreach($province as $item)
                                            @if($service->province_id == $item->id)
                                                {{$item->name}}   
                                            @endif
                                        @endforeach

                                    </dd>
                                    <dt>District</dt>
                                    <dd>
                                        @foreach($district as $item)
                                            @if($service->district_id == $item->id)
                                                {{$item->name}}   
                                            @endif
                                        @endforeach
                                    </dd>
                                    <dt>Sector</dt>
                                    <dd>
                                        @foreach($district as $item)
                                            @if($service->sector_id == $item->id)
                                                {{$item->name}}   
                                            @endif
                                        @endforeach
                                    </dd>
                                    <dt>Category</dt>
                                    <dd>{{$service->category->name}}</dd>
                                    <dt>Languages</dt>
                                    <dd>{{$service->language}}</dd>
                                    
                                </dl>
                            </section>
                            <hr>
                        </div>
                        <!--============ End Listing Detail =========================================================-->
                        <!--============ Sidebar ====================================================================-->
                        <div class="col-md-4">
                            <aside class="sidebar">
                                <!--Author-->
                                <section>
                                    <h2>Author</h2>
                                    <div class="box">
                                        <div class="author">
                                            <div class="author-image">
                                                <div class="background-image">
                                                    <img src="assets/img/author-01.jpg" alt="">
                                                </div>
                                            </div>
                                            <!--end author-image-->
                                            <div class="author-description">
                                                <h3>{{$service->User->lname}}</h3>
                                                <div class="rating" data-rating="4"></div>
                                            </div>
                                            <!--end author-description-->
                                        </div>
                                        <hr>
                                        <dl>
                                            <dt>Phone</dt>
                                            <dd>{{$service->User->phone}}</dd>
                                            <dt>Email</dt>
                                            <dd>{{ $service->User->email}}</dd>
                                        </dl>
                                        <!--end author-->
                                            <div class="form-group">
                                                <input disabled  type="text" class="form-control" id="name" >
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <input disabled  type="email" class="form-control" id="email" >
                                            </div>
                                            <!--end form-group-->
                                           
                                            <!--end form-group-->
                                        
                                      
                                    </div>
                                    <!--end box-->
                                </section>
                                <!--End Author-->
                            </aside>
                        </div>
                            <section>
                                <h2>Write a Review</h2>
                                <form class="form">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label for="subject" class="col-form-label">Subject</label>
                                                <input name="subject" type="text" class="form-control" id="subject" placeholder="Did you like a deal?">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-8-->
                                        <!--end col-md-4-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="review" class="col-form-label">Your Review</label>
                                                <textarea name="review" id="review" class="form-control" rows="4" placeholder="Good seller, I am satisfied."></textarea>
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-12-->
                                    </div>
                                    <!--end row-->
                                </form>
                                <!--end form-->
                            </section>
                        <!--============ End Sidebar ================================================================-->
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        @include('layouts.bottom')
