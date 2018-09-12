@include('layouts.admintop')
<!--============ Page Title =========================================================================-->
<div class="page-title">
   <div class="container">
      <h1>Dashboard</h1>
   </div>
   <!--end container-->
</div>
<!--============ End Page Title =====================================================================-->
<div class="background"></div>
<!--end background-->
</div>
<!--end hero-wrapper-->
</header>
<section class="content">
      <div class="container">
         <div class="row">
            <div class="col-md-3">
               <nav class="nav flex-column side-nav">
                    <a class="nav-link active icon" href="{{url('/home')}}">
                        <i class="fa fa-user"></i>My Profile
                    </a>
                    <a class="nav-link icon" href="{{url('/province')}}">
                        <i class="fa fa-heart"></i>Province
                    </a>
                <a class="nav-link icon" href="{{url('/district')}}">
                        <i class="fa fa-star"></i>district
                    </a>
                    <a class="nav-link icon" href="#">
                        <i class="fa fa-recycle"></i>Sector
                    </a>
                <a class="nav-link icon" href="{{url('/category')}}">
                        <i class="fa fa-check"></i>Category
                    </a>
               </nav>
            </div>
            <!--end col-md-3-->
            <div class="col-md-9">
               <div class="row">
                  <div class="col-md-8">
                     <span class="col-md-4" style="font-size:18px;">
                       
                          <span class="col-md-4" style="font-size:70px;">
                        {{$user}} Users 
                        </span>

                     </span>
                  </div>
               </div>
               <!--end col-md-8-->
               <!--end col-md-3-->
            </div>
         </div>
      </div>
      <!--end row-->
      </div>
      <!--end container-->
   </section>
   <!--end block-->
</section>
<!--end content-->
@include('layouts.bottom')