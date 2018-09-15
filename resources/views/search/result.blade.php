@include('layouts.top')



                <!--============ Hero Form ==========================================================================-->

                <!--end collapse-->
                <!--============ End Hero Form ======================================================================-->
                <!--============ Page Title =========================================================================-->
                <div class="page-title">
                    <div class="container">
                        <h1>Search Result</h1>
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
                        <div class="col-md-2">
                            
                            
                        </div>
                        <!--end col-md-3-->
                        <div class="col-md-9">
                            <!--============ Section Title===================================================================-->
                            
                            <!--============ Items ==========================================================================-->
                            <div class="items list compact grid-xl-3-items grid-lg-2-items grid-md-2-items">
@if(count($results) > 0 && $type == 1)
                                @foreach($results as $item)
                                <div class="item">
                                    
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">
                                                     @foreach($category as $item2)  

                                                        @if($item2->id == $item->id)
                                                            {{$item2->name}}
                                                        @endif

                                                     @endforeach
                                                </a>
                                                <a href="single-listing-1.html" class="title">{{$item->offertitle}}</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">
                                                @foreach($district as $item3)

                                                    @if($item->district_id == $item3->id)
                                                        {{$item3->name}}
                                                    @endif

                                                @endforeach


                                                , 

                                                @foreach($sector as $item4)
                                                
                                                    @if($item->sector_id == $item4->id)
                                                        {{$item4->name}}
                                                    @endif

                                                @endforeach</a>
                                        </h4>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p>{{$item->description}}</p>
                                        </div>
                                        <!--end description-->
                                        <a href="#" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                @endforeach
@elseif(count($results) > 0 && $type == 2)   
                                @foreach($results as $item)
                                <div class="item">
                                    
                                    <!--end ribbon-->
                                    <div class="wrapper">
                                        <div class="image">
                                            <h3>
                                                <a href="#" class="tag category">
                                                     @foreach($category as $item2)  

                                                        @if($item2->id == $item->id)
                                                            {{$item2->name}}
                                                        @endif

                                                     @endforeach
                                                </a>
                                                <a href="single-listing-1.html" class="title">{{$item->offertitle}}</a>
                                                <span class="tag">Offer</span>
                                            </h3>
                                            <a href="single-listing-1.html" class="image-wrapper background-image">
                                                <img src="assets/img/image-01.jpg" alt="">
                                            </a>
                                        </div>
                                        <!--end image-->
                                        <h4 class="location">
                                            <a href="#">
                                                @foreach($district as $item3)

                                                    @if($item->district_id == $item3->id)
                                                        {{$item3->name}}
                                                    @endif

                                                @endforeach


                                                , 

                                                @foreach($sector as $item4)
                                                
                                                    @if($item->sector_id == $item4->id)
                                                        {{$item4->name}}
                                                    @endif

                                                @endforeach</a>
                                        </h4>
                                        <!--end admin-controls-->
                                        <div class="description">
                                            <p>{{$item->description}}</p>
                                        </div>
                                        <!--end description-->
                                        <a href="#" class="detail text-caps underline">Detail</a>
                                    </div>
                                </div>
                                @endforeach 
                                          
@endif                            
                                <!--end item-->
                                    </div>
                                </div>
                                <!--end item-->
                            </div>
                            <!--end items-->
                        </div>
                        <!--end col-md-9-->

                        
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--end block-->
        </section>
        <!--end content-->

@include('layouts.bottom')
