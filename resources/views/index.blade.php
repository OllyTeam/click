@include('layouts.top')

<!--============ End Main Navigation ================================================================-->
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
{!! Form::open(['url'=>'search','method'=>'POST','class'=>'hero-form form']) !!}

   <div class="container">
      <!--Main Form-->

<div class="main-search-form">
<div class="form-row">
<div class="col-md-2 col-sm-2">
<div class="form-group">
<label for="what" class="col-form-label">Search</label>
<input name="keyword" type="text" class="form-control" id="what" placeholder="What are you looking for?">
</div>
<!--end form-group-->
</div>
<!--end col-md-3-->
<!--end col-md-3-->
<div class="col-md-2 col-sm-2">
<div class="form-group">
<label for="category" class="col-form-label">Category?</label>
<select name="category" id="category" data-placeholder="Select Category">
<option value="">-</option>
@foreach($category as $item)
<option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
</select>
</div>
<!--end form-group-->
</div>
<div class="col-md-2 col-sm-2">
<div class="form-group">
<label for="type" class="col-form-label">Type?</label>
<select name="type" id="category" data-placeholder="Select Category">
<option value="1">Job offer</option>
<option value="2">Service listing</option>
</select>
</div>
<!--end form-group-->
</div>
<div class="col-md-2 col-sm-2">
<div class="form-group">
<label for="location" class="col-form-label">location?</label>
<select name="location" id="category" data-placeholder="Select Category">
<option value="">-</option>
@foreach($district as $item)
<option value="{{$item->id}}">{{$item->name}}</option>
@endforeach
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
{{ Form::close() }}
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
                                <dl class="columns-3">
                                @foreach($category as $item)    
                                 <dt><a href="{{url('categorylist',$item->id)}}">{{$item->name}}</a></dt>
                                 <dd><img src="assets/icons/category-real-estate-b.png" width="" alt=""></dd>
                                @endforeach    
                                </dl
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
               <!--============SectionTitle===================================================================-->
               <div class="section-title clearfix">
                     <h1>Recent Ads</h1>
               </div>
               <!--============ Items ==========================================================================-->
               @foreach($service as $item)                            
               <div class="items list grid-xl-3-items grid-lg-3-items grid-md-2-items">
                  <div class="item" >
                     
                     <!--end ribbon-->
                     <div class="wrapper">
                        <div class="image">
                           <h3>
                              <a href="#" class="tag category">
                                 @foreach($category as $item2)
                                    @if($item->category_id == $item2->id)
                                       {{$item2->name}}
                                    @endif
                                 @endforeach
                              </a>
                              <a href="single-listing-1.html" class="title">{{$item->service_title}}</a>
                              <span class="tag">Service</span>
                           </h3>
                           <a href="single-listing-1.html" class="image-wrapper background-image">
                           <img src="assets/img/image-01.jpg" alt="">
                           </a>
                        </div>
                        <!--end image-->
                        <h4 class="">
                           <a href="#">
                              @foreach($district as $item2)
                                 @if($item->district_id == $item2->id)
                                    {{$item2->name}}
                                 @endif
                              @endforeach
                           </a>
                        </h4>
                        
                        <div class="meta">
                           <figure>
                              <i class="fa fa-calendar-o"></i>{{$item->created_at}}
                           </figure>
                           <figure>
                              <a href="#">
                              @foreach($user as $item2)
                                 @if($item->user_id ==  $item2->id)
                                  {{$item2->lname}}
                                 @endif
                              @endforeach
                              </a>
                           </figure>
                        </div>
                        <!--end meta-->
                        <div class="description">
                           <p>{{$item->service_desc}}</p>
                        </div>
                        <!--end description-->
                        <a href=" {{ url ('/single',$item->id)}} " class="detail text-caps underline">Detail</a>
                     </div>
                  </div>
                  <!--end item-->
               </div>
                  @endforeach 
            </div>
            <!--end col-md-9-->
            <div class="col-md-3">
               <!--============ Side Bar ===============================================================-->
               <!-- <aside class="sidebar">
                  <section>
                     <h2></h2>
                     <img src="assets/img/banner.jpg">
                     <hr>
                     <img src="assets/img/banner.jpg">
                     <hr>
                     <img src="assets/img/banner.jpg">
                  </section>
               </aside> -->
               <!--============ End Side Bar ===========================================================-->
            </div>
            <!--end col-md-3-->
         </div>
      </div>
      <div class="background" data-background-color="#fff"></div>
      <!--end background-->
   </section>
   <!--============ End Featured Ads =======================================================================-->
</section>
<!--end content-->
<!--*********************************************************************************************************-->
<!--************ FOOTER *************************************************************************************-->
<!--*********************************************************************************************************-->
<footer class="footer">
   <div class="wrapper">
      <div class="container">
         <div class="row">
            <div class="col-md-5">
               <a href="#" class="brand">
               <img src="assets/img/logo1.png" alt="">
               </a>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet
                  fermentum sem. Class aptent taciti sociosqu ad litora torquent per conubia nostra.
               </p>
            </div>
            <!--end col-md-5-->
            <div class="col-md-3">
               <h2>Navigation</h2>
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <nav>
                        <ul class="list-unstyled">
                           <li>
                              <a href="#">Home</a>
                           </li>
                           <li>
                              <a href="#">Listing</a>
                           </li>
                           <li>
                              <a href="#">Extras</a>
                           </li>
                           <li>
                              <a href="#">Contact</a>
                           </li>
                           <li>
                              <a href="#">Submit Ad</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <div class="col-md-6 col-sm-6">
                     <nav>
                        <ul class="list-unstyled">
                           <li>
                              <a href="#">My Ads</a>
                           </li>
                           <li>
                              <a href="#">Sign In</a>
                           </li>
                           <li>
                              <a href="#">Register</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
            <!--end col-md-3-->
            <div class="col-md-4">
               <h2>Contact</h2>
               <address>
                  <figure>
                     Kigali City<br>
                     RWANDA
                  </figure>
                  <br>
                  <strong>Email:</strong> <a href="#">info@thelink360.com</a>
                  <br>
                  <strong>Skype: </strong> thelink360
                  <br>
                  <br>
                  <a href="contact.html" class="btn btn-primary text-caps btn-framed">Contact Us</a>
               </address>
            </div>
            <!--end col-md-4-->
         </div>
         <!--end row-->
      </div>
      <div class="background">
         <div class="background-image original-size">
            <img src="assets/img/footer-background-icons.jpg" alt="">
         </div>
         <!--end background-image-->
      </div>
      <!--end background-->
   </div>
</footer>
<!--end footer-->
</div>
<!--end page-->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/popper.min.js"></script>
<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>-->
<script src="assets/js/selectize.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/icheck.min.js"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>