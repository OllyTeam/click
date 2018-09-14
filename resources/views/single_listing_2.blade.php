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
                            <h4 class="location">
                            <a href="#">{{$service->district_id}}, </a>
                            </h4>
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
                            <p style="min-height: 200px">{{$service->service_desc}}</p>
                            </section>
                            <!--end Description-->
                            <!--Details-->
                            <section>
                                <h2>Details</h2>
                                <dl class="columns-2">
                                    <dt>Date Added</dt>
                                    <dd>{{$service->created_at}}</dd>
                                    <dt>Province</dt>
                                    <dd>{{$service->province_id}}</dd>
                                    <dt>District</dt>
                                    <dd>{{$service->district_id}}</dd>
                                    <dt>Sector</dt>
                                    <dd>{{$service->sector_id}}</dd>
                                    <dt>Category</dt>
                                    <dd>{{$service->category->name}}</dd>
                                    <dt>Languages</dt>
                                    <dd>{{$service->language}}</dd>
                                    
                                </dl>
                            </section>
                            <!--end Details-->
                            <!--Location-->
                            <!--end Location-->
                            <!--Features-->
                            <!--end Features-->

                            <hr>

                            <!--Similar Ads-->
                            <!--end Similar Ads-->
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
                                                <label for="name" class="col-form-label">Name</label>
                                                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="email" class="col-form-label">Email</label>
                                                <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                            </div>
                                            <!--end form-group-->
                                           
                                            <!--end form-group-->
                                        
                                      
                                    </div>
                                    <!--end box-->
                                </section>
                                <!--End Author-->
                            </aside>
                        </div>
                        <!--============ End Sidebar ================================================================-->
                    </div>
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

        @include('layouts.bottom')
